<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <br>
  <h2 style="text-align: center"> รายงานแบบประเมิน 2</h2>
  <br>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">ชื่อ-นามสกุล ผู้ป่วย</th>
                    <th scope="col">อายุ</th>
                    <th scope="col">เวลาที่เพิ่มข้อมูล</th>
                    <th scope="col">ผู้เพิ่ม</th>
                  </tr>
                </thead>
                @php
                $i =1;    
                @endphp
                <tbody>
                    @foreach ($p as $item)
                        
                   
                  <tr>
                    <th scope="row">{{$i++}}</th>
                    @foreach($item->asn2topat as $item1)
                    <td>{{$item1->title_pat}} {{$item1->firstname_pat}} {{$item1->lastname_pat}} </td>
                    @endforeach
                    @foreach($item->asn2topat as $item1)
                    <td>{{$item1->age_pat}}  </td>
                    @endforeach
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->auth}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

    
</body>
</html>