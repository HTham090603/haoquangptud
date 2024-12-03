<?php
// error_reporting(1);
session_start();
require_once("model/ketnoi.php");
require("view/layout/header.php");
if(isset($_GET["page"]))
    $page=$_GET["page"];
else
    $page='trangchu';
//if(isset($_GET["cate"]))
  // $cate=$_GET["cate"];
if(file_exists("view/page/".$page."/index.php"))
    include("view/page/".$page."/index.php");
else
include("view/page/404/index.php");
include("view/layout/footer.php");
?>
