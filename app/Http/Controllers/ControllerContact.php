<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests\RequestKontak;
use App\ModelKontak;

class ControllerContact extends Controller
{
    //

    public function store(RequestStoreSiswa $request)
    {
        $stat=0;
    	$action = ModelKontak::create([
    			'nis'=>$request->input('nis'),
    			'nama'=>$request->input('nama'),
    			'alamat'=>$request->input('alamat')
    		]);
        if($action){
            $stat=1;
        }
    	return response()->json(['return'=>$stat]);
    }
}
