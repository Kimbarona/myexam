<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(){
        $data = [
            'fname' => 'Dave',
            'lname' => 'John'
        ];

        return Inertia::render('Dashboard/index', $data);
    }
}
