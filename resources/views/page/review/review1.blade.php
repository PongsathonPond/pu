@extends('layouts.shop')

@section('content')

    <div class="col-lg-12">

        <div class="card">
            <div class="card-header p-3 pt-2">

                <h5>รายการแบบประเมิน 1  ของ {{$pat->name}}</h5>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center mb-0" id="myTable">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary  text-1xl font-weight-bolder opacity-7">
                            ลำดับ</th>
                        <th>เวลาที่ประเมิน</th>
                        <th class="text-uppercase text-secondary  text-1xl font-weight-bolder opacity-7  ">
                            ผลการประเมิน</th>


                    </tr>
                    </thead>

                    <tbody>

                    @php
                        $i=1;
                    @endphp
                    @foreach ($asn as $item)

                        <tr>
                            <td>
                                <div class="d-flex px-2">
                                    <div class="my-auto">

                                        <b>
                                            {{ $i++}}
                                        </b>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-lg bg-gradient-success">{{ $item->created_at }}</span>

                            </td>


                            <td>
                                <button type="button" class="btn btn-block bg-gradient-warning mb-3" data-bs-toggle="modal" data-bs-target="#modal-default{{$item->id}}" style="margin-left: 5%"><i class="fas fa-eye fa-2xl "></i></button>
                                <div class="modal fade" id="modal-default{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered modal-" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title font-weight-normal" id="modal-title-default"><b>ผลการประเมินแบบประเมิน 1</b></h6>
                                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-lg-12">
                                                    <div class="card ">
                                                        <div class="card-header pb-0 p-3">
                                                            <div class="row">
                                                                <div class="col-6 d-flex align-items-center">
                                                                    <h3 class="mb-0">แบบประเมิน 1</h3>

                                                                </div>
                                                                <br><br><br>

                                                            </div>
                                                        </div>



                                                        <div class="card-body p-3 pb-0">

                                                                <div class="row">

                                                                    <div class="col-12">
                                                                        <div class="input-group input-group-static mb-4">
                                                                            <div class="col-12">
                                                                                <label><b>
                                                                                        <h5> 1. สภาพทั่วไป</h5>
                                                                                    </b> <br />
                                                                                    <b>ลักษณะโครงสร้างแวดล้อม</b><br />
                                                                                    <b>ลักษณะการตั้งหมู่บ้าน/ชุมชน</b>
                                                                                </label>
                                                                                <br>
                                                                            </div>





                                                                            <div class="row">
                                                                                <div class="col-4">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                        <label class="custom-control-label" for="customCheck1"><b>{{$item->f1}}</b></label>
                                                                                    </div>
                                                                                </div>



                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static mb-4">

                                                                            <div class="col-12">
                                                                                <label> <br />
                                                                                    <b>หน่วยงานในพื้นที่</b><br />

                                                                                </label>
                                                                            </div>




                                                                            <div class="row">
                                                                                <div class="col-4">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox"  id="fcustomCheck1" checked="">
                                                                                        <label class="custom-control-label" for="customCheck1"><b>{{$item->f1_2}}</b></label>
                                                                                    </div>
                                                                                </div>


                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static mb-4">
                                                                            <div class="col-12">
                                                                                <label> <br />
                                                                                    <b>สิ่งอำนวยความสะดวก</b><br />

                                                                                </label>
                                                                            </div>
                                                                            <div class="row" style="width: 100%">
                                                                                <div class="col-4">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                        <label class="custom-control-label" for="customCheck1"><b>{{$item->f1_3}}</b></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="input-group input-group-static mb-4">

                                                                            <div class="col-12">
                                                                                <label>

                                                                                    <b>
                                                                                        <h5>2. สภาพสังคม</h5>
                                                                                    </b> <br />

                                                                                </label>
                                                                                <br />
                                                                            </div>

                                                                            <div class="row" style="width: 100%">
                                                                                <div class="col-4">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                        <label class="custom-control-label" for="customCheck1"><b>{{$item->f2}}</b></label>
                                                                                    </div>
                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static m-0">

                                                                            <div class="col-12 m-0">
                                                                                <label><b>
                                                                                        <h5>3. วัฒนธรรม ประเพณี ความเชื่อ</h5>
                                                                                    </b> <br />
                                                                                    <b>การนับถือศาสนา</b><br />
                                                                                </label>
                                                                            </div>

                                                                            <div class="row" style="width: 100%">
                                                                                <div class="col-3">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                        <label class="custom-control-label" for="customCheck1"><b>{{$item->f3_1}}</b></label>
                                                                                    </div>
                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static m-0">

                                                                            <div class="col-12 m-0 ">
                                                                                <label><br />
                                                                                    <b>วัฒธรรมประเพณี</b><br />
                                                                                </label>
                                                                            </div>

                                                                            <div class="row" style="width: 100%">
                                                                                <div class="col-4">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                        <label class="custom-control-label" for="customCheck1"><b>{{$item->f3_2}}</b></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static m-0">

                                                                            <div class="col-12 m-0 ">
                                                                                <label><br />
                                                                                    <b>ความเชื่อ</b><br />
                                                                                </label>
                                                                            </div>

                                                                            <div class="row" style="width: 60%">
                                                                                <div class="col-6">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                        <label class="custom-control-label" for="customCheck1"><b>{{$item->f3_3}}</b></label>
                                                                                    </div>
                                                                                </div>




                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static m-0">

                                                                            <div class="col-12 m-0">
                                                                                <label><b>
                                                                                        <h5>4. ภาวะเศรษฐกิจการเมือง</h5>
                                                                                    </b> <br />
                                                                                    <b>อาชีพ</b><br />
                                                                                </label>
                                                                            </div>

                                                                            <div class="row" style="width: 100%">
                                                                                <div class="col-3">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                        <label class="custom-control-label" for="customCheck1"><b>{{$item->f4_1}}</b></label>
                                                                                    </div>
                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static m-0">

                                                                            <div class="col-12 m-0 ">
                                                                                <label><br />
                                                                                    <b>การเมือง</b><br />
                                                                                </label>
                                                                            </div>

                                                                            <div class="row" style="width: 100%">
                                                                                <div class="col-4">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                        <label class="custom-control-label" for="customCheck1"><b>{{$item->f3_2}}</b></label>
                                                                                    </div>
                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static m-0">

                                                                            <div class="col-12 m-0 ">
                                                                                <label><br />
                                                                                    <b>
                                                                                        <h5>5.ความสัมพันธ์</h5>
                                                                                    </b>
                                                                                </label>
                                                                            </div>

                                                                            <div class="row" style="width: 100%">
                                                                                <div class="col-4">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                        <label class="custom-control-label" for="customCheck1"><b>{{$item->f5}}</b></label>
                                                                                    </div>
                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static m-0">

                                                                            <div class="col-12 m-0">
                                                                                <label><b>
                                                                                        <h5>6. ศักยภาพชุมชน</h5>
                                                                                    </b>

                                                                                </label>
                                                                            </div>
                                                                            <div class="col-12 m-0">
                                                                                <label><b>แกนนำคือใครบ้าง</b>

                                                                                </label>
                                                                                <input type="text"
                                                                                       style="width: 70%;border-radius: 10px; border-width: 1px;border-style: none"
                                                                                       placeholder="{{$item->f6_1}}" name="f6_1" />

                                                                            </div>

                                                                            <div class="col-12 m-0">
                                                                                <label><b>ศักยภาพแกนนำ</b>
                                                                                </label>
                                                                            </div>
                                                                            <div class="row" style="width: 100%">

                                                                                <div class="col-3">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                        <label class="custom-control-label" for="customCheck1"><b>{{$item->f6_2}}</b></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>



                                                                            <div class="col-12 m-0">
                                                                                <label><b>ความรู้สึกของการเป็นเจ้าของชุมชน</b>
                                                                                </label>
                                                                            </div>
                                                                            <div class="row" style="width: 100%">

                                                                                <div class="col-3">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                        <label class="custom-control-label" for="customCheck1"><b>{{$item->f6_3}}</b></label>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                            <div class="col-12 m-0">
                                                                                <label><b>ทรัพยากรทางสังคม</b>
                                                                                </label>
                                                                            </div>
                                                                            <div class="row" style="width: 100%">

                                                                                <div class="col-4">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                        <label class="custom-control-label" for="customCheck1"><b>{{$item->f6_4}}</b></label>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                            <div class="col-12 m-0">
                                                                                <label><b>ศักยภาพทางสังคม</b>
                                                                                </label>
                                                                            </div>
                                                                            <div class="row" style="width: 100%">

                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                    <label class="custom-control-label" for="customCheck1"><b>{{$item->f6_5}}</b></label>
                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static m-0">

                                                                            <div class="col-12 m-0">
                                                                                <label><b>
                                                                                        <h5>7.
                                                                                            ความพร้อมรับผู้ป่วยจิตเวช/งานสุขภาพจิต
                                                                                        </h5>
                                                                                    </b>
                                                                                </label>
                                                                            </div>

                                                                            <div class="col-12 m-0">
                                                                                <label><b>ความรู้สึก
                                                                                        /ความคิดเห็นของเพื่อนบ้านต่อผู้ป่วย</b>
                                                                                </label><br>
                                                                                <input type="text"
                                                                                       style="width: 70%;border-radius: 10px; border-width: 1px;border-style: none"
                                                                                       placeholder="{{$item->f7_1}}" name="f7_1" />

                                                                            </div>
                                                                            <div class="col-12 m-0">
                                                                                <label><b>สภาพแวดล้อม/ลักษณะ/วัฒนธรรมของชุมชนต่อผู้ป่วย</b>
                                                                                </label><br>
                                                                                <input type="text"
                                                                                       style="width: 70%;border-radius: 10px; border-width: 1px;border-style: none"
                                                                                       placeholder="{{$item->f7_2}}" name="f7_2" />

                                                                            </div>
                                                                            <div class="col-12 m-0">
                                                                                <label><b>ความพร้อมของชุมชนต่อการกลับไปใช้ชีวิตของผู้ป่วย</b>
                                                                                </label><br>
                                                                                <input type="text"
                                                                                       style="width: 70%;border-radius: 10px; border-width: 1px;border-style: none"
                                                                                       placeholder="{{$item->f7_3}}" name="f7_3" />

                                                                            </div>
                                                                            <div class="col-12 m-0">
                                                                                <label><b>ปัญหา อุปสรรค</b>
                                                                                </label><br>
                                                                                <input type="text"
                                                                                       style="width: 70%;border-radius: 10px; border-width: 1px;border-style: none"
                                                                                       placeholder="{{$item->f7_4}}" name="f7_4" />


                                                                            </div>

                                                                        </div>






                                                                    </div>


                                                                </div>
                                                        </div>


                                                    </div>

                                                    <br><br>



                                                </div>

                                            </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">ปิด</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>



    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                responsive: true,
                paging: true,
                lengthMenu: [10, 25, 50, 75, 100, 10000],
                ordering: false,
                info: false,

                "language": {
                    "search": "<b>ค้นหา</b>",
                    "zeroRecords": "ไม่พบข้อมูล - ขออภัย",
                    "info": '',
                    "infoEmpty": "ไม่มีข้อมูล",
                    "infoFiltered": "",
                    "lengthMenu": "   _MENU_ ",
                    "paginate": {
                        "previous": false,
                        "next": false
                    }
                }
            });
        });
    </script>
@endsection
