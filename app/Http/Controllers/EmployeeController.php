<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = DB::table('employees')
            ->leftJoin('departments','employees.department_id',"=",'departments.department_id')
            ->get();
        return view('welcome', compact('employee'));
    }
}