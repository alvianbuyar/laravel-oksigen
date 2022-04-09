<?php

namespace App\Http\Controllers\Admin;

use App\detail;
use App\Http\Controllers\Controller;
use App\purchaselog;
use App\task;
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
        $loan = detail::all();
        $task = task::all();
        return view('admin.dashboard', compact('pagename', 'loan', 'task'));
    }
}
