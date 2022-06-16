<?php
    include("./dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자정보목록</title>
</head>
<body>
<?php
$sql = "SELECT * FROM admin";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $no = $row["ano"]; 
  ?>
  <a href="./delete.php?no=<?php echo $no;?>">삭제</a>
  <?php  
    echo " 아이디 : " . $row["aid"]. " - 패스워드 : " . $row["apwd"];
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
<div>
<a href="./input.php">회원입력</a>
</div>


</body>
</html>