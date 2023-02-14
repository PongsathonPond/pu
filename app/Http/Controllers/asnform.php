<?php

namespace App\Http\Controllers;
use App\Models\patient;
use App\Models\asnForm1;
use App\Models\asnForm2;
use Illuminate\Http\Request;

class asnform extends Controller
{
    public function edit($id)
    {
        $pat = patient::find($id);
        return view('page.pat.view', compact('pat'));
    }
    public function edit2($id)
    {
        $pat = patient::find($id);
        return view('page.pat.view2', compact('pat'));
    }


    public function storeform(Request $request)
    {

        $tableName = new asnForm1();
        $tableName->f1 = $request->f1;
        $tableName->f1_2 = $request->f1_2;
        $tableName->f1_3 = $request->f1_3;
        $tableName->f2 = $request->f2;
        $tableName->f3_1 = $request->f3_1;
        $tableName->f3_2 = $request->f3_2;
        $tableName->f3_3 = $request->f3_3;
        $tableName->f4_1 = $request->f4_1;
        $tableName->f4_2 = $request->f4_2;
        $tableName->f5 = $request->f5;
        $tableName->f6_1 = $request->f6_1;
        $tableName->f6_2 = $request->f6_2;
        $tableName->f6_3 = $request->f6_3;
        $tableName->f6_4 = $request->f6_4;
        $tableName->f6_5 = $request->f6_5;
        $tableName->f7_1 = $request->f7_1;
        $tableName->f7_2 = $request->f7_2;
        $tableName->f7_3 = $request->f7_3;
        $tableName->f7_4 = $request->f7_4;
        $tableName->sumtotal = $request->sumtotal;
        $tableName->patient_id = $request->id;

        $tableName->save();

        return redirect()->route('pat')->with('successform', "บันทึกข้อมูลเรียบร้อย");

    }

    public function storeform2(Request $request){


       $sumf2 = $request->f2_0+$request->f2_1+$request->f2_2+$request->f2_3+$request->f2_4+$request->f2_5;
       $sumf3 = $request->f3_0+$request->f3_1+$request->f3_2+$request->f3_3+$request->f3_4;
       $sumf4 = $request->f4_0+$request->f4_1+$request->f4_2+$request->f4_3+$request->f4_4+$request->f4_5;
       $sumf5 = $request->f5_0+$request->f5_1+$request->f5_2+$request->f5_3+$request->f5_4+$request->f5_5;
       $sumf6 = $request->f6_0+$request->f6_1+$request->f6_2+$request->f6_3+$request->f6_4;
       $sumf7 = $request->f7_0+$request->f7_1+$request->f7_2+$request->f7_3+$request->f7_4+$request->f7_5;;
       $sumf8 = $request->f8_0+$request->f8_1+$request->f8_2+$request->f8_3+$request->f8_4+$request->f8_5;;
       $sumf9 = $request->f9_0+$request->f9_1+$request->f9_2+$request->f9_3+$request->f9_4+$request->f9_5;;
       $sumf10 = $request->f10_0+$request->f10_1+$request->f10_2+$request->f10_3+$request->f10_4+$request->f10_5;;


       $sumall = $sumf3+$sumf2+$sumf4+$sumf5+$sumf6+$sumf7+$sumf8+$sumf9+$sumf10+$request->f1;
        $tableName = new asnForm2();
        $tableName->f1 = $request->f1;
        $tableName->f2 = $sumf2;
        $tableName->f3 = $sumf3;
        $tableName->f4 = $sumf4;
        $tableName->f5 = $sumf5;
        $tableName->f6 = $sumf6;
        $tableName->f7 = $sumf7;
        $tableName->f8 = $sumf8;
        $tableName->f9 = $sumf9;
        $tableName->f10 = $sumf10;
        $tableName->sumtotal = $sumall;
        $tableName->patient_id = $request->id;

        $tableName->save();

        return redirect()->route('pat')->with('successform', "บันทึกข้อมูลเรียบร้อย");


    }
}
