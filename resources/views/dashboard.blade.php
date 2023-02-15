@extends('layouts.shop')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">weekend</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize"><b>ผู้ป่วยทั้งหมดในระบบ</b></p>
                        <h4 class="mb-0">{{$countpat}} คน</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize"><b>แบบประเมิน 1 ทั้งหมด</b></p>
                        <h4 class="mb-0">{{$countasn1}} ครั้ง</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize"><b>แบบประเมิน 2 ทั้งหมด</b></p>
                        <h4 class="mb-0">{{$countasn2}} ครั้ง</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">weekend</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize"><b>ผู้ดูแลทั้งหมดในระบบ</b></p>
                        <h4 class="mb-0">{{$countuser}} คน</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">

                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>ผู้ป่วยที่ไม่ผ่านเกณฑ์ประเมิน </h6>

                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">

                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-lg font-weight-bolder opacity-7" style="text-align: center">ชื่อผู้ป่วย</th>
                                <th class="text-uppercase text-secondary text-lg font-weight-bolder opacity-7 ps-2" style="text-align: center">ผลการประเมิน</th>
                                <th class="text-center text-uppercase text-secondary text-lg font-weight-bolder opacity-7">คะแนนรวม</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ans as $item)
                                <tr>
                                    <td style="text-align: center">
                                        @foreach($item->asn2topat as $item1)
                                            {{$item1->name}}
                                        @endforeach

                                    </td>
                                    <td style="text-align: center">
                                        <b >{{$item->sumtotal}}</b>

                                    </td>
                                    <td style="text-align: center">
                                        <span class="badge badge-pill badge-lg bg-gradient-danger">ครอบครัวไม่มีความพร้อมในการดูแลผู้ป่วย</span>
                                    </td>


                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
