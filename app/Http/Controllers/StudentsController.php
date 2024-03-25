<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illumunate\Support\Facade\DB;

class StudentsController extends Controller
{
    public function index()
    {
        // $data = Students::all();
        $data = DB::table('students')
        ->select('first_name')
        ->get();

        dd($data);


        return view('students.index', ['students' => $data]);
    }
}
