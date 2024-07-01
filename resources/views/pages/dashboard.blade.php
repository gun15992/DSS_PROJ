<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.navbar')
    @vite('resources/js/app.js')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Dashboard</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: "Noto Sans Thai", sans-serif;
        }
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
        .card {
            margin-bottom: 20px;
            border: 2px solid #007bff; /* เปลี่ยนสีกรอบที่นี่ */
        }
        .card-body {
            text-align: center;
        }
        .card-body .icon {
            font-size: 30px;
            margin-bottom: 10px;
        }
        .chart-container {
            position: relative;
            width: 80%;
            margin: auto;
        }
        .chart-container canvas {
            width: 100% !important;
            height: 500px !important;
        }
        .filter-container {
            margin: 20px 0;
            text-align: center;
        }
        .info-table {
            margin: 20px auto;
            width: 80%;
            border-collapse: collapse;
        }
        .info-table th, .info-table td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        .info-table th {
            background-color: #f2f2f2;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
    <body>
        <div class="content">
            <h1>Inventory Dashboard</h1>
            <div class="filter-container">
                <label for="yearFilter">เลือกปี: </label>
                <select id="yearFilter">
                    <option value="2550">2550</option>
                    <option value="2551">2551</option>
                    <option value="2552">2552</option>
                    <option value="2553">2553</option>
                    <option value="2554">2554</option>
                    <option value="2555">2555</option>
                    <option value="2556">2556</option>
                    <option value="2557">2557</option>
                    <option value="2558">2558</option>
                    <option value="2559">2559</option>
                    <option value="2560">2560</option>
                    <option value="2561">2561</option>
                    <option value="2562">2562</option>
                    <option value="2563">2563</option>
                    <option value="2564">2564</option>
                    <option value="2565">2565</option>
                    <option value="2566">2566</option>
                    <option value="2567">2567</option>
                </select>
                <label for="monthFilter">เลือกเดือน: </label>
                <select id="monthFilter">
                    <option value="มกราคม">มกราคม</option>
                    <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                    <option value="มีนาคม">มีนาคม</option>
                    <option value="เมษายน">เมษายน</option>
                    <option value="พฤษภาคม">พฤษภาคม</option>
                    <option value="มิถุนายน">มิถุนายน</option>
                    <option value="กรกฎาคม">กรกฎาคม</option>
                    <option value="สิงหาคม">สิงหาคม</option>
                    <option value="กันยายน">กันยายน</option>
                    <option value="ตุลาคม">ตุลาคม</option>
                    <option value="พฤศจิกายน">พฤศจิกายน</option>
                    <option value="ธันวาคม">ธันวาคม</option>
                </select>
                <button onclick="filterData()">กรอง</button>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="chart-container">
                        <canvas id="inventoryChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <table class="info-table">
                        <thead>
                            <tr>
                                <th>ปี</th>
                                <th>เดือน</th>
                                <th>ครุภัณฑ์</th>
                            </tr>
                        </thead>
                        <tbody id="infoTableBody">
                            <!-- ข้อมูลจะถูกเติมที่นี่ -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            var ctx = document.getElementById('inventoryChart').getContext('2d');
            
            var inventoryData = {
                labels: ['2550', '2551', '2552', '2553', '2554', '2555', '2556', '2557', '2558', '2559', '2560', '2561', '2562', '2563', '2564', '2565', '2566', '2567'],
                datasets: [{
                    label: 'จำนวนการจำหน่ายครุภัณฑ์',
                    data: [30, 20, 10, 40, 50, 60, 70, 30, 40, 20, 50, 60, 70, 30, 20, 10, 50, 60], // Example data
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            };

            var inventoryDetails = {
                '2550': [
                    { month: 'มกราคม', item: 'ครุภัณฑ์ A' },
                    { month: 'กุมภาพันธ์', item: 'ครุภัณฑ์ B' },
                    { month: 'มีนาคม', item: 'ครุภัณฑ์ C' }
                ],
                '2551': [
                    { month: 'เมษายน', item: 'ครุภัณฑ์ D' },
                    { month: 'พฤษภาคม', item: 'ครุภัณฑ์ E' },
                    { month: 'มิถุนายน', item: 'ครุภัณฑ์ F' }
                ],
                '2552': [
                    { month: 'กรกฎาคม', item: 'ครุภัณฑ์ G' },
                    { month: 'สิงหาคม', item: 'ครุภัณฑ์ H' },
                    { month: 'กันยายน', item: 'ครุภัณฑ์ I' }
                ],
                '2553': [
                    { month: 'ตุลาคม', item: 'ครุภัณฑ์ J' },
                    { month: 'พฤศจิกายน', item: 'ครุภัณฑ์ K' },
                    { month: 'ธันวาคม', item: 'ครุภัณฑ์ L' }
                ],
                '2554': [
                    { month: 'มกราคม', item: 'ครุภัณฑ์ M' },
                    { month: 'กุมภาพันธ์', item: 'ครุภัณฑ์ N' },
                    { month: 'มีนาคม', item: 'ครุภัณฑ์ O' }
                ],
                // Add more data here for other years
            };

            var inventoryChart = new Chart(ctx, {
                type: 'bar', // ใช้ 'bar' สำหรับกราฟแท่งแนวนอน
                data: inventoryData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    indexAxis: 'y', // แกน y สำหรับกราฟแท่งแนวนอน
                    scales: {
                        x: {
                            beginAtZero: true
                        }
                    }
                }
            });

            function filterData() {
                var selectedYear = document.getElementById('yearFilter').value;
                var selectedMonth = document.getElementById('monthFilter').value;

                // สร้างสีที่แตกต่างสำหรับปีที่เลือก
                var newBackgroundColor = inventoryData.labels.map((label, index) => {
                    if (label == selectedYear) {
                        return 'rgba(255, 99, 132, 0.5)'; // สีใหม่สำหรับปีที่เลือก
                    } else {
                        return 'rgba(0, 123, 255, 0.5)'; // สีเดิมสำหรับปีอื่น ๆ
                    }
                });

                // จำลองการกรองข้อมูลตามปีและเดือนที่เลือก
                var filteredData = inventoryData.datasets[0].data.map((value, index) => {
                    if (inventoryData.labels[index] == selectedYear) {
                        return value; // ใช้ค่าจริงสำหรับปีที่เลือก
                    } else {
                        return value * Math.random(); // ตัวอย่างการกรองข้อมูล (เปลี่ยนตามความเหมาะสม)
                    }
                });

                // อัพเดทสีและข้อมูลในกราฟ
                inventoryChart.data.datasets[0].backgroundColor = newBackgroundColor;
                inventoryChart.data.datasets[0].data = filteredData;
                inventoryChart.update();

                // กรองและแสดงรายละเอียดในตารางข้อมูล
                var infoTableBody = document.getElementById('infoTableBody');
                infoTableBody.innerHTML = ''; // ล้างตารางก่อนเติมข้อมูลใหม่

                if (inventoryDetails[selectedYear]) {
                    inventoryDetails[selectedYear].forEach(detail => {
                        if (detail.month == selectedMonth) {
                            var row = document.createElement('tr');
                            var cellYear = document.createElement('td');
                            cellYear.textContent = selectedYear;
                            var cellMonth = document.createElement('td');
                            cellMonth.textContent = detail.month;
                            var cellItem = document.createElement('td');
                            cellItem.textContent = detail.item;
                            row.appendChild(cellYear);
                            row.appendChild(cellMonth);
                            row.appendChild(cellItem);
                            infoTableBody.appendChild(row);
                        }
                    });
                }
            }
        </script>
    </body>
</html>
