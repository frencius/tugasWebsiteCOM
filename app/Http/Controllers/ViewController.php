<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    
    public function home () {
        return view('home');
    }

    public function templateWebsite () {
        return view('templateweb');
    }

    public function paketWebsite () {
        return view('paketweb');
    }

    public function caraPesan () {
        return view('carapesan');
    }

    public function formIsiData () {
        return view('form-isi-data');
    }

}