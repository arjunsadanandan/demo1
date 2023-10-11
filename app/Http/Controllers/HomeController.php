<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home(){
    return view('index');
  }
  public function index(){
    return view('welcome');
  }
  public function welcome(){
    return view("tsadmin");
  }
  public function tsadmin(){
    return view("teacher");
  }
  public function tsadmin1(){
    return view("student");
  }
  public function tsadmin2(){
    return view("admin");
  }
}
