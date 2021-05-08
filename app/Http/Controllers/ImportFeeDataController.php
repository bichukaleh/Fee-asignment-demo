<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportFeeDataController extends Controller
{
	/**
	 * Read xls file and save data
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
    public function import(Request $request){
    	$this->validate($request, [
	      'fees'  => 'required|mimes:xls,xlsx'
	     ]);

    	 $path = $request->file('fees')->getRealPath();

     	$data = Excel::toArray('',$path ,null, \Maatwebsite\Excel\Excel::XLSX)[0];
     	$importData = $this->prepareData($data);
	    try{ 
		     $result = $this->saveDetails($importData);
		     return redirect('/')->with('success', 'Data saved successfully!');
	 	}catch(\Exception $e){
	 		return redirect('/')->with('error', 'Failed to save data..');
	 	}
    	
    }
    // TUITION FEE : 110
    // Exam Fee : 42
    // Degree Fee : 37
    // Other Fee: 86
    // Convocation Fee Head :36
    // Fine Fee : 54
    // Voucher Type : 5
    // Adjusted_Amount 	: 30
    // Fund Transfer Amount : 55
    /**
     * Divide data into various array
     * @param  array $data 
     * @return array
     */
    public function prepareData($data)
    {
    	$studentData = array();
    	if(count($data) > 0)
	     {
	     	foreach ($data[0] as $key => $header) {
	     		$headerdata[] =$header;
	     	}
	     	unset($data[0]);
	      foreach($data as $key => $row)
	      {
	      		$studentData[] = [
		         'admno'  => $row[8],
		         'rollno' => $row[7],
		         'student' => $row[9],
		         'status'  => ($row[10] == "Active") ? 1 : 0,
		         'program' => $row[13]
		        ];

		        $financialTrans[] = [
		         'amount'  => $row[17],
		         'acadYear'   => $row[2],
		        ];

		         $financialTransDetails[] = [
		         'financial_tran_id'  => $financialTransId,
		         'amount'   => $row[17],
		         'head_name'   => $row[2],
		        ];

		        $feeCollection[]=[
		        	'admno'  => $row[8],
		            'rollno' => $row[7],
		            'amount' => $row[17],
		            'brid'   => $row[2],
		            'acadamicYear'=> $row[2],
		        ];
		        $feeCollectionHeadWise[]=[
		        	'receiptId'  => $row[8],
		            'headName' => $row[17],
		            'brid'   => $row[2],
		            'amount'=> $row[2],
		        ];
		   }
		   
	  }
	  return [
	  	'studentData' => $studentData,
	  	'financialTrans' =>$financialTrans,
	  	'financialTransDetails' => $financialTransDetails,
	  	'feeCollection' =>$feeCollection,
	  	'feeCollectionHeadWise' => $feeCollectionHeadWise
	  ];
    }
}
