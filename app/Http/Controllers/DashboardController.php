<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index(){
        $users = User::all()->count();
        $students = Student::all()->count();

        return view('pages.admin.dashboard', [
            'users' => $users,
            'students' => $students,
        ]);
    }
}
