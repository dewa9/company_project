<?php

namespace App\Http\Controllers;
use App\Http\Requests\RequestKontak;
use App\ModelKontak;

class ControllerContact extends Controller
{
    //

    public function store(RequestKontak $request)
    {
        $stat=0;
        $captcha = $request->input('g-recaptcha-response');

        if($captcha){
            $action = ModelKontak::create([
                'email'=>$request->input('email'),
                'name'=>$request->input('name'),
                'phonenumber'=>$request->input('phonenumber'),
                'remarks'=> $request->input('remarks'),
                'status'=>'D'
            ]);
            if($action){
                $stat=1;
            }
        }
    	
    	return response()->json(['return'=>$stat]);
    }
}
