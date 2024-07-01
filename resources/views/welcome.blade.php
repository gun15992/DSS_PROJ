@extends('layouts.layout')

@section('title', 'DSS Inventory')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <br>
                    <h4 class="header-title pb-3 mt-0">ข้อมูลครุภัณฑ์ทั้งหมด</h4>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr class="align-self-center">
                                    <th>ลำดับ</th>
                                    <th>หมายเลขครุภัณฑ์</th>
                                    <th>ชื่อครุภัณฑ์</th>
                                    <th>ยี่ห้อ</th>
                                    <th>หมวดหมู่</th>
                                    <th>หน่วยงานเจ้าของ</th>
                                    <th>สถานที่ตั้ง</th>
                                    <th>สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>วศ.ทช.10-011/x 25xx</td>
                                    <td><a href="#">ครุภัณฑ์ 01</a></td>
                                    <td>ยี่ห้อ 01</td>
                                    <td>ยังไม่ระบุ</td>
                                    <td>ฝ่ายเทคโนโลยีสารสนเทศ</td>
                                    <td>สำนักห้องสมุด ดร.ตั้ว</td>
                                    <td><span class="badge badge-pill badge-success">ใช้งาน</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>วศ.ทช.10-011/x 25xx</td>
                                    <td><a href="#">ครุภัณฑ์ 02</a></td>
                                    <td>ยี่ห้อ 02</td>
                                    <td>ยังไม่ระบุ</td>
                                    <td>ฝ่ายเทคโนโลยีสารสนเทศ</td>
                                    <td>สำนักห้องสมุด ดร.ตั้ว</td>
                                    <td><span class="badge badge-pill badge-danger">จำหน่ายออก</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>วศ.ทช.10-011/x 25xx</td>
                                    <td><a href="#">ครุภัณฑ์ 03</a></td>
                                    <td>ยี่ห้อ 03</td>
                                    <td>ยังไม่ระบุ</td>
                                    <td>ฝ่ายเทคโนโลยีสารสนเทศ</td>
                                    <td>สำนักห้องสมุด ดร.ตั้ว</td>
                                    <td><span class="badge badge-pill badge-success">ใช้งาน</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>วศ.ทช.10-011/x 25xx</td>
                                    <td><a href="#">ครุภัณฑ์ 04</a></td>
                                    <td>ยี่ห้อ 04</td>
                                    <td>ยังไม่ระบุ</td>
                                    <td>ฝ่ายเทคโนโลยีสารสนเทศ</td>
                                    <td>สำนักห้องสมุด ดร.ตั้ว</td>
                                    <td><span class="badge badge-pill badge-danger">จำหน่ายออก</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>วศ.ทช.10-011/x 25xx</td>
                                    <td><a href="#">ครุภัณฑ์ 05</a></td>
                                    <td>ยี่ห้อ 05</td>
                                    <td>ยังไม่ระบุ</td>
                                    <td>ฝ่ายเทคโนโลยีสารสนเทศ</td>
                                    <td>สำนักห้องสมุด ดร.ตั้ว</td>
                                    <td><span class="badge badge-pill badge-danger">จำหน่ายออก</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>วศ.ทช.10-011/x 25xx</td>
                                    <td><a href="#">ครุภัณฑ์ 02</a></td>
                                    <td>ยี่ห้อ 02</td>
                                    <td>ยังไม่ระบุ</td>
                                    <td>ฝ่ายเทคโนโลยีสารสนเทศ</td>
                                    <td>สำนักห้องสมุด ดร.ตั้ว</td>
                                    <td><span class="badge badge-pill badge-danger">จำหน่ายออก</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>วศ.ทช.10-011/x 25xx</td>
                                    <td><a href="#">ครุภัณฑ์ 03</a></td>
                                    <td>ยี่ห้อ 03</td>
                                    <td>ยังไม่ระบุ</td>
                                    <td>ฝ่ายเทคโนโลยีสารสนเทศ</td>
                                    <td>สำนักห้องสมุด ดร.ตั้ว</td>
                                    <td><span class="badge badge-pill badge-success">ใช้งาน</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>วศ.ทช.10-011/x 25xx</td>
                                    <td><a href="#">ครุภัณฑ์ 04</a></td>
                                    <td>ยี่ห้อ 04</td>
                                    <td>ยังไม่ระบุ</td>
                                    <td>ฝ่ายเทคโนโลยีสารสนเทศ</td>
                                    <td>สำนักห้องสมุด ดร.ตั้ว</td>
                                    <td><span class="badge badge-pill badge-danger">จำหน่ายออก</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>วศ.ทช.10-011/x 25xx</td>
                                    <td><a href="#">ครุภัณฑ์ 05</a></td>
                                    <td>ยี่ห้อ 05</td>
                                    <td>ยังไม่ระบุ</td>
                                    <td>ฝ่ายเทคโนโลยีสารสนเทศ</td>
                                    <td>สำนักห้องสมุด ดร.ตั้ว</td>
                                    <td><span class="badge badge-pill badge-danger">จำหน่ายออก</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end table-responsive-->
                    <div class="pt-3 border-top text-right"><a href="#" class="text-primary">View all <i class="mdi mdi-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <style>
        body{
            background:#f5f5f5;
        }
        .card {
            border: none;
            -webkit-box-shadow: 1px 0 20px rgba(96,93,175,.05);
            box-shadow: 1px 0 20px rgba(96,93,175,.05);
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .table th {
            font-weight: 500;
            color: #827fc0;
        }
        .table thead {
            background-color: #f3f2f7;
        }
        .table>tbody>tr>td, .table>tfoot>tr>td, .table>thead>tr>td {
            padding: 14px 12px;
            vertical-align: middle;
        }
        .table tr td {
            color: #8887a9;
        }
        .thumb-sm {
            height: 32px;
            width: 32px;
        }
        .badge-soft-warning {
            background-color: rgba(248,201,85,.2);
            color: #f8c955;
        }

        .badge {
            font-weight: 500;
        }
        .badge-soft-primary {
            background-color: rgba(96,93,175,.2);
            color: #605daf;
        }
    </style>
    
@endsection