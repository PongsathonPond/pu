@extends('layouts.shop')

@section('content')

    <div class="col-lg-12">

        <div class="card">
            <div class="card-header p-3 pt-2">

                <h5>รายการแบบประเมิน 2  ของผู้ป่วย {{$pat->name}}</h5>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center mb-0" id="myTable">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary  text-1xl font-weight-bolder opacity-7">
                            ลำดับ</th>
                        <th>คะแนนรวม</th>
                        <th>ผลการประเมิน</th>
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

                               <b class="align-items-center" style="margin-left: 20%">{{$item->sumtotal}}</b>
                            </td>
                            <td>
                                    @if($item->sumtotal > 21)
                                    <span class="badge badge-pill badge-lg bg-gradient-success">ครอบครัวมีความพร้อมในการดูแลผู้ป่วย</span>

                                    @elseif($item->sumtotal <= 20)
                                        <span class="badge badge-pill badge-lg bg-gradient-danger">ครอบครัวไม่มีความพร้อมในการดูแลผู้ป่วย</span>

                                    @endif

                            </td>
                            <td>
                                <b>{{ $item->created_at }}</b>

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
                                                                    <h3 class="mb-0">แบบประเมิน 2</h3>
                                                                </div>
                                                                <br><br><br>
                                                                <h6 class="mb-0"> ชื่อผู่ป่วย : {{$pat->name}} &nbsp;  อายุ : {{$pat->age}}</h6>
                                                            </div>
                                                        </div>
                                                        <div class="card-body p-3 pb-0">

                                                                <div class="row">

                                                                    <div class="col-12">

                                                                        <div class="input-group input-group-static mb-4">

                                                                            <div class="col-12">
                                                                                <label><b>
                                                                                        <h5> 1. ระดับรายได้ของครอบครัว</h5>
                                                                                    </b> <br />

                                                                                </label>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-check mb-3">
                                                                                    <input class="form-check-input" type="radio" name="f1" id="customRadio1" value="0">
                                                                                    <label class="custom-control-label" for="customRadio1">
                                                                                        <b>0. ไม่มีรายได้ทั้งจากตนเองหรือได้รับจากผู้อื่น</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f1" id="customRadio1" value="1">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>1. ไม่มีรายได้ของตรเอง (มีหนี้สิน ไม่มีเงินออม)</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f1" id="customRadio1" value="2">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>2. มีรายได้น้อยกว่ารายจ่าย(มีหนี้สิน ไม่มีเงินออม)</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f1" id="customRadio1" value="3">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>3. มีรายได้เท่ากับรายจ่าย(ไม่มีเงินออมและไม่มีปัญหาหนี้สิน) </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f1" id="customRadio1" value="4">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>4. มีรายได้สูงกว่ารายจ่าย แต่ไม่มีเงินออม(ไม่มีปัญหาหนี้สิน) </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f1" id="customRadio1" value="5">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>5. มีรายได้สูงกว่ารายจ่าย(มีเงินออมไม่มีปัญหาหนี้สิน) </b></label>
                                                                                  <br><br> <b>รวมคะแนน :</b>
                                                                                        <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                        <label class="custom-control-label" for="customCheck1"><b>{{$item->f1}}</b></label>

                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static mb-4">

                                                                            <div class="col-12">
                                                                                <label><b>
                                                                                        <h5> 2. สภาพแวดล้อมภายในบ้าน (ตอบได้มากกว่า 1 ข้อ)</h5>
                                                                                    </b> <br />

                                                                                </label>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-check mb-3">
                                                                                    <input class="form-check-input" type="radio" name="f2_0" id="customRadio1" value="0">
                                                                                    <label class="custom-control-label" for="customRadio1">
                                                                                        <b>0. ไม่มีที่อยู่แน่นอน เร่ร่อนไร้บ้าน</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f2_1" id="customRadio1" value="1">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>1. มีที่อยู่แน่นอน แต่ไม่มีสภาพแวดล้อมที่เหมาะสมใดๆ</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f2_2" id="customRadio1" value="2">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>2. ที่อยู่มีความเป็นสัดส่วน</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f2_3" id="customRadio1" value="3">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>3. ที่อยู่ถูสุขลักษณะ สะอาด อากาศถ่ายเท </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f2_4" id="customRadio1" value="4">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>4. ที่อยู่มีความปลอดภัยทางกายภาพ </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f2_5" id="customRadio1" value="5">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>5. ที่อยู่พื้นที่ว่างในการทำกิจกรรม </b></label>
                                                                                    <br><br> <b>รวมคะแนน :</b>
                                                                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                    <label class="custom-control-label" for="customCheck1"><b>{{$item->f2}}</b></label>

                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static mb-4">

                                                                            <div class="col-12">
                                                                                <label><b>
                                                                                        <h5> 3. ความรักใคร่ผูกพันในครอบครัว (ตอบได้มากกว่า 1 ข้อ)</h5>
                                                                                    </b> <br />

                                                                                </label>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-check mb-3">
                                                                                    <input class="form-check-input" type="radio" name="f3_0" id="customRadio1" value="0">
                                                                                    <label class="custom-control-label" for="customRadio1">
                                                                                        <b>0. ไม่มีครอบครัว / ไม่ได้รับความรัก</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f3_1" id="customRadio1" value="1">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>1. ดูแลเอาใจใส่ เอื้ออาทร</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f3_2" id="customRadio1" value="2">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>2. ส่งเสริม สนับสนุนทางจิตใจ กล่าวชื่นชม</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f3_3" id="customRadio1" value="3">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>3. มีการสัมผัสทางกาย </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f3_4" id="customRadio1" value="4">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>4. ทำกิจกรรมร่วมกันสม่ำเสมอ </b></label>

                                                                                    <br><br> <b>รวมคะแนน :</b>
                                                                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                    <label class="custom-control-label" for="customCheck1"><b>{{$item->f3}}</b></label>

                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static mb-4">

                                                                            <div class="col-12">
                                                                                <label><b>
                                                                                        <h5> 4. ความสามารถในการแก้ปัญหาของสมาชิกในครอบครัว (ตอบได้มากกว่า 1 ข้อ)</h5>
                                                                                    </b> <br />

                                                                                </label>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-check mb-3">
                                                                                    <input class="form-check-input" type="radio" name="f4_0" id="customRadio1" value="0">
                                                                                    <label class="custom-control-label" for="customRadio1">
                                                                                        <b>0. ไม่มีครอบครัว / ไม่มีความสามารถ</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f4_1" id="customRadio1" value="1">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>1. เผชิญปัญหาร่วมกัน</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f4_2" id="customRadio1" value="2">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>2. รับรู้ปัญหาและหารือร่วมกัน</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f4_3" id="customRadio1" value="3">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>3. รับผิดชอบปัญหาร่วมกัน </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f4_4" id="customRadio1" value="4">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>4. ช่วยกันแก้ไขปัญหา </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f4_5" id="customRadio1" value="5">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>5. ยอมรับความเจ็บป่วย </b></label>
                                                                                    <br><br> <b>รวมคะแนน :</b>
                                                                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                    <label class="custom-control-label" for="customCheck1"><b>{{$item->f4}}</b></label>

                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static mb-4">

                                                                            <div class="col-12">
                                                                                <label><b>
                                                                                        <h5> 5. ความสามารถของสมาชิกในครอบครัวต่อการจัดการต่อพฤติกรรมที่ไม่เหมาะสมของผู้ป่วย (ตอบได้มากกว่า 1 ข้อ)</h5>
                                                                                    </b> <br />

                                                                                </label>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-check mb-3">
                                                                                    <input class="form-check-input" type="radio" name="f5_0" id="customRadio1" value="0">
                                                                                    <label class="custom-control-label" for="customRadio1">
                                                                                        <b>0. ไม่มีครอบครัว / ไม่มีความสามารถจัดการพฤติกรรม</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f5_1" id="customRadio1" value="1">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>1. ทักษะการควบคุมพฤติกรรม</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f5_2" id="customRadio1" value="2">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>2. การให้แรงเสริมที่เหมาะสม</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f5_3" id="customRadio1" value="3">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>3. ฝึกระเบียบวินัย </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f5_4" id="customRadio1" value="4">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>4. สมาชิกในครอบครัวรู้วิธีการดูแลผู้ป่วยเมื่อมีปัญหาพฤติกรรม </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f5_5" id="customRadio1" value="5">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>5. ยอมรับกฏ กติกาของครอบครัว </b></label>
                                                                                    <br><br> <b>รวมคะแนน :</b>
                                                                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                    <label class="custom-control-label" for="customCheck1"><b>{{$item->f5}}</b></label>

                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static mb-4">

                                                                            <div class="col-12">
                                                                                <label><b>
                                                                                        <h5> 6. การยอมรับและให้อภัยของสมาชิกในครอบครัว เมื่อผู้ป่วยทำผิดหรือมีพฤติกรรมไม่เหมาะสม (ตอบได้มากกว่า 1 ข้อ)</h5>
                                                                                    </b> <br />

                                                                                </label>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-check mb-3">
                                                                                    <input class="form-check-input" type="radio" name="f6_0" id="customRadio1" value="0">
                                                                                    <label class="custom-control-label" for="customRadio1">
                                                                                        <b>0. ไม่มีครอบครัว / ไม่มีการยอมรับหรือให้กำลังใจ</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f6_1" id="customRadio1" value="1">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>1. การยอมรับความแตกต่างส่วนบุคคล</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f6_2" id="customRadio1" value="2">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>2. การให้อภัยและให้โอกาสแก้ไข</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f6_3" id="customRadio1" value="3">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>3. ยอมรับโดยไม่มีเงื่อนไข </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f6_4" id="customRadio1" value="4">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>4. ให้กำลังใจ </b></label>

                                                                                    <br><br> <b>รวมคะแนน :</b>
                                                                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                    <label class="custom-control-label" for="customCheck1"><b>{{$item->f6}}</b></label>

                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static mb-4">

                                                                            <div class="col-12">
                                                                                <label><b>
                                                                                        <h5> 7. การสื่อสารระหว่างกันของสมาชิกในครอบครัว (ตอบได้มากกว่า 1 ข้อ)</h5>
                                                                                    </b> <br />

                                                                                </label>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-check mb-3">
                                                                                    <input class="form-check-input" type="radio" name="f7_0" id="customRadio1" value="0">
                                                                                    <label class="custom-control-label" for="customRadio1">
                                                                                        <b>0. ไม่มีครอบครัว / ไม่มีการสื่อสารใดๆ</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f7_1" id="customRadio1" value="1">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>1. มีการรับรู้ความรู้สึก</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f7_2" id="customRadio1" value="2">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>2. พูดคุย/แสดงความต้องการได้อย่างเปิดเผย</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f7_3" id="customRadio1" value="3">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>3. มีอิสระในการแสดงความคิดเห็น </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f7_4" id="customRadio1" value="4">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>4. มีสัมผัสโอบกอดระหว่างสมาชิก </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f7_5" id="customRadio1" value="5">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>5. มีการสื่อสารเพื่อลดการขัดแย้ง </b></label>
                                                                                    <br><br> <b>รวมคะแนน :</b>
                                                                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                    <label class="custom-control-label" for="customCheck1"><b>{{$item->f7}}</b></label>

                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static mb-4">

                                                                            <div class="col-12">
                                                                                <label><b>
                                                                                        <h5> 8. การตระหนักและสามารถทำหน้าที่ตามบทบาทของตนอย่างเหมาะสมของสมาชิกในครอบครัว (ตอบได้มากกว่า 1 ข้อ)</h5>
                                                                                    </b> <br />

                                                                                </label>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-check mb-3">
                                                                                    <input class="form-check-input" type="radio" name="f8_0" id="customRadio1" value="0">
                                                                                    <label class="custom-control-label" for="customRadio1">
                                                                                        <b>0. ไม่มีครอบครัว / ไม่มีการทำหน้าที่ตามบทบาท</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f8_1" id="customRadio1" value="1">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>1. ตระหนักรู้ มีความชัดเจนในบทบาทของตน</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f8_2" id="customRadio1" value="2">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>2. การแบ่งเบาภาระ/แบ่งงานในครอบครัว</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f8_3" id="customRadio1" value="3">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>3. การมีส่วนร่วมในกิจกรรมของครอบครัว </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f8_4" id="customRadio1" value="4">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>4. การมอบหมายหน้าที่ในครอบครัว </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f8_5" id="customRadio1" value="5">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>5. รับผิดชอบตามบทบาท </b></label>
                                                                                    <br><br> <b>รวมคะแนน :</b>
                                                                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                    <label class="custom-control-label" for="customCheck1"><b>{{$item->f8}}</b></label>

                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static mb-4">

                                                                            <div class="col-12">
                                                                                <label><b>
                                                                                        <h5> 9. ความรู้ ความเข้าใจของสมาชิกในครอบครัวต่อการดูแลผู้ป่วย (ตอบได้มากกว่า 1 ข้อ)</h5>
                                                                                    </b> <br />

                                                                                </label>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-check mb-3">
                                                                                    <input class="form-check-input" type="radio" name="f9_0" id="customRadio1" value="0">
                                                                                    <label class="custom-control-label" for="customRadio1">
                                                                                        <b>0. ไม่มีครอบครัว /ไม่มีการทำหน้าที่ตามบทบาท</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f9_1" id="customRadio1" value="1">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>1. มีความรู้ ความเข้าใจเรื่องโรคที่ผู้ป่วยเป็น</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f9_2" id="customRadio1" value="2">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>2. มีความรู้ ความเข้าใจในการฝึกทักษะการดูแลผู้ป่วย</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f9_3" id="customRadio1" value="3">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>3. มีความสามารถในการดูแลผู้ป่วย </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f9_4" id="customRadio1" value="4">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>4. มีความสามารถในการสังเกตอาการเปลี่ยนแปลง อาการกำเริบของผู้ป่วย </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f9_5" id="customRadio1" value="5">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>5. มีความเข้าใจในสภาพจิตใจของผู้ป่วย </b></label>
                                                                                    <br><br> <b>รวมคะแนน :</b>
                                                                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                    <label class="custom-control-label" for="customCheck1"><b>{{$item->f9}}</b></label>

                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="input-group input-group-static mb-4">

                                                                            <div class="col-12">
                                                                                <label><b>
                                                                                        <h5> 10.การมีเครือข่ายทางสังคาของสามาชิกในครอบครัว เพื่อขอการรับช่วยเหลือหลักจากการจำหน่ายแล้ว (ตอบได้มากกว่า 1 ข้อ)</h5>
                                                                                    </b> <br />

                                                                                </label>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-check mb-3">
                                                                                    <input type="hidden" name="id"  value="{{$pat->id}}">

                                                                                    <input class="form-check-input" type="radio" name="f10_0" id="customRadio1" value="0">


                                                                                    <label class="custom-control-label" for="customRadio1">
                                                                                        <b>0. ไม่มีครอบครัว /ไม่มีเครือข่าย</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f10_1" id="customRadio1" value="1">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>1. ญาติ (ที่ไม่ได้อยู่ในครอบครัว)</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f10_2" id="customRadio1" value="2">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>2. เพื่อนบ้าน</b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f10_3" id="customRadio1" value="3">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>3. ผู้นำชุมชน/อาสาสมัครในชุมชน </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f10_4" id="customRadio1" value="4">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>4. หน่วยงานภาครัฐ/เอกชน </b></label>
                                                                                    <br>
                                                                                    <input class="form-check-input" type="radio" name="f10_5" id="customRadio1" value="5">
                                                                                    <label class="custom-control-label" for="customRadio1"><b>5. รู้จักหาข้อมูลเพิ่มเติมจากที่อื่น </b></label>
                                                                                    <br><br> <b>รวมคะแนน :</b>
                                                                                    <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                                                    <label class="custom-control-label" for="customCheck1"><b>{{$item->f10}}</b></label>

                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                    </div>


                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                           <h4>รวมคะแนนทั้งหมด : {{$item->sumtotal}}</h4>
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
