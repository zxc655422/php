<?php 
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))//如果帳號密碼為上
        echo "Welcome"; //登入成功顯示
    else
        echo "fail login"; //登入錯誤顯示
?>