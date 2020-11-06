<?php
    error_reporting(0);//把警告訊息關掉
    
    //php要怎麼跟mysq1資料庫連結，有三個步驟
    //1. mysqli_connect，必須要設定ip(本地端為localhost)
    //   帳號、密碼、以及連結的資料庫(mydb)
    $conn = mysqli_connect("localhost","root","", "mydb");
    if (mysqli_connect_error($conn)) // 判斷是否符合error
        die("資料庫連線錯誤");//符合即顯示

    mysqli_set_charset($conn, "utf8");
    $result=mysqli_query($conn, "select * from user"); //結果從MySQL數據庫服務器的連接取得user
    while ($row=mysqli_fetch_array($result)) //while迴圈 擷取帳密
    { 
        echo $row[id];//取出ID
        echo " ";//ID與密碼之間空格
        echo $row[pwd];//取出密碼
        echo "<br>"; //換行
    }
?>