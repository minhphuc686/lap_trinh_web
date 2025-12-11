<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dãy số 1 đến 100</title>
</head>
<body>
    <h2>Dãy số từ 1 đến 100</h2>

    <?php
    for ($i = 1; $i <= 100; $i++) {

        if ($i % 2 == 0) {
            echo "<span style='font-weight:bold; color:red;'>$i</span>";
        } else {
            echo "<span style='font-weight:bold; font-style:italic; color:green;'>$i</span>";
        }

        echo " ";
    }
    ?>
</body>
</html>
