<?php

namespace App\Http\Controllers;


class KataController extends Controller {

    public function index()
    {
        return view('kata');
    }

    public function receive()
    {
        return 'test';
    }

    public function send()
    {
        return 'test';
    }

}