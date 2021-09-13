<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function namanim(){
        return "Nama : Wendha Aldafa <br>
        NIM : 2031710154";
    }
    public function article(){
        return "Halaman artikel ".$id();
    }
}
