<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function ShowDashboard(){

    return view('cms.master');
}}
