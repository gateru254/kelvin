<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\basicInfo;

class BasicInfoController extends Controller
{
    public function getBasicInfo(Request $_request){
       return  BasicInfo::all()[0];
    
}
}
