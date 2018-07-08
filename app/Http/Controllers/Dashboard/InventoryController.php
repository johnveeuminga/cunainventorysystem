<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class InventoryController extends DashboardController
{
     /**
     * Creates a new controller instance
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        View::share('page_title', 'Inventory');
    }

    /**
     * Shows all products.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('dashboard.inventory.index');
    }
}
