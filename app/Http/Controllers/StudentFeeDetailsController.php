<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentFeeDetailsController extends Controller
{
	/**
	 * Get student fee collection report 
	 * @param  Request $request
	 * @return array
	 */
	public function report1(Request $request)
	{
		$student = new Student();
		$data = $student->getReport($request->all());
	}
	/**
	 * get student fee collection report head wise
	 * @param  Request $request
	 * @return array
	 */
	public function report2(Request $request)
	{
		$student = new Student();
		$data = $student->getHeadWiseReport($request->all());
	}
}