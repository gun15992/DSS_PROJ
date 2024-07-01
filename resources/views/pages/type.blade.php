<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.navbar')
    @vite('resources/js/app.js')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin-bottom: 20px;
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }
        .content {
            margin-left: 0px;
            padding: 20px;
        }
        .col {
            margin-bottom: 20px;
            margin-left: 0px;
            padding: 0px;
        }
        .card {
            margin-bottom: 20px;
            shadow: #000000
        }
        .card-body {
            text-align: center;
        }
        .card-body .icon {
            font-size: 30px;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>


    <div class="content">
        <h1>Inventory Dashboard</h1>
        <div class="col">
            <div class="card bg-info text-black">
                <div class="card-body">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#e8eaed"><path d="M80-160v-168.67h168.67V-160H80Zm235.33 0v-168.67H880V-160H315.33ZM80-395.33v-169.34h168.67v169.34H80Zm235.33 0v-169.34H880v169.34H315.33ZM80-631.33V-800h168.67v168.67H80Zm235.33 0V-800H880v168.67H315.33Z"/></svg></div>
                    <h3>ครุภัณฑ์ทั้งหมดของกรมวิทยาศาสตร์บริการ (วศ.)</h3>
                    <h4>33300 รายการ</h4>
                    
                </div>
            </div>
        </div>
        
        <!--low 1-->
        <div class="row">
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>ครุภัณฑ์สำนักงาน</h4>
                        <h4>18383 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">📋</div>
                        <h4>ครุภัณฑ์การแพทย์และวิทยาศาสตร์</h4>
                        <h4>3603 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">💵</div>
                        <h4>ครุภัณฑ์คอมพิวเตอร์</h4>
                        <h4>3598 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>ครุภัณฑ์สำรวจ</h4>
                        <h4>2533 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>ครุภัณฑ์ไฟฟ้าและวิทยุ</h4>
                        <h4>1602 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>ครุภัณฑ์โรงงาน</h4>
                        <h4>1316 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">👥</div>
                        <h4>ครุภัณฑ์โฆษณาและการเผยแพร่</h4>
                        <h4>876 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>ครุภัณฑ์โปรแกรมคอมพิวเตอร์</h4>
                        <h4>129 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>ครุภัณฑ์ก่อสร้าง</h4>
                        <h4>48 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>ครุภัณฑ์ยานพาหนะและขนส่ง</h4>
                        <h4>26 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>ครุภัณฑ์งานบ้านงานครัว</h4>
                        <h4>23 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>สิ่งก่อสร้าง</h4>
                        <h4>23 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">📦</div>
                        <h4>ครุภัณฑ์กีฬา/กายภาพ</h4>
                        <h4>20 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>สิ่งปลูกสร้าง</h4>
                        <h4>16 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>อาคารถาวร</h4>
                        <h4>4 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>ครุภัณฑ์ที่ดินของหน่วยงาน</h4>
                        <h4>2 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">📦</div>
                        <h4>ครุภัณฑ์การเกษตร</h4>
                        <h4>2 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>ครุภัณฑ์ดนตรี/นาฏศิลป์</h4>
                        <h4>0 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>ครุภัณฑ์สนาม</h4>
                        <h4>0 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>ครุภัณฑ์อาวุธ</h4>
                        <h4>0 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>ครุภัณฑ์ที่ดิน - ที่ราชพัสดุ</h4>
                        <h4>0 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>สินทรัพย์โครงสร้าง</h4>
                        <h4>0 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>สินทรัพย์ไม่มีตัวตน</h4>
                        <h4>0 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>อาคารชั่วคราว/โรงเรือน</h4>
                        <h4>0 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>ครุภัณฑ์อื่นๆ</h4>
                        <h4>0 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-black">
                    <div class="card-body">
                        <div class="icon">🏛️</div>
                        <h4>ครุภัณฑ์การศึกษา</h4>
                        <h4>0 รายการ</h4>
                        <a href="#" class="btn btn-light">รายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
