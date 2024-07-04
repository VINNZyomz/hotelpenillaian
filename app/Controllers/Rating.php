<?php

namespace App\Controllers;

class Rating extends BaseController
{
    public function bintang(): string
    {
        return view('pages/rate');
    }
}
