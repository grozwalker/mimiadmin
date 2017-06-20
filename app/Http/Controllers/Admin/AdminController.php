<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Client;

class AdminController extends Controller
{

    public function index()
    {
        $birthClients = Client::haveBirthday()->get();
        return view('admin.main.index', compact('birthClients'));
    }

}