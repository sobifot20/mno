<?php
include "checklogin.php";
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side by Side</title>
</head>
<style>
    *{
        height:100%;
        width:100%;
        padding:0px;
        margin:0px;

    }
</style>
<body>
    <table border="0">
        <tr>
            <td id="tdmenu" 
            onmouseover="tdmenu.style.width=tdmenu.style.minWidth='300px';"             
            style="width:300px;min-width:300px;max-width:300px;transition-duration: 3s;">
                <iframe id="menu" src="menu.html" frameborder="0"></iframe>
            <td>
                <iframe id="main" src="page0.html" frameborder="0"></iframe>
    </table>
    

    </button>
</body>
</html>