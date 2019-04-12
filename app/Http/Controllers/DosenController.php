<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
    	$nama ='Billie Arianto';
    	$pelajaran = ['Kalkulus','Fisika','Algoritma & pemrograman'];
    	return view('biodata',['nama' => $nama,'matkul' => $pelajaran]);
    }
}
