<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{
    public function create(Request $request)
    {
        $employee = new Employee;
        $employeeID = DB::table('employees')->latest('employee_id')->pluck('employee_id')->first();
        $employee->employee_id = $employeeID + 1;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->department_id = $request->department_id;
        $employee->save();
        return redirect('/');
    }
}
