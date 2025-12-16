<?php
include "db.php";

// Ví dụ: xóa sinh viên có MaSV = 3
$sql = "DELETE FROM sinhvien WHERE MaSV = 3";

if (mysqli_query($conn, $sql)) {
    echo "Xóa sinh viên thành công";
} else {
    echo "Lỗi: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
