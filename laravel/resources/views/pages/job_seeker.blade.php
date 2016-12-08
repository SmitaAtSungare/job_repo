@extends('layouts.master')

@section('content')



	<div class="container" style="padding-left:25px;">
		
		<div class="col-md-8 col-sm-12">
		
			<div id="PerDiv" class="abc" style="display:none;">
				<div class="page-header">
					<h1>Personal Detail</h1>
				</div><!-- /.page-header -->
				
				
				<div class="DivWrap">
					<form class="form-horizontal">
					
						<div class="">
							<div class="col-md-1">
							&nbsp;
							</div>
							
							<div class="col-md-8">
							
								<div class="form-group">
									<label class="col-sm-3 control-label "> Name</label>
									<div class="col-md-4">					  
									  <input class="form-control" id="ex1" type="text"placeholder="First Name">
									</div>
									<label class="col-sm-1 control-label "></label>
									<div class="col-md-4">
									  <input class="form-control" id="ex2" type="text" placeholder="Last Name">
									</div>
								</div>
							
							
								<div class="form-group">
									<label class="col-sm-3 control-label">Designation</label>
									<div class="col-sm-9">
									  <input class="form-control" id="focusedInput" type="text">
									</div>
								</div>
								
								
								
								<div class="form-group">
									<label class="col-sm-3 control-label ">Objective</label>
									<div class="col-sm-9">
									  <textarea class="form-control" rows="5" id="comment"></textarea>
									</div>
								</div>
							</div>
							
							<div class="col-md-3">
							
									<div class="form-group">
									
										<div class="FileUpload">
											<center>
												<label class="">
												<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="images/profile-pic.jpg" />
												</label>	
												<div class="clearfix"></div>
												<label class="UpBtn btn-file">
													Profile Picture <input type="file" style="display: none;">
												</label>
											</center>
										</div>
									</div>
							</div>
						</div>
						
						<div class="clearfix"></div>
					
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Skills</label>
							<div class="col-sm-9">
							  <input class="form-control" id="focusedInput" type="text">
							</div>
						</div>
					  
						
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Address</label>
							<div class="col-sm-9">
							  <textarea class="form-control" rows="5" id="comment"></textarea>
							</div>
						</div>
						
						
						
						
						
						
						
						<div class="form-group phone-number">
							<label class="col-xs-12 col-md-3 control-label">Mobile</label>
							
							<div class="col-xs-12 col-md-3">
								<input type="tel" name="phone" class="form-control" value="" size="3" maxlength="12" required="required" title="">
							</div>
					   
							<label class="col-xs-12 col-md-2 control-label">Phone</label>
							
							<div class="col-xs-12 col-md-4">
								<input type="tel" name="phone" class="form-control" value="" size="3" maxlength="13" required="required" title="">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
							  <input class="form-control" id="focusedInput" type="email">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3  control-label">Gender</label>
							<label class="radio-inline"><input type="radio" name="optradio">Male</label>
							<label class="radio-inline"><input type="radio" name="optradio">Female</label>
						</div>
						
						
						<div class="form-group">
						 <label class="col-sm-3 control-label ">Marrital Status</label>
							<select class="demo12" style="width:auto; min-width:345px;">
							  <option value="AL">Single</option>
							  <option value="WY">Married</option>
							</select>
						</div>
						
					
						<div class="form-group" style="margin-right:0px;margin-left:0px;">
						<label class="col-sm-3  control-label" style="margin-right:8px;">Date of Birth</label>
							<div class="input-group date" id='datetimepicker1' style="width:auto;">
								<input type='text' class="form-control" />
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
								
							</div>
						</div>
						
						
						
						
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Language Known</label>

							<div class="col-sm-9">
								<div class="inline">
									<input type="text" name="tags" id="form-field-tags" data-role="tagsinput" placeholder="Enter tags ..." />
								</div>
							</div>
						</div>
									
						<div class="clearfix form-actions">					
							<div class="form-group">					
								<button type="button" id="PerBtn" class="btn btn-primary center-block">Continue</button>					
							</div>					
						</div>
						
						
				
					</form>
				</div>

			</div>
			
			
			
			
		
		
			<div id="ExpDiv" class="abc" style="display:none;">
			
			
			
				<div class="page-header">
					<h1>
						Experience Detail
						<small>
							<i class="ace-icon fa fa-angle-double-right"></i>
							Write your experience detail
						</small>
					</h1>
				</div><!-- /.page-header -->
			
				<div class="DivWrap">
					<form class="form-horizontal">
						
					
						<div class="form-group">
						<label class="col-sm-3 control-label ">Company Name</label>
							<div class="col-sm-9">
							  <input class="form-control" id="focusedInput" type="text">
							</div>
						</div>
						
						<div class="form-group">
						<label class="col-sm-3 control-label ">Job Title</label>
							<div class="col-sm-9">
							  <input class="form-control" id="focusedInput" type="text" >
							</div>
						</div>				
						
						
						
						<div class="form-group">
						<label class="col-sm-3 control-label ">Location</label>
							<div class="col-sm-9">
							  <input class="form-control" id="focusedInput" type="text">
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-sm-3 control-label ">Salary</label>
							<div class="col-sm-6">
							  <input class="form-control" id="focusedInput" type="text">
							</div>
							<div class="col-sm-3">
								<select class="demo12" style="width:auto; min-width:160px;">
								  <option value="AL">Monthly</option>
								  <option value="WY">Yearly</option>
								</select>
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-sm-3  control-label" style="">Time Period</label>
						
							<div class="col-md-3">
							
								<div class="input-group date" id='datetimepicker1' style="width:auto;">
									<input type='text' class="form-control" placeholder="From" />
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
									
								</div>
							</div>

							<div class="col-md-2">
								<div class="input-group date" id='datetimepicker2' style="width:auto;">
									<input type='text' class="form-control"  placeholder="To"/>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
									
								</div>
							</div>
							<div class="col-md-1">
							<label>OR</label>
							</div>
							<div class="col-md-3">
								<div class="checkbox">
									<label><input type="checkbox"> Currently Working</label>
								</div>
							</div>
						</div>
						
						
						
						<div class="clearfix form-actions">
							<div class="form-group">	
								<center>
									<button type="button" class="btn btn-primary">Add More</button>	
									<button type="button"  id="ExpBtn" class="btn btn-primary col-md-offset-1">Continue</button>	
								</center>
							</div>					
						</div>
						
						
				
					</form>

				</div>
			
			</div>
			
			
			
			
			
			
			
			<div id="EduDiv" class="abc" style="display:none;">
			
			
				<div class="page-header">
					<h1>Educational Detail</h1>
				</div><!-- /.page-header -->
				
				<div class="DivWrap">
					<h4 class="header green">SSC</h4>
					

					<form class="form-horizontal">
						
					
						<div class="form-group">
						<label class="col-sm-3 control-label ">School Name</label>
							<div class="col-sm-9">
							  <input class="form-control" id="focusedInput" type="text">
							</div>
						</div>
						
						<div class="form-group">
						<label class="col-sm-3 control-label ">Location</label>
							<div class="col-sm-9">
							  <input class="form-control" id="focusedInput" type="text" >
							</div>
						</div>				
						
						
						
						<div class="form-group">
						<label class="col-sm-3 control-label ">University</label>
							<div class="col-sm-9">
							  <input class="form-control" id="focusedInput" type="text">
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-sm-3 control-label ">Passing Year</label>
							
							<div class="col-sm-3">
								<select class="demo12" style="width:auto; min-width:160px;">
								  <option value="AL">2011</option>
								  <option value="WY">2012</option>
								  <option value="AL">2013</option>
								  <option value="WY">2014</option>
								  <option value="AL">2015</option>
								  <option value="WY">2016</option>
								</select>
							</div>
							
							<label class="col-sm-3 control-label ">Percentage</label>
							<div class="col-sm-3">
							  <input class="form-control" id="focusedInput" type="text">
							</div>
						</div>
						
					</form>
				</div>


				<div class="DivWrap">

					<h4 class="header green">HSC</h4>
					

					<form class="form-horizontal">
						
					
						<div class="form-group">
						<label class="col-sm-3 control-label ">College Name</label>
							<div class="col-sm-9">
							  <input class="form-control" id="focusedInput" type="text">
							</div>
						</div>
						
						<div class="form-group">
						<label class="col-sm-3 control-label ">Location</label>
							<div class="col-sm-9">
							  <input class="form-control" id="focusedInput" type="text" >
							</div>
						</div>				
						
						
						
						<div class="form-group">
						<label class="col-sm-3 control-label ">University</label>
							<div class="col-sm-9">
							  <input class="form-control" id="focusedInput" type="text">
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-sm-3 control-label ">Passing Year</label>
							
							<div class="col-sm-3">
								<select class="demo12" style="width:auto; min-width:160px;">								
									  <option value="AL">2011</option>
									  <option value="WY">2012</option>
									  <option value="AL">2013</option>
									  <option value="WY">2014</option>
									  <option value="AL">2015</option>
									  <option value="WY">2016</option>
								</select>
							</div>
							
							<label class="col-sm-3 control-label ">Percentage</label>
							<div class="col-sm-3">
							  <input class="form-control" id="focusedInput" type="text">
							</div>
						</div>
						
						
					
					</form>	
				
				</div>
					
					
					
					
			
				
				
				<div class="DivWrap">
				
					<h4 class="header green">BACHELORS</h4>
					

					<form class="form-horizontal">
						
					
						<div class="form-group">
						<label class="col-sm-3 control-label ">College Name</label>
							<div class="col-sm-9">
							  <input class="form-control" id="focusedInput" type="text">
							</div>
						</div>
						
						<div class="form-group">
						<label class="col-sm-3 control-label ">Location</label>
							<div class="col-sm-9">
							  <input class="form-control" id="focusedInput" type="text" >
							</div>
						</div>				
						
						
						
						<div class="form-group">
						<label class="col-sm-3 control-label ">University</label>
							<div class="col-sm-9">
							  <input class="form-control" id="focusedInput" type="text">
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-sm-3 control-label ">Degree</label>
							
							<div class="col-sm-9">
								<select class="demo12" style="width:auto; min-width:460px;">
								  <option value="AL">MCA</option>
								  <option value="WY">MBA</option>
								  <option value="AL">BBA</option>
								  <option value="WY">MCS</option>
								</select>
							</div>
							
						</div>
						
						
						
						
						<div class="form-group">
							<label class="col-sm-3 control-label ">Passing Year</label>
							
							<div class="col-sm-3">
								<select class="demo12" style="width:auto; min-width:160px;">
								  <option value="AL">2011</option>
								  <option value="WY">2012</option>
								  <option value="AL">2013</option>
								  <option value="WY">2014</option>
								  <option value="AL">2015</option>
								  <option value="WY">2016</option>
								</select>
							</div>
							
							<label class="col-sm-3 control-label ">Percentage</label>
							<div class="col-sm-3">
							  <input class="form-control" id="focusedInput" type="text">
							</div>
						</div>
						
						
					</form>	
				</div>
				
					<div class="clearfix form-actions">
						<div class="form-group">	
							<center>
								<button type="button" class="btn btn-primary">Submit</button>	
							</center>
						</div>	
					</div>		
				
				
			</div>
		
		
		</div>
		
		<div class="col-md-3 col-md-offset-1" >
			<img src="images/1.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre"  height="236">
		
			
				
					<div class="panel2 panel-default2 coupon2">
					
					  
					  <div class="panel-body">
						<img src="images/AD.jpg" class="coupon-img img-rounded">
						<div class="col-md-12">
							<ul class="items">
								<li>Add up to 5 quarts of motor oil (per specification)</li>
								<li>Complimentary multi-point inspection</li>
							</ul>
						</div>
					  
						<div class="col-md-12">
							<p class="disclosure">Using Genuine Oil Filter and 
							multigrade oil up to vehicle specification. Lube as 
							time of write-up. No cash value.</p>
						</div>
					  </div>
					  <div class="panel-footer">
						<div class="coupon-code">
							Code: GBWO2
						   
						</div>
					   
					  </div>
					</div>
		</div>
					
	</div>

@stop