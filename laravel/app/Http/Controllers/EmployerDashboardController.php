<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerDashboardController extends Controller
{
    public function getIndex() {
	    return view('pages.employer_dashboard');
	}
}
