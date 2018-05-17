<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable=[
        'firstname','secondname','tel','email','city','cost'
    ];
    protected $table = "reports";

}
