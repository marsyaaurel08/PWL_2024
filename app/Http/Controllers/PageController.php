<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama : Marsya Aurelia Sefira <br> NIM : 2341720011';
    }

    public function articles($articleId) {
        return 'Halaman Artikel dengan ID : '.$articleId;
    }
}
