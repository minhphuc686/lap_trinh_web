<?php
include "db.php";

$sql = "INSERT INTO sinhvien(HoTen, NgaySinh, Lop)
        VALUES ('Trần Văn B', '2003-09-20', 'CNTT02')";

if (mysqli_query($conn, $sql)) {
    echo "Thêm sinh viên thành công";
} else {
    echo "Lỗi: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

