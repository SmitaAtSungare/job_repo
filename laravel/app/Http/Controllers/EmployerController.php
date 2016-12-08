<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Detail;
use App\Models\City;
use App\Models\Company;
use App\Models\Employer;
use App\Models\State;
use App\Models\Country;


class EmployerController extends Controller
{
    public function getIndex() {
      $country = Country::get();
	    return view('pages.employer',['countries' => $country]);
	}

  public function get(){
    return view('pages.employer_dashboard');
  }

	
public function getIndexx(){
    $city = City::paginate(3);
    return view('city', [
        'city' => $city
      ]);
  }


  public function save(Request $request){

    $this -> validate($request, [

  
          'cmp_name' => 'required|max:50',
          'detail_address' =>'required|unique|max:255',
          'email' => 'required|email|unique:details', 
          'emp_password' =>'required',
          'mobile' => 'required',
          'landline' =>'required',
          'emp_name' => 'required|max:50'
      ]);



        $cmp_name = $request['cmp_name'];
        $address = $request['address'];
        $email = $request['email'];
        $emp_password= $request['emp_password'];
        // $cpassword= $cpassword['cpassword'];
        $mobile = $request['mobile'];
        $landline = $request['landline'];
        $emp_name = $request['emp_name'];
      

        $detail = new Detail();
        $detail->address = $address;
        $detail->email = $email;
        $detail->mobile = $mobile;
        $detail->landline =$landline;
        $detail->save();
        $dId = $detail->id;

       $company = new Company();
       $company->cmp_name = $cmp_name;
       $company->detail_id = $dId;
       $company->save();
       $cId = $company->id;

       $employer = new Employer();
       $employer->emp_name = $emp_name;
       $employer->emp_password = $emp_password;
       // $employer->cpassword = $cpassword;
       $employer->emp_cmp_id = $cId;
       $employer->save();
       $eId = $employer->id;

       Auth::login($employer);

     

        return redirect()->route('employer')->with([
         'success' => 'Saved!'
                ]);
 

    }

  // public function signin(Request $request)
  // {
  //      $this->validate($request, [
  //           'emp_name' => 'required',-
  //           'emp_password' => 'required'
  //       ]);

  //       if(Auth::attempt(['emp_name' => $request['emp_name'],'emp_password' => $request['emp_password']]))
  //    {
  //       return redirect()->route('employer_dashboard');
  //     }
  //     return redirect()->back('');
  // }




  //    public function autoComplete(Request $request) {
  //       $query = $request->get('city','');
        
  //       $cities=City::where('city_name','LIKE','%'.$query.'%')->get();
        
  //       $data=array();
  //       foreach ($cities as $city) {
  //               $data[]=array('value'=>$city->city_name,'id'=>$city->city_id);
  //       }
  //       if(count($data))
  //            return $data;
  //       else
  //           return ['value'=>'No Result Found','id'=>''];
  //   }



public function getValues(Request $req){
      if($req['for'] === 'skills'){
        $skills = Skill::where('skill_title','like','%'.$req['data'].'%')
          ->take(20)
          ->get();           
          return $skills;       
      }   
      if($req['for'] === 'location'){
        $city = City::where('city_name','like','%'.$req['data'].'%')
          ->take(20)
          ->get();

        return $city;         
      }   
      // if($req['for'] === 'exp'){
      //  $skills = Skill::where('skill_title','like','%'.$req['data'].'%')->get();     
      //  return $skills;
      // }
      return false;
    }

    public function getSearch($skill = null,$location =null ,$exp =null){   
        $params = array ( $skill , $location , $exp );
        $skill = $city = $exp = null;

        foreach ( $params as $p ){
            if ( $p && preg_match ( '/(skill-)(.*)\-([0-9])/' , $p ) ) { 
                $skill = explode('-',$p); 
                $skill = end($skill);
            }elseif ( $p && preg_match ( '/(city-)(.*)\-([0-9])/' , $p ) ){ 
                $city = explode('-',$p); 
                $city = end($city);
            }elseif ( $p && preg_match ( '/(exp-)(.*)\-([a-zA-Z0-9])/' , $p ) ){ 
                $exp = explode('-',$p); 
                $exp = end($exp);
            }
        }        
        
        $exp == 'Fresher' ? $exp = 0 : $exp;
        $jobs = Job::join('cities','cities.city_id','=','jobs.city_id');
        // print_r($jobs);
        if($skill !== '' && $skill !== null){          
            if($city !== '' && $city !== null){  
                if($exp !== '' && $exp !== null){
                    $jobs->where([
                            ['jobs.city_id','=',$city],
                            ['jobs.job_skills','like','%'.$skill.',%'],
                            ['jobs.exp_years','=',$exp]
                        ]);
                }else{  
                    $jobs->where([
                            ['jobs.city_id','=',$city],
                            ['jobs.job_skills','like','%'.$skill.',%']
                        ]);
                }
            }else{  
                if($exp !== '' && $exp !== null){
                    $jobs->where([
                            ['jobs.job_skills','like','%'.$skill.',%'],
                            ['jobs.exp_years','=',$exp]
                        ]);
                }else{
                    $jobs->where('jobs.job_skills','like','%'.$skill.',%');
                }
            }
        }else{            
            if($city !== '' && $city !== null){ 
                if($exp !== '' && $exp !== null){ 
                    $jobs->where([
                            ['jobs.city_id','=',$city],                            
                            ['jobs.exp_years','=',$exp]
                        ]);
                }else{
                    $jobs->where('jobs.city_id','=',$city);
                }                
            }else{ 
                if($exp !== '' && $exp !== null){
                    $chk = 's2L2E1';                                        
                    $jobs->where('jobs.exp_years','=',$exp);                    
                }                
            }
        }

        $jobs = $jobs->get();        
        // print_r($exp.$skill.$city);
        return view('pages.job_list')->with(['jobs' => $jobs]);
        // // return json_encode($exp);
        // return $skill;
    }









}
