<?php
require "config.php";
if(!isset($_GET['path']))
{
    header("Location: ./404.php");
    exit;
}
elseif(($path=trim($_GET['path']))=="")
{
    header("Location: ./404.php");
    exit;
}
elseif(!is_file($path) || !is_readable($path))
{
    header("Location: ./404.php");
    exit;
}
else
{
    $myfs=new filesystem($path);
    $info=$myfs->getpath();
    header("Content-Type: application/force-download");
    header("Content-Disposition: attachment; filename=".___basename($path));
    header("Accept-Ranges: bytes");
    header("Content-Length: ".$info['size']);
    $fp=fopen($path,"rb");
    while(!feof($fp))
    {
        echo fgets($fp,4096);
    }
    fclose($fp);
}
?>
