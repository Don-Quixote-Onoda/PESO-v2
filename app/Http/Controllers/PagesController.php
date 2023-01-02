<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function applicant()
    {
        return view('client.applicant');
    }

    public function employer()
    {
        return view('client.employer');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
