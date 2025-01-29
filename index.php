<?php
include "setting.php";
if (
    isset($_GET['menu']) and $_GET['menu']=='float'
    or ($menumode=='float')
)
{
    include "index_float2.php";
}else{
    include "split.html";
}
?>