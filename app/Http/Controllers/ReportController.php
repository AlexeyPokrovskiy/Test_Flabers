<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\support\Facades\input;

class ReportController extends Controller
{


    public function index()
    {
        return view('create');
    }

    public function reports()
    {
        return view('reports');
    }
    public function addReport(Request $request)
    {
//        $rules = array(
//            'firstname'=>'required',
//            'secondname'=>'required',
//            'tel'=>'required',
//            'email'=>'required',
//            'city'=>'required',
//            'cost'=>'required'
//        );
//
//        $validator=Validator::make(input::all(),$rules);
//        if($validator->fails()){
//            return response::json(array('errors'=>$validator->getMessageBag()->toarray()));
//        }

        if($request->ajax()){
            $report = new Report;
            $report->firstname=$request->firstname;
            $report->secondname=$request->secondname;
            $report->tel=$request->tel;
            $report->email=$request->email;
            $report->city=$request->city;
            $report->cost=$request->cost;
            $report->save();
            return "Заказ оформлен!";
        }
        else{
            return "Шото не так";
        }



    }
}
