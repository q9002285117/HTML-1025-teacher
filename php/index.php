<?php
session_start();

if(isset($_SESSION['username'])){
    include ("mysql_connect.inc.php");
    $sql="SELECT *FROM user where id='id'";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_row($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>陳瑞奇教授</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 1000px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #252525;
            color: white;
            padding: 15px;
            font-family: "MV Boli";
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;}
        }
    </style>
</head>
<body background="img/snoopy.jpg" >

<div class="container-fluid"  >
    <div class="row content">
        <div class="col-sm-2 sidenav" style="font-family: 'MV Boli'">
            <h4>瑞奇's Web</h4>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="index.php">首頁</a></li>
                <li><a href="resume.php">簡歷</a></li>
                <li><a href="academic.php">學術</a></li>
                <li><a href="book.php">著作</a></li>
                <li><a href="student.php">學生</a></li>
                <li><a href="link.php">常用連結</a></li>
                <?php
                if(isset($_SESSION['username'])){

//                    echo '<li><a href="#" >add</a> &nbsp;<a href="#">alter</a>&nbsp;<a href="#">delete</a></li>';
                    echo '<li><a href="member.php">控制台</a></li>';
                    echo '<li><a href="member2.php">控制台2</a></li>';
                    echo '<li><a href="logout.php">Logout</a></li>';
                }else{
                    echo '<li><a href="login.php">Login</a></li>';
                }
                ?>
            </ul><br>
        </div>


        <div class="col-sm-10" align="center">

            <h4 align="center" style="font-family: 'MV Boli'">Welcome to Jui-Chi Chen's web</h4>

            <hr>
            <img src="img/011.jpg" width="200" height="250" align="center">
    <div style="-webkit-border-radius: 20px;background-color:#ffd1fb;">
            <h2>陳瑞奇<small>專任副教授</small></h2>

            <p><b>學歷：</b>國立中興大學資訊科學博士<br>
                <b>辦公室：</b>HB13<br>
                <b>分機：</b>20013<br>
                <b>E-mail：</b>rikki@asia.edu.tw</p>

</div>
            <div style="background-color: #eeec5d;border-radius: 10px;">
            <h4>研究領域</h4>
            <p>資通工程(健康照護)、資料探勘與分析、無線網路資源管理、電腦網路</p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.5721582672886!2d120.68521641538392!3d24.0461479833298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693b17a99d736b%3A0x1c471d70cdc89dc9!2z5Lqe5rSy5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1514882014883" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<footer class="container-fluid">
    <p align="center" style="font-family: 'MV Boli'">Wanchun@Asia University 2017</p>
</footer>



</body>


</html>
