<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminViewCOntroller extends Controller
{
        public function index()
    {
        return view ('admin/admin-home');
    }

        public function pemesanan()
    {
        return view ('admin/pemesanan');
    }

        public function template()
    {
        return view ('admin/template');
    }

    
}
