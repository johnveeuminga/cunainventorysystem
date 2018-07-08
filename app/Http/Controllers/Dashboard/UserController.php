<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\View;

class UserController extends DashboardController
{
    /**
     * Creates a new controller instance
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        View::share('page_title', 'Accounts');
    }

    /**
     * Shows all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('dashboard.users.index');
    }
}
