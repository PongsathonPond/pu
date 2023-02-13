<?php

namespace App\Http\Controllers;

use App\Models\asnForm1;
use Illuminate\Http\Request;

class asnform extends Controller
{
    public function storeform(Request $request)
    {
        dd($request);
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
}
