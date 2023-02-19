@extends('layouts.shop')

@section('content')
  
    <div class="col-lg-3">
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
                            <div class="col-4">
                                <div class="input-group input-group-static mb-4">
                                    <label><b>คำนำหน้า</b></label>
                                    <input type="text" class="form-control" name="title" style="font-weight: bold">
                                </div>
                                @error('title')
                                    <div class="my-2">
                                        <span class="text-danger my-2"> {{ $message }} </span>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-4">
                                <div class="input-group input-group-static mb-4">
                                    <label><b>ชื่อผู้ให้ข้อมูล</b></label>
                                    <input type="text" class="form-control" name="firstname" style="font-weight: bold">
                                </div>
                                @error('firstname')
                                    <div class="my-2">
                                        <span class="text-danger my-2"> {{ $message }} </span>
                                    </div>
                                @enderror
                            </div>


                            <div class="col-4">
                                <div class="input-group input-group-static mb-4">
                                    <label><b>นามสกุล </b></label>
                                    <input type="text" class="form-control" name="lastname" style="font-weight: bold">
                                </div>
                                @error('lastname')
                                    <div class="my-2">
                                        <span class="text-danger my-2"> {{ $message }} </span>
                                    </div>
                                @enderror
                            </div>


                            <div class="col-6">
                                <div class="input-group input-group-static mb-4">
                                    <label><b>อายุ </b></label>
                                    <input type="text" class="form-control" name="age" style="font-weight: bold">
                                </div>
                                @error('age')
                                    <div class="my-2">
                                        <span class="text-danger my-2"> {{ $message }} </span>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-6">
                                <div class="input-group input-group-static mb-4">
                                    <label><b>เกี่ยวข้องเป็น </b></label>
                                    <input type="text" class="form-control" name="relevant" style="font-weight: bold">
                                </div>
                                @error('relevant')
                                    <div class="my-2">
                                        <span class="text-danger my-2"> {{ $message }} </span>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-4">
                                <div class="input-group input-group-static mb-4">
                                    <label><b>คำนำหน้าผู้ป่วย</b></label>
                                    <input type="text" class="form-control" name="title_pat" style="font-weight: bold">
                                </div>
                                @error('title_pat')
                                    <div class="my-2">
                                        <span class="text-danger my-2"> {{ $message }} </span>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-4">
                                <div class="input-group input-group-static mb-4">
                                    <label><b>ชื่อผู้ป่วย</b></label>
                                    <input type="text" class="form-control" name="firstname_pat"
                                        style="font-weight: bold">
                                </div>
                                @error('firstname_pat')
                                    <div class="my-2">
                                        <span class="text-danger my-2"> {{ $message }} </span>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-4">
                                <div class="input-group input-group-static mb-4">
                                    <label><b>นามสกุล</b></label>
                                    <input type="text" class="form-control" name="lastname_pat"
                                        style="font-weight: bold">
                                </div>
                                @error('lastname_pat')
                                    <div class="my-2">
                                        <span class="text-danger my-2"> {{ $message }} </span>
                                    </div>
                                @enderror
                            </div>


                            <div class="col-6">
                                <div class="input-group input-group-static mb-4">
                                    <label><b>อายุผู้ป่วย</b></label>
                                    <input type="text" class="form-control" name="age_pat" style="font-weight: bold">
                                </div>
                                @error('age_pat')
                                    <div class="my-2">
                                        <span class="text-danger my-2"> {{ $message }} </span>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-6">
                                <div class="input-group input-group-static mb-4">
                                    <label><b>hn</b></label>
                                    <input type="text" class="form-control" name="hn" style="font-weight: bold">
                                </div>
                                @error('hn')
                                    <div class="my-2">
                                        <span class="text-danger my-2"> {{ $message }} </span>
                                    </div>
                                @enderror
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
        @if (session('update'))
            <div class="alert alert-success" role="alert">
                <strong>สำเร็จ !</strong> อัพเดทข้อมูลเรียบร้อย
            </div>
        @endif

        @if (session('delete'))
            <div class="alert alert-danger" role="alert">
                <strong>สำเร็จ !</strong> ลบข้อมูลเรียบร้อย
            </div>
        @endif



    </div>

    <div class="col-lg-9">

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
                                แก้ไขข้อมูล/ลบ</th>

                        </tr>
                    </thead>

                    <tbody>


                        @foreach ($p as $item)
                            <tr>
                                <td style="text-align: center">
                                    <div class="d-flex px-2">
                                        <div class="my-auto">
                                            <b>
                                                {{ $item->title }}
                                                {{ $item->firstname_pat }}
                                                {{ $item->lastname_pat }}
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
                                        <b> {{ $item->title }}
                                            {{ $item->firstname }}
                                            {{ $item->lastname }}
                                        </b>
                                    </b>

                                </td>
                                <td>
                                    <b>
                                        {{ $item->created_at }}
                                    </b>

                                </td>
                                <td class="align-middle">
                                    <a href="{{ url('/patindex/' . $item->id) }}"
                                        class="btn btn-danger btn-sm bg-gradient-danger mb-3 "> ฟอร์ม1</a>
                                    <a href="{{ url('/patindex2/' . $item->id) }}"
                                        class="btn btn-danger btn-sm bg-gradient-danger mb-3 "> ฟอร์ม2</a>


                                <td class="align-middle">
                                    <button type="button" class="btn btn-secondary btn-sm bg-gradient-secondary mb-3  "
                                        data-bs-toggle="modal" data-bs-target="#modal-default{{ $item->id }}"> <i
                                            class="far fa-edit"></i></button>


                                    <a href="{{ url('/patindex/delete/' . $item->id) }}"
                                        class="btn btn-secondary btn-sm bg-gradient-secondary mb-3"
                                        onclick="return confirm('ลบหรือไม่ ?')"> <i class="fas fa-trash"></i></a>

                                    <div class="modal fade" id="modal-default{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title font-weight-normal" id="modal-title-default">
                                                        <b>แก้ไขข้อมูลผู้ป่วย</b>
                                                    </h6>
                                                    <button type="button" class="btn-close text-dark"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="p-4">
                                                        <form action="{{ url('/patindex-update/' . $item->id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf

                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label><b>คำนำหน้า</b></label>
                                                                        <input type="text" class="form-control"
                                                                            name="title" style="font-weight: bold"
                                                                            value={{ $item->title }}>
                                                                    </div>
                                                                    @error('title')
                                                                        <div class="my-2">
                                                                            <span class="text-danger my-2">
                                                                                {{ $message }} </span>
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-4">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label><b>ชื่อผู้ให้ข้อมูล</b></label>
                                                                        <input type="text" class="form-control"
                                                                            name="firstname" style="font-weight: bold"
                                                                            value={{ $item->firstname }}>
                                                                    </div>
                                                                    @error('firstname')
                                                                        <div class="my-2">
                                                                            <span class="text-danger my-2">
                                                                                {{ $message }} </span>
                                                                        </div>
                                                                    @enderror
                                                                </div>


                                                                <div class="col-4">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label><b>นามสกุล </b></label>
                                                                        <input type="text" class="form-control"
                                                                            name="lastname" style="font-weight: bold"
                                                                            value={{ $item->lastname }}>
                                                                    </div>
                                                                    @error('lastname')
                                                                        <div class="my-2">
                                                                            <span class="text-danger my-2">
                                                                                {{ $message }} </span>
                                                                        </div>
                                                                    @enderror
                                                                </div>


                                                                <div class="col-6">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label><b>อายุ </b></label>
                                                                        <input type="text" class="form-control"
                                                                            name="age" style="font-weight: bold"
                                                                            value={{ $item->age }}>
                                                                    </div>
                                                                    @error('age')
                                                                        <div class="my-2">
                                                                            <span class="text-danger my-2">
                                                                                {{ $message }} </span>
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-6">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label><b>เกี่ยวข้องเป็น </b></label>
                                                                        <input type="text" class="form-control"
                                                                            name="relevant" style="font-weight: bold"
                                                                            value={{ $item->relevant }}>
                                                                    </div>
                                                                    @error('relevant')
                                                                        <div class="my-2">
                                                                            <span class="text-danger my-2">
                                                                                {{ $message }} </span>
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-4">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label><b>คำนำหน้าผู้ป่วย</b></label>
                                                                        <input type="text" class="form-control"
                                                                            name="title_pat" style="font-weight: bold"
                                                                            value={{ $item->title_pat }}>
                                                                    </div>
                                                                    @error('title_pat')
                                                                        <div class="my-2">
                                                                            <span class="text-danger my-2">
                                                                                {{ $message }} </span>
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-4">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label><b>ชื่อผู้ป่วย</b></label>
                                                                        <input type="text" class="form-control"
                                                                            name="firstname_pat" style="font-weight: bold"
                                                                            value={{ $item->firstname_pat }}>
                                                                    </div>
                                                                    @error('firstname_pat')
                                                                        <div class="my-2">
                                                                            <span class="text-danger my-2">
                                                                                {{ $message }} </span>
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-4">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label><b>นามสกุล</b></label>
                                                                        <input type="text" class="form-control"
                                                                            name="lastname_pat" style="font-weight: bold"
                                                                            value={{ $item->lastname_pat }}>
                                                                    </div>
                                                                    @error('lastname_pat')
                                                                        <div class="my-2">
                                                                            <span class="text-danger my-2">
                                                                                {{ $message }} </span>
                                                                        </div>
                                                                    @enderror
                                                                </div>


                                                                <div class="col-6">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label><b>อายุผู้ป่วย</b></label>
                                                                        <input type="text" class="form-control"
                                                                            name="age_pat" style="font-weight: bold"
                                                                            value={{ $item->age_pat }}>
                                                                    </div>
                                                                    @error('age_pat')
                                                                        <div class="my-2">
                                                                            <span class="text-danger my-2">
                                                                                {{ $message }} </span>
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-6">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label><b>hn</b></label>
                                                                        <input type="text" class="form-control"
                                                                            style="font-weight: bold" name="hn"
                                                                            value={{ $item->hn }}>
                                                                    </div>
                                                                    @error('hn')
                                                                        <div class="my-2">
                                                                            <span class="text-danger my-2">
                                                                                {{ $message }} </span>
                                                                        </div>
                                                                    @enderror
                                                                </div>



                                                                <button type="input"
                                                                    class="btn btn-success">บันทึก</button>


                                                            </div>

                                                        </form>
                                                    </div>
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
