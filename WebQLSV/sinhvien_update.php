<?php
include "db.php";

// Ví dụ: cập nhật sinh viên có MaSV = 2
$maSV = 2;
$hoTen = "Trần Văn B (đã sửa)";
$ngaySinh = "2003-09-20";
$lop = "CNTT02";

$sql = "UPDATE sinhvien 
        SET HoTen='$hoTen', NgaySinh='$ngaySinh', Lop='$lop'
        WHERE MaSV=$maSV";

if (mysqli_query($conn, $sql)) {
    echo "Cập nhật sinh viên thành công";
} else {
    echo "Lỗi: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
