@extends('layouts.shop')

@section('content')

    <div class="col-lg-12">

        <div class="card">
            <div class="card-header p-3 pt-2">

                <h5>รายชื่อผู้ป่วยทั้งหมด</h5>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center mb-0" id="myTable">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary  text-1xl font-weight-bolder opacity-7" >
                            <b style="color:black"> ชื่อ นาม-สกุล ผู้ป่วย</b>
                            </th>
                        <th class="text-uppercase text-secondary  text-1xl font-weight-bolder opacity-7 ps-2">
                            <b style="color:black">อายุ</b>
                        </th>
                        <th class="text-uppercase text-secondary  text-1xl font-weight-bolder opacity-7 ps-2">
                            <b style="color:black">hn</b>
                        </th>
                       
                        <th> <b style="color:black">ชื่อนามสกุลผู้ให้ข้อมูล</b></th>
                  
                        <th class="text-uppercase text-secondary  text-1xl font-weight-bolder opacity-7  ">
                            <b style="color:black">เวลาที่เพิ่ม</b> </th>
                            
                        <th class="text-uppercase text-secondary  text-1xl font-weight-bolder opacity-7  ">
                           <b style="color:black">ชื่อผู้เพิ่มข้อมูล</b> </th>

                           <th class="text-uppercase text-secondary  text-1xl font-weight-bolder opacity-7  ">
                            <b style="color:black">แบบประเมิน</b> </th>
 
 
                    </tr>
                    </thead>

                    <tbody>


                    @foreach ($p as $item)
                        <tr>
                            <td>
                                <div class="d-flex px-2">
                                    <div class="my-auto">
                                        <b>
                                            {{ $item->title_pat }}
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
                                    {{ $item->title }}
                                    {{ $item->firstname }}
                                    {{ $item->lastname }}
                                </b>

                            </td>
                            <td>
                                <b>
                                    {{ $item->created_at }}
                                </b>

                            </td>

                            <td >
                                <b>
                                    {{ $item->auth }}
                                </b>

                            </td>
                            <td class="align-middle">
                                <a href="{{ url('/review1/' . $item->id) }}"  class="btn btn-success btn-sm bg-gradient-success mb-3 "> ฟอร์ม1</a>
                                <a href="{{ url('/review2/' . $item->id) }}"  class="btn btn-success btn-sm bg-gradient-success mb-3 "> ฟอร์ม2</a>





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
