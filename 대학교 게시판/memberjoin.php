




<?php
header("Content-Type: text/html; charset=UTF-8");
$conn = new mysqli("localhost", "root", "123456", "test");
mysqli_query($conn, 'SET NAMES utf8');
$id = $_POST['id'];
$password = $_POST['password'];
$username = $_POST['username'];
$grade = $_POST['grade'];
$department = $_POST['department'];
$sql = "insert into test (id, password, username, grade, department) values ('$id', '$password', '$username', '$grade', '$department')";
$res = $conn->query($sql);
echo "<script>location.href = 'main.html'</script>";
?>