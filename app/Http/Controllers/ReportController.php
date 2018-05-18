<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use Validator;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use Illuminate\support\Facades\input;

class ReportController extends Controller
{
    public function index()
    {
        return view('create');
    }

    public function reports()
    {
        return view('reports', [
            'reports'=>Report::orderBy('created_at','asc')->paginate(10),
            'sum'=>0
            ]);
    }
    public function addReport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname'=>'required|max:255|alpha',
            'secondname'=>'required|max:255|alpha',
            'tel'=>'required|numeric',
            'email'=>'required|max:255|email',
            'city'=>'required|max:255',
            'cost'=>'required|numeric'
        ]);
        if ($validator->fails()) {

            return json_encode($validator->errors());
        }
        else{
            if($request->ajax()){
                $report = new Report;
                $report->firstname=$request->firstname;
                $report->secondname=$request->secondname;
                $report->tel=$request->tel;
                $report->email=$request->email;
                $report->city=$request->city;
                $report->cost=$request->cost;
                $report->save();
                return json_encode(array("success"=>'Заказ отправлен'));
            }
        }
    }

    public function ListReport(Request $request){
        if($request->ajax()) {

            if($request->id){
                return  json_encode(Report::where('id', '=', $request->id)->get());
            }
            else{
                if($request->cost and $request->city){
                    return  json_encode(Report::where('city', '=', $request->city)->whereBetween('cost',[1, $request->cost])->get());
                }
                else if($request->city){
                    return json_encode(Report::where('city', '=', $request->city)->get());
                }
                else if($request->cost){
                    return json_encode(Report::whereBetween('cost',[1, $request->cost])->get());
                }
                else{
                    return json_encode(Report::all());
                }
            }
        }
    }

    public function ApiPb(){
       return json_decode(file_get_contents('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5'), true);
    }

}
