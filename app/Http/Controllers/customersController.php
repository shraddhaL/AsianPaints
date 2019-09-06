<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
class customersController extends Controller
{
    
    /* public function index(){
     
		$customers = customer::all();
     	return view('customers.index',compact('customers'));
    	}*/

         public function admin(){
        $customers = customer::all();
        return view('admin',compact('customers'));
        }

    	 public function home(){
    	  	return view('customers.home');
    	}

 

     public function store(){
     
     	$customr=new customer();

     	$customr->name=request('name');
     	$customr->email=request('email');     	
     	$customr->phoneNum=request('phoneNum');
     	$customr->quantity=  request('quantity');
     	$customr->pinCode=request('pin');
     	$customr->city=request('city');

     	$customr->save();

     	return redirect('/customers/home')->with('popup', 'updated');

    	}
}
