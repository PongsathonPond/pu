<?php

namespace App\Http\Controllers;

use App\Models\patient;
use Illuminate\Http\Request;

class patientController extends Controller
{
    public function index()
    {
        $p = patient::all();

        return view('page.pat.index', compact('p'));
    }

    public function store(Request $request)
    {

        $tableName = new patient();
        $tableName->name = $request->name;
        $tableName->age = $request->age;
        $tableName->relevant = $request->relevant;
        $tableName->name_pat = $request->name_pat;
        $tableName->age_pat = $request->age_pat;
        $tableName->hn = $request->hn;
        $tableName->save();

        return redirect()->route('pat')->with('success', "บันทึกข้อมูลเรียบร้อย");
    }

 
}
