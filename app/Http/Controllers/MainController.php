<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    

 public function index(){

    	$title = "Home";
    	
    	return view('MainPages.index')->with(['title'=>$title]);

    }




    public function aboutus(){

    $title = "About Us";

    return view('MainPages.aboutus')->with(['title'=>$title]);
  }


    public function contactus(){

    $title = "Contact Us";

    return view('MainPages.contactus')->with(['title'=>$title]);
  }



public function Security(){

    $title = "Network Security";

    return view('MainPages.Security')->with(['title'=>$title]);
  }


public function Consulting(){

    $title = "IT Consulting";

    return view('MainPages.Consulting')->with(['title'=>$title]);
  }



public function Training(){

    $title = "Computer Training";

    return view('MainPages.Training')->with(['title'=>$title]);
  }



public function Services(){

    $title = "Cloud Services";

    return view('MainPages.Services')->with(['title'=>$title]);
  }


  public function careers(){

    $title = "Careers";

    return view('MainPages.careers')->with(['title'=>$title]);
  }

















}
