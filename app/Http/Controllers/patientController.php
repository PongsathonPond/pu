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
        $request->validate([
            'title' => 'required|max:255',
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'age' => 'required',
            'relevant' => 'required|max:255',
            'title_pat' => 'required|max:255',
            'firstname_pat' => 'required',
            'lastname_pat' => 'required|max:255',
            'age_pat' => 'required|max:255',
            'hn' => 'required',

        ],
            ['title.required' => "กรุณาป้อนข้อมูล",
                'firstname.required' => "กรุณาป้อนข้อมูล",
                'lastname.required' => "กรุณาป้อนข้อมูล",
                'age.required' => "กรุณาป้อนข้อมูล",
                'relevant.required' => "กรุณาป้อนข้อมูล",
                'title_pat.required' => "กรุณาป้อนข้อมูล",
                'firstname_pat.required' => "กรุณาป้อนข้อมูล",
                'lastname_pat.required' => "กรุณาป้อนข้อมูล",
                'age_pat.required' => "กรุณาป้อนข้อมูล",
                'hn.required' => "กรุณาป้อนข้อมูล",

            ]
        );

        $tableName = new patient();
        $tableName->title = $request->title;
        $tableName->firstname = $request->firstname;
        $tableName->lastname = $request->lastname;
        $tableName->age = $request->age;
        $tableName->relevant = $request->relevant;
        $tableName->title_pat = $request->title_pat;
        $tableName->firstname_pat = $request->firstname_pat;
        $tableName->lastname_pat = $request->lastname_pat;
        $tableName->age_pat = $request->age_pat;
        $tableName->hn = $request->hn;
        $tableName->save();

        return redirect()->route('pat')->with('success', "บันทึกข้อมูลเรียบร้อย");
    }

    public function update(Request $request, $id)
    {

        patient::find($id)->update([

            'title' => $request->title,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'age' => $request->age,
            'relevant' => $request->relevant,
            'title_pat' => $request->title_pat,
            'firstname_pat' => $request->firstname_pat,
            'lastname_pat' => $request->lastname_pat,
            'age_pat' => $request->age_pat,
            'hn' => $request->hn,

        ]);

        return redirect()->back()->with('update', "อัพเดตข้อมูลเรียบร้อย");
        // return redirect()->route('usermanager')->with('success',"อัพเดตข้อมูลเรียบร้อย");
    }

    public function delete($id)
    {

        //ลบข้อมูล
        $delete = patient::find($id)->delete();
        return redirect()->back()->with('delete', "ลบเรียบร้อยแล้ว");
        // return redirect()->route('staff_add');
    }
}
