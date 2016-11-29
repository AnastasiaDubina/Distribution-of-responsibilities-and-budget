<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Maintext;

class BaseController extends Controller
{
    public function getIndex(){
        $text= Maintext::where('url','index')->first();//находим нужную запись first возвращает
	return view ('base')->with('text',$text);
	//
	}
}
