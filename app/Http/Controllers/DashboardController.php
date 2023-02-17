<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use App\Models\Religion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $employee = new Employee();
        $religion = new Religion();

        $religionTotal = $religion::all()->count();
        $employeeTotal = $employee::all()->count();
        $userTotal = User::all()->count();
        $mostReligion = $employee::select('id_religions')
            ->groupBy('id_religions')->orderByraw('COUNT(*) DESC')->first()
            ->religions->nama;

        $religionName = $employee::select('id_religions')
        ->groupBy('id_religions')->get()->map(function ($id){
            return $id->religions->nama;
        });
        $religionAmount = $employee::select('id_religions')
        ->groupBy('id_religions')->get()->map(function ($id) use($employee) {
            return $employee::where('id_religions','like', '%'.$id->religions->id.'%')
            ->count();
        });

        return view(
            'dashboard.index',
            compact('employeeTotal', 'religionTotal', 'userTotal', 'mostReligion', 'religionName', 'religionAmount')
        );
    }
}
