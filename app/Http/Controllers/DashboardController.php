<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Religion;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $employee = new Employee();

        $religionTotal = Religion::all()->count();
        $employeeTotal = $employee::all()->count();
        $userTotal = User::all()->count();
        $mostReligion = $employee::select('id_religions')
        ->groupBy('id_religions')->orderByraw('COUNT(*) DESC')->first()
        ->religions->nama;

        return view('dashboard.index', 
        compact('employeeTotal', 'religionTotal', 'userTotal','mostReligion'));
    }
}
