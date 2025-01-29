<?php
include "checklogin.php";
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Float Menu</title>
</head>
<style>
    *{
        padding:0px;
        margin: 0px;
        width:100%;
        height:100%;
    }
    div{
        width:300px;
        position: absolute;
        /*opacity: .5;*/
        transition-duration: .2s;
        float:right;
        right:0px;
    }
</style>
<body>
    <div id="divmenu">
        <iframe id="menu" src="" frameborder="0" onmouseover="divover()"></iframe>    
    </div>
        <iframe id="main" src="" frameborder="0"></iframe>
</body>
</html>

<script>
menu.src="menu.html?rnd="+Math.random();
main.src="page0.html?rnd="+Math.random();



function divover(){
    if (divmenu.style.right=='-298px'){
        divmenu.style.right='0px';
    }
}
</script>