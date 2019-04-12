<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalasngodingController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {	
    	$messages = [
		    'required' => ':attribute wajib diisi cuy!!!',
		    'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
		    'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
		    'numeric' => ':attribute harus angka cuy!!!',
		];

        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'pekerjaan' => 'required',
           'usia' => 'required|numeric'
        ],$messages);
 		
 		//buat proses yang teman-teman inginkan di sini.



        return view('proses',['data' => $request]);
    }
}
