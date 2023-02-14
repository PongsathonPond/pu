@extends('layouts.shop')

@section('content')
    <div class="col-lg-2">
        <div class="card ">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <h6 class="mb-0">ข้อมูลผู้ป่วย</h6>
                    </div>

                </div>
            </div>
            <div class="card-body p-3 pb-0">

                <form action="{{ route('pat.store') }}" method="POST" enctype="multipart/form-data">
                    <form id="post-form">
                        @csrf
                        <div class="row">


                            <div class="input-group input-group-outline my-3">
                                <input type="text" class="form-control" placeholder="ชื่อนาม-สกุล ผู้ให้ข้อมูล"
                                    name="name">
                            </div>

                            <div class="input-group input-group-outline mb-1">

                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-outline my-3">
                                    <input type="text" class="form-control" placeholder="อายุ" name="age">
                                </div>


                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-outline my-3">
                                    <input type="text" class="form-control" placeholder="เกี่ยวข้องเป็น" name="relevant">
                                </div>


                            </div>
                            <div class="input-group input-group-outline my-3">
                                <input type="text" class="form-control" placeholder="ชื่อนาม-สกุล ผู้ป่วย"
                                    name="name_pat">
                            </div>

                            <div class="input-group input-group-outline mb-1">

                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-outline my-3">
                                    <input type="text" class="form-control" placeholder="อายุผู้ป่วย" name="age_pat">
                                </div>


                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-outline my-3">
                                    <input type="text" class="form-control" placeholder="hn" name="hn">
                                </div>


                            </div>

                            <button type="input" class="btn btn-success">เพิ่มข้อมูล</button>


                        </div>

                    </form>
            </div>
        </div>

        <br><br>

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

    <div class="col-lg-10">

        <div class="card">
            <div class="card-header p-3 pt-2">

                <h5>รายการข้อมูลผู้ป่วย</h5>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center mb-0" id="myTable">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary  text-1xl font-weight-bolder opacity-7">ชื่อ นาม-สกุล
                                ผู้ป่วย</th>
                            <th class="text-uppercase text-secondary  text-1xl font-weight-bolder opacity-7 ps-2">อายุ
                            </th>
                            <th class="text-uppercase text-secondary  text-1xl font-weight-bolder opacity-7 ps-2">hn
                            </th>
                            <th class="text-uppercase text-secondary  text-1xl font-weight-bolder opacity-7 ps-2">
                                ชื่อผู้ให้ข้อมูล</th>
                            <th>เวลาที่เพิ่ม</th>
                            <th class="text-uppercase text-secondary  text-1xl font-weight-bolder opacity-7  ">
                                แบบประเมิน</th>
                            <th class="text-uppercase text-secondary  text-1xl font-weight-bolder opacity-7 ps-2">
                                แก้ไขข้อมูล</th>

                        </tr>
                    </thead>

                    <tbody>


                        @foreach ($p as $item)
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div class="my-auto">
                                            <b>
                                                {{ $item->name_pat }}
                                            </b>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <b>{{ $item->age_pat }}</b>

                                </td>
                                <td>
                                    <span class="badge badge-pill badge-lg bg-gradient-success">{{ $item->hn }}</span>

                                </td>
                                <td>
                                    <b>
                                        {{ $item->name }}
                                    </b>

                                </td>
                                <td>
                                    <b>
                                        {{ $item->created_at }}
                                    </b>

                                </td>
                                <td class="align-middle">
                                    <a href="{{ url('/patindex/' . $item->id) }}"  class="btn btn-danger btn-sm bg-gradient-danger mb-3 "> ฟอร์ม1</a>
                                    <a href="{{ url('/patindex2/' . $item->id) }}"  class="btn btn-danger btn-sm bg-gradient-danger mb-3 "> ฟอร์ม2</a>


                                <td class="align-middle">
                                    <button type="button" class="btn btn-secondary btn-sm bg-gradient-secondary mb-3  "
                                        data-bs-toggle="modal" data-bs-target="#modal-default"> <i
                                            class="far fa-edit"></i></button>

                                    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog"
                                        aria-labelledby="modal-default" aria-hidden="true">
                                        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title font-weight-normal" id="modal-title-default">
                                                        <b>จัดการสินค้า</b>
                                                    </h6>
                                                    <button type="button" class="btn-close text-dark"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="p-4">
                                                        <form>

                                                            <div class="row">

                                                                <div class="col-12">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label><b>ชื่อสินค้า</b></label>
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label><b>ราคาปลีก</b></label>
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label><b>ราคาส่ง</b></label>
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label><b>จำนวน</b></label>
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn bg-gradient-success">บันทึก</button>
                                                    <button type="button" class="btn btn-link  ml-auto"
                                                        data-bs-dismiss="modal">ปิด</button>
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
