<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable=[
        'firstname','secondname','tel','email','city','cost'
    ];
    protected $table = 'reports';
    protected $hidden = ['updated_at','created_at'];

    public static function ListQuery($city,$cost){

        if($city){
            $reports=Report::where('city', '=', $city)->get();
        }
        if($cost and $city){
            $reports=Report::where('city', '=', $city)->whereBetween('cost',[1, $cost])->get();
        }
        else{
            $reports=Report::whereBetween('cost',[1, $cost])->get();
        }
        return  $reports;
//        $reports=Report::where('city', '=', $city)->where('cost', '=', 1)->get();
    }
}
