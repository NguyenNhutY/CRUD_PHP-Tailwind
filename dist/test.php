<?php
// Kiểm tra xem người dùng đã nhấn nút "Back" chưa
if (isset($_POST['back'])) {
    // Sử dụng JavaScript để quay lại trang trước đó
    echo '<script>window.history.back();</script>';
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nút Back</title>
</head>
<body>
    <!-- Form để tạo nút "Back" -->
    <form method="post">
        <button type="submit" name="back">Quay lại</button>
    </form>
</body>
</html>
