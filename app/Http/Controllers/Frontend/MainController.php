<?php

namespace App\Http\Controllers\Frontend;

use Grozwalker\Crud\Http\Controllers\CrudController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends CrudController
{
    public function index()
    {
        return view('frontend.welcome');
    }
}
