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

        #Img1{
            opacity: 0.5; //透明度設為 0.5
        filter: alpha(opacity=50); // IE8 與更早的版本
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
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
<body background="img/dragoncat.jpg">

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-2 sidenav" style="font-family: 'MV Boli'">

            <h4>瑞奇's Web</h4>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="index.php">首頁</a></li>
                <li class="active"><a href="resume.php">簡歷</a></li>
                <li><a href="academic.php">學術</a></li>
                <li><a href="book.php">著作</a></li>
                <li><a href="student.php">學生</a></li>
                <li><a href="link.php">常用連結</a></li>

            </ul><br>

        </div>

        <div class="col-sm-10">

            <h4 style="font-family: 'MV Boli'">Jui-Chi Chen小檔案</h4>

            <hr>
            <img src="img/rikki1042.jpg" width="200" height="250" align="right">
            <h2>基本資料</h2>
            <p><b>姓名：</b>陳瑞奇
            <p><b>任職單位：</b>資訊工程學系副教授
            <p><b>E-mail：</b><a href="mailto:rikki@asia.edu.tw">rikki@asia.edu.tw</a></p>

            <hr>
            <h2>學歷</h2>
            <p>國立中興大學資訊科學博士</p>
            <p>國立交通大學資訊工程碩士</p>
            <p>國立交通大學資訊工程學士</p>

            <hr>
            <h2>經歷</h2>
            <p>亞洲大學副教授</p>
            <p>亞洲大學助理教授</p>
            <p>工研院電腦與通訊工業研究所工程師</p>

            <hr>
            <h2>專長</h2>
            <p>資通工程(健康照護)</p>
            <p>資料探勘與分析</p>
            <p>無線網路資源管理</p>
            <p>電腦網路</p>

        </div> </div> </div>
<footer class="container-fluid">
    <p align="center" style="font-family: 'MV Boli'">Wanchun@Asia University 2017</p>
</footer>

</body>
</html>
