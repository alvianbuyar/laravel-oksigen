<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\purchaselog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['role:Admin']);
    }

    public function index()
    {
        $pagename = 'Dashboard';

        return view('admin.dashboard', compact('pagename'));
    }
}
