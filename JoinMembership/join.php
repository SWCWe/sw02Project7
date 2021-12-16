  <?php
header("Content-Type: text/html; charset=UTF-8");
$conn = new mysqli("localhost", "root", "0206465", "joinmembership");
mysqli_query($conn, 'SET NAMES utf8');
$ID = $_POST['Pid'];
$Password = $_POST['{Ppassword'];
$Username = $_POST['Pusername'];
$Grade = $_POST['Pgrade'];
$Department = $_POST['Pdepartment'];
$sql = "insert into joinmember (ID, Password, Username, Grade, Department) values ('$ID', '$Password', '$Username', '$Grade', '$Department')";
$res = $conn->query($sql);
echo "<script>location.href = 'login.html';</script>";
?>