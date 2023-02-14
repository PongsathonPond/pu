@extends('layouts.shop')

@section('content')


    <div class="col-lg-12">
        <div class="card ">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <h3 class="mb-0">แบบประเมิน 1</h3>
                    </div>
                </div>
            </div>
            <div class="card-body p-3 pb-0">
                <form action="{{ route('form1') }}" method="POST"
                      enctype="multipart/form-data">

                    @csrf
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
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f1"
                                                   id="customRadio1"
                                                   value="รวมกลุ่ม">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>รวมกลุ่ม</b></label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f1"
                                                   id="customRadio1"
                                                   value="พื้นที่ราบลุ่ม">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>พื้นที่ราบลุ่ม</b></label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f1"
                                                   id="customRadio1"
                                                   value="ชุมชนแออัด">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>ชุมชนแออัด</b></label>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f1"
                                                   id="customRadio1" value="กระจาย">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>กระจาย</b></label>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f1"
                                                   id="customRadio1"
                                                   value="พื้นที่เป็นภูเขา">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>พื้นที่เป็นภูเขา</b></label>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f1"
                                                   id="customRadio1"
                                                   value="มีการจัดระเบียบชุมชนดี">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>มีการจัดระเบียบชุมชนดี</b></label>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f1"
                                                   id="customRadio1_1">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b> &nbsp;อื่นๆ
                                                </b></label>

                                            <input type="text"
                                                   style="width: 70%;border-radius: 10px; border-width: 1px; border-style: none"
                                                   placeholder="โปรดระบุ"
                                                   id="text1_1" value=""
                                                   onchange="addValueToRadioBtn();" /><label
                                                for="amntother"></label><br />
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
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f1_2"
                                                   id="customRadio1"
                                                   value="องค์การบริหารส่วนตำบล">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>องค์การบริหารส่วนตำบล</b></label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f1_2"
                                                   id="customRadio1"
                                                   value="สถานีอนามัย">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>สถานีอนามัย</b></label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f1_2"
                                                   id="customRadio1"
                                                   value="โรงพยาบาลส่งเสริมสุขภาพตำบล">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>โรงพยาบาลส่งเสริมสุขภาพตำบล</b></label>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f1_2"
                                                   id="customRadio1" value="วัด">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>วัด</b></label>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f1_2"
                                                   id="customRadio1"
                                                   value="โรงเรียน">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>โรงเรียน</b></label>
                                        </div>
                                    </div>



                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f1_2"
                                                   id="customRadio1_2">
                                            <label class="custom-control-label"
                                                   for="customRadio1_2"><b>
                                                    &nbsp;อื่นๆ
                                                </b></label>

                                            <input type="text"
                                                   style="width: 70%;border-radius: 10px; border-width: 1px;border-style: none"
                                                   placeholder="โปรดระบุ"
                                                   id="text1_2" value=""
                                                   onchange="addValueToRadioBtn1_2();" /><label
                                                for="amntother2"></label><br />
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
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f1_3"
                                                   id="customRadio1" value="ไฟฟ้า">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>ไฟฟ้า</b></label>
                                        </div>
                                    </div>
                                    <div class="col-4 ">
                                        <div class="form-check mb-3 "
                                             style="margin-left: 10px">
                                            <input class="form-check-input"
                                                   type="radio" name="f1_3"
                                                   id="customRadio1" value="ประปา">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>ประปา</b></label>
                                        </div>
                                    </div>



                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f1_3"
                                                   id="customRadio1_3">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>
                                                    &nbsp;การคมนาคม ได้แก่
                                                </b></label>

                                            <input type="text"
                                                   style="width: 50%;border-radius: 10px; border-width: 1px;border-style: none;margin-left: 30px"
                                                   placeholder="โปรดระบุ"
                                                   id="text1_3" value=""
                                                   onchange="addValueToRadioBtn1_3();" /><label
                                                for="amntother3"></label><br />
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
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f2"
                                                   id="customRadio1" value="ชนบท">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>ชนบท</b></label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check mb-3"
                                             style="margin-left: 20px">
                                            <input class="form-check-input"
                                                   type="radio" name="f2"
                                                   id="customRadio1" value="เมือง">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>เมือง</b></label>
                                        </div>
                                    </div>


                                    <div class="col-4">
                                        <div class="form-check mb-3"
                                             style="margin-left: 20px">
                                            <input class="form-check-input"
                                                   type="radio" name="f2"
                                                   id="customRadio2">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>
                                                    &nbsp;&nbsp;อื่นๆ </b></label>

                                            <input type="text"
                                                   style="width: 70%;border-radius: 10px; border-width: 1px;border-style: none"
                                                   placeholder="โปรดระบุ"
                                                   id="text2" value=""
                                                   onchange="addValueToRadioBtn2();" /><label
                                                for="amntother2"></label><br />
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
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f3_1"
                                                   id="customRadio1" value="พุทธ">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>พุทธ</b></label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f3_1"
                                                   id="customRadio1" value="คริสต์">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>คริสต์</b></label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f3_1"
                                                   id="customRadio1" value="อิสลาม">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>อิสลาม</b></label>
                                        </div>
                                    </div>



                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f3_1"
                                                   id="customRadio3_1">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b> &nbsp;อื่นๆ
                                                </b></label>
                                            {{-- <input type="text" id="textInput">
                                           --}}
                                            <input type="text"
                                                   style="width: 70%;border-radius: 10px; border-width: 1px;border-style: none"
                                                   placeholder="โปรดระบุ"
                                                   id="text3_1" value=""
                                                   onchange="addValueToRadioBtn3_1();" /><label
                                                for="amntother3_1"></label><br />
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
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f3_2"
                                                   id="customRadio1"
                                                   value="เคร่งครัด">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>เคร่งครัด</b></label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f3_2"
                                                   id="customRadio1"
                                                   value="ไม่เคร่งครัด">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>ไม่เคร่งครัด</b></label>
                                        </div>
                                    </div>



                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f3_2"
                                                   id="customRadio3_2">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b> &nbsp;อื่นๆ
                                                </b></label>
                                            {{-- <input type="text" id="textInput">
                                           --}}
                                            <input type="text"
                                                   style="width: 70%;border-radius: 10px; border-width: 1px;border-style: none"
                                                   placeholder="โปรดระบุ"
                                                   id="text3_2" value=""
                                                   onchange="addValueToRadioBtn3_2();" /><label
                                                for="amntother3_1"></label><br />
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
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f3_3"
                                                   id="customRadio1"
                                                   value="นับถือผี">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>นับถือผี</b></label>
                                        </div>
                                    </div>




                                    <div class="col-6">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f3_3"
                                                   id="customRadio3_3">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b> &nbsp;อื่นๆ
                                                </b></label>
                                            <input type="text"
                                                   style="width: 70%;border-radius: 10px; border-width: 1px;border-style: none"
                                                   placeholder="โปรดระบุ"
                                                   id="text3_3" value=""
                                                   onchange="addValueToRadioBtn3_3();" /><label
                                                for="amntother3_1"></label><br />
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
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f4_1"
                                                   id="customRadio1"
                                                   value="เกษตรกรรม">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>เกษตรกรรม</b></label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f4_1"
                                                   id="customRadio1"
                                                   value="เขตอุตสาหกรรม">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>เขตอุตสาหกรรม</b></label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f4_1"
                                                   id="customRadio1"
                                                   value="รับจ้างทั่วไป">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>รับจ้างทั่วไป</b></label>
                                        </div>
                                    </div>



                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f4_1"
                                                   id="customRadio4_1">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b> &nbsp;อื่นๆ
                                                </b></label>
                                            <input type="text"
                                                   style="width: 70%;border-radius: 10px; border-width: 1px;border-style: none"
                                                   placeholder="โปรดระบุ"
                                                   id="text4_1" value=""
                                                   onchange="addValueToRadioBtn4_1();" /><label
                                                for="amntother3_1"></label><br />
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
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f4_2"
                                                   id="customRadio1" value="สนใจมาก">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>สนใจมาก</b></label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f4_2"
                                                   id="customRadio1"
                                                   value="สนใจปานกลาง">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>สนใจปานกลาง</b></label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f4_2"
                                                   id="customRadio1" value="ไม่สนใจ">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>ไม่สนใจ</b></label>
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
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f5"
                                                   id="customRadio1" value="สนใจมาก">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>สนใจมาก</b></label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f5"
                                                   id="customRadio1"
                                                   value="สนใจปานกลาง">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>สนใจปานกลาง</b></label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f5"
                                                   id="customRadio1" value="ไม่สนใจ">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>ไม่สนใจ</b></label>
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
                                           placeholder="โปรดระบุ" name="f6_1" />

                                </div>

                                <div class="col-12 m-0">
                                    <label><b>ศักยภาพแกนนำ</b>
                                    </label>
                                </div>
                                <div class="row" style="width: 100%">

                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f6_2"
                                                   id="customRadio1"
                                                   value="เข้มแข็งมาก">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>เข้มแข็งมาก</b></label>
                                        </div>
                                    </div>


                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f6_2"
                                                   id="customRadio1"
                                                   value="เข้มแข็งปานกลาง">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>เข้มแข็งปานกลาง</b></label>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f6_2"
                                                   id="customRadio1"
                                                   value="เข้มแข็งน้อย">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>เข้มแข็งน้อย</b></label>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f6_2"
                                                   id="customRadio1"
                                                   value="ไม่เข้มแข็ง">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>ไม่เข้มแข็ง</b></label>
                                        </div>
                                    </div>



                                </div>



                                <div class="col-12 m-0">
                                    <label><b>ความรู้สึกของการเป็นเจ้าของชุมชน</b>
                                    </label>
                                </div>
                                <div class="row" style="width: 100%">

                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f6_3"
                                                   id="customRadio1" value="มาก">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>มาก</b></label>
                                        </div>
                                    </div>


                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f6_3"
                                                   id="customRadio1" value="ปานกลาง">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>ปานกลาง</b></label>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f6_3"
                                                   id="customRadio1" value="น้อย">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>น้อย</b></label>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f6_3"
                                                   id="customRadio1"
                                                   value="ไม่มีเลย">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>ไม่มีเลย</b></label>
                                        </div>
                                    </div>



                                </div>

                                <div class="col-12 m-0">
                                    <label><b>ทรัพยากรทางสังคม</b>
                                    </label>
                                </div>
                                <div class="row" style="width: 100%">

                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f6_4"
                                                   id="customRadio1"
                                                   value="เครือข่าย">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>เครือข่าย</b></label>
                                        </div>
                                    </div>


                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f6_4"
                                                   id="customRadio1" value="ชุมชน">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>ชุมชน</b></label>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f6_4"
                                                   id="customRadio1"
                                                   value="การรวมกลุ่ม">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>การรวมกลุ่ม</b></label>
                                        </div>
                                    </div>





                                </div>

                                <div class="col-12 m-0">
                                    <label><b>ศักยภาพทางสังคม</b>
                                    </label>
                                </div>
                                <div class="row" style="width: 100%">

                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f6_5"
                                                   id="customRadio1"
                                                   value="เข้มแข็งมาก">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>เข้มแข็งมาก</b></label>
                                        </div>
                                    </div>


                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f6_5"
                                                   id="customRadio1"
                                                   value="เข้มแข็งปานกลาง">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>เข้มแข็งปานกลาง</b></label>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f6_5"
                                                   id="customRadio1"
                                                   value="เข้มแข็งน้อย">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>เข้มแข็งน้อย</b></label>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input"
                                                   type="radio" name="f6_5"
                                                   id="customRadio1"
                                                   value="ไม่เข็มแข็ง">
                                            <label class="custom-control-label"
                                                   for="customRadio1"><b>ไม่เข็มแข็ง</b></label>
                                        </div>
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
                                           placeholder="โปรดระบุ" name="f7_1" />

                                </div>
                                <div class="col-12 m-0">
                                    <label><b>สภาพแวดล้อม/ลักษณะ/วัฒนธรรมของชุมชนต่อผู้ป่วย</b>
                                    </label><br>
                                    <input type="text"
                                           style="width: 70%;border-radius: 10px; border-width: 1px;border-style: none"
                                           placeholder="โปรดระบุ" name="f7_2" />

                                </div>
                                <div class="col-12 m-0">
                                    <label><b>ความพร้อมของชุมชนต่อการกลับไปใช้ชีวิตของผู้ป่วย</b>
                                    </label><br>
                                    <input type="text"
                                           style="width: 70%;border-radius: 10px; border-width: 1px;border-style: none"
                                           placeholder="โปรดระบุ" name="f7_3" />

                                </div>
                                <div class="col-12 m-0">
                                    <label><b>ปัญหา อุปสรรค</b>
                                    </label><br>
                                    <input type="text"
                                           style="width: 70%;border-radius: 10px; border-width: 1px;border-style: none"
                                           placeholder="โปรดระบุ" name="f7_4" />
                                    <input type="hidden" name="id"
                                           value={{ $pat->id }} />

                                </div>

                            </div>






                        </div>


                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit"
                        class="btn bg-gradient-success">บันทึก</button>
                <button type="button" class="btn btn-link  ml-auto"
                        data-bs-dismiss="modal">ปิด</button>
            </div>
            </form>

        </div>

        <br><br>
        <script>
            function addValueToRadioBtn() {

                console.log(document.getElementById("customRadio1_1").checked)
                if (document.getElementById("customRadio1_1").checked == true) {
                    console.log("test1")
                    document.getElementById("customRadio1_1").value = document.getElementById("text1_1").value;
                }
            }
        </script>
        <script>
            function addValueToRadioBtn1_2() {

                if (document.getElementById("customRadio1_2").checked == true) {
                    console.log("test2")
                    document.getElementById("customRadio1_2").value = document.getElementById("text1_2").value;
                }
            }
        </script>
        <script>
            function addValueToRadioBtn1_3() {

                if (document.getElementById("customRadio1_3").checked == true) {
                    console.log("test3")
                    document.getElementById("customRadio1_3").value = document.getElementById("text1_3").value;
                }
            }
        </script>
        <script>
            function addValueToRadioBtn2() {

                if (document.getElementById("customRadio2").checked == true) {
                    console.log("test4")
                    document.getElementById("customRadio2").value = document.getElementById("text2").value;
                }
            }
        </script>
        <script>
            function addValueToRadioBtn3_1() {

                if (document.getElementById("customRadio3_1").checked == true) {
                    console.log("test5")
                    document.getElementById("customRadio3_1").value = document.getElementById("text3_1").value;
                }
            }
        </script>
        <script>
            function addValueToRadioBtn3_2() {

                if (document.getElementById("customRadio3_2").checked == true) {
                    console.log("test6")
                    document.getElementById("customRadio3_2").value = document.getElementById("text3_2").value;
                }
            }
        </script>
        <script>
            function addValueToRadioBtn3_3() {

                if (document.getElementById("customRadio3_3").checked == true) {
                    console.log("test7")
                    document.getElementById("customRadio3_3").value = document.getElementById("text3_3").value;
                }
            }
        </script>
        <script>
            function addValueToRadioBtn4_1() {

                if (document.getElementById("customRadio4_1").checked == true) {
                    console.log("test8")
                    document.getElementById("customRadio4_1").value = document.getElementById("text4_1").value;
                }
            }
        </script>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <strong>สำเร็จ !</strong> เพิ่มข้อมูลผู้ป่วยเรียบร้อย
            </div>
        @endif

        @if (session('successform'))
            <div class="alert alert-success" role="alert">
                <strong>สำเร็จ !</strong> เพิ่มข้อมูลในฟอร์ม 1 เรียบร้อย
            </div>
        @endif

    </div>




@endsection
