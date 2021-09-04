@extends('layouts.appDormitory_Chairman')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="/Dormitory_Chairman/createActivity/Submit" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                <input type="text" name="activityName" class="form-control" placeholder="ชื่อโครงการ">
                    <span class="text-danger"> @error("activityName"){{$message}}@enderror </span><br>
                    <input type="text" name="activityType" class="form-control" placeholder="ลักษณะโครงการ"><br>
                    <span class="text-danger"> @error("activityType"){{$message}}@enderror </span><br>
                    <input type="text" name="activityPlace" class="form-control" placeholder="สถานที่ปฏิบัติงาน"><br>
                    <span class="text-danger"> @error("activityPlace"){{$message}}@enderror </span><br>
                    <input type="text" name="activityResponsible" class="form-control" placeholder="หน่วยงานที่รับผิดชอบโครงการ"><br>
                    <span class="text-danger"> @error("activityResponsible"){{$message}}@enderror </span><br>
                    ตั้งแต่วันที่<br>
                    <input type="text" name="activityStartDate" class="form-control" placeholder="วันที่"><br>ถึง<br>
                    <span class="text-danger"> @error("activityStartDate"){{$message}}@enderror </span><br>
                    <input type="text" name="activityEndDate" class="form-control" placeholder="วันที่"><br>
                    <span class="text-danger"> @error("activityEndDate"){{$message}}@enderror </span><br>
                    <input type="text" name="activityTarget" class="form-control" placeholder="จำนวนเป้าหมายผู้เข้าร่วมโครงการ"><br>
                    <span class="text-danger"> @error("activityTarget"){{$message}}@enderror </span><br>
                    <input type="text" name="activityBudget" class="form-control" placeholder="งบประมาณที่ใช้ดำเนินโครงการ"><br>
                    <span class="text-danger"> @error("activityBudget"){{$message}}@enderror </span><br>
                    เอกสารประกอบโครงการ<br><br>
                    <input type="file" name="activityFile"><br><br>
                    <span class="text-danger"> @error("activityFile"){{$message}}@enderror </span><br>
                    @if(Session::has('post_update'))
                    <span>{{Session::get('post_update')}}</span>
                    @endif
                    <br>
                    <br>
                    <input type="submit" class="btn btn-success" value="สร้างกิจกรรม">
                    <input type="submit" class="btn btn-warning" value="บันทึกร่างโครงการ">

            </form>
        </div>
    </div>
</div>

@endsection
