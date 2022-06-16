<?php
include("./dbcon.php");

$id = $_POST["id"];
$pwd = $_POST["pwd"];

$sql = "select * from admin where aid='$id' and apwd='$pwd'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // 관리자 정보가 맞을 경우
    ?>
    <script>
        location.href="./list.php";
    </script>
    <?php
}else{
    // 관리자 정보가 틀릴 경우
    ?>
    <script>
        alert("관리자 정보가 일치하지 않습니다.");
        history.back();
    </script>
    <?php
}
?>