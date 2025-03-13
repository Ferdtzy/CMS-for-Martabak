<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //$data = [
         //   'nama' => 'Rizki',
         //   'sebagai' => 'Developer',
        //];

        $nama = 'Rizki';
        $sebagai = 'Developer';

        return view('home', compact('nama', 'sebagai'));
    }

    public function contact()
    {
        return view('contact');
    }
}
