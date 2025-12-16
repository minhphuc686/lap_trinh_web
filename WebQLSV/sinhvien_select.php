<?php
require "db.php";

$sql = "SELECT * FROM sinhvien";
$result = mysqli_query($conn, $sql);

echo "<h2>DANH SÁCH SINH VIÊN</h2>";

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>
            <tr>
                <th>Mã SV</th>
                <th>Họ tên</th>
                <th>Ngày sinh</th>
                <th>Lớp</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['MaSV']}</td>
                <td>{$row['HoTen']}</td>
                <td>{$row['NgaySinh']}</td>
                <td>{$row['Lop']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Chưa có sinh viên nào";
}

mysqli_close($conn);
