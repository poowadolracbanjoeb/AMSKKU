@extends('layouts.appHead_Dormitory_Service')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('กิจกรรม') }}</div>

                <div class="card-body">
                    <div class="mb-3 row">
                        <table class="table" border="1">
                            <thead>
                                <tr>
                                    <th>รหัสกิจกรรม</th>
                                    <th>ชื่อโครงการ</th>
                                    <th>ลักษณะโครงการ</th>
                                    <th>สถานที่ปฏิบัติงาน</th>
                                    <th>หน่วยงานที่รับผิดชอบโครงการ</th>
                                    <th>วันที่เริ่มจัด</th>
                                    <th>ถึงวันที่</th>
                                    <th>เอกสารประกอบโครงการ</th>
                                    <th>สถานะโครงการ</th>
                                    <th>ดำเนินการ</th>
                                </tr>
                            </thead>
                            @foreach($file as $key=>$data)
                            @if($data->activityStatus==3)
                            <tbody>
                                <tr>
                                    <<td>{{$data->activityId}}</td>
                                        <td>{{$data->activityName}}</td>
                                        <td>{{$data->activityType}}</td>
                                        <td>{{$data->activityPlace}}</td>
                                        <td>{{$data->activityResponsible}}</td>
                                        <td>{{$data->activityStartDate}}</td>
                                        <td>{{$data->activityEndDate}}</td>
                                        <td><a href="/files/download/{{$data->file}}">Download</a></td>
                                        <td>รอหัวหน้าหน่วยบริการหอพักอนุมัติ</td>
                                        <td><a href="/Head_Dormitory_Service/approveActivity/approve/{{$data->activityId}}">อนุมัติ</a> |
                                            <a href="/Head_Dormitory_Service/approveActivity/notApprove/{{$data->activityId}}">ไม่อนุมัติ</a>
                                        </td>

                                </tr>
                            </tbody>
                            @endif
                            @endforeach
                            </form>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection