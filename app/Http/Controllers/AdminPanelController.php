<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminPanelController extends Controller
{
    public function index()
    {
        return view('admin_panel.index');
    }
}