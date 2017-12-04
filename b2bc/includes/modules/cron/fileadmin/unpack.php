<?php
require "config.php";
if(!isset($_GET['path']) || !isset($_GET['type']) || !isset($_GET['unpackdir']))
{
    header("Location: ./404.php");
    exit;
}
elseif(($type=trim($_GET['type']))=="" || !is_file(($path=trim($_GET['path']))) || !is_dir(($unpackdir=trim($_GET['unpackdir']))))
{
    header("Location: ./404.php");
    exit;
}
xhtml_head("爱特解压");
echo "<div class=\"like\">\n";
echo "<a href=\"./index.php?path=".urlencode(dirname($path))."\"]>返回目录</a>解压结果\n";
echo "</div>\n";
echo "<div class=\"love\">\n";
switch($type)
{
    case "gz" :
        if(!function_exists("gzopen"))
	{
	    echo "系统没有支持核心函数！";
	}
	else
	{
	    $fp=preg_replace("/(.*?)\.gz$/si","\\1",$unpackdir."/".basename($path));
	    if(file_exists($fp))
	    {
	        echo "目标文件已经存在了哦！";
	    }
	    elseif(!($gz=gzopen($path,"r")))
	    {
	        echo "系统无法打开压缩文件！";
	    }
	    else
	    {
		if(!($fp=fopen($fp,"wb")))
		{
		    echo "系统无法保存解压文件！";
		}
		else
		{
		    while(!feof($gz))
		    {
		        fwrite($fp,gzread($gz,4096));
		    }
		    gzclose($gz);
		    fclose($fp);
		    echo "压缩文件已经解压完成！";
		}
	    }
	}
	break;
    case "bz2" :
        if(!function_exists("bzopen"))
	{
	    echo "系统没有支持核心函数！";
	}
	else
	{
	    $fp=preg_replace("/(.*?)\.bz2$/si","\\1",$unpackdir."/".basename($path));
	    if(file_exists($fp))
	    {
	        echo "目标文件已经存在了哦！";
	    }
	    elseif(!($bz2=bzopen($path,"r")))
	    {
	        echo "系统无法打开压缩文件！";
	    }
	    else
	    {
		if(!($fp=fopen($fp,"wb")))
		{
		    echo "系统无法保存解压文件！";
		}
		else
		{
		    while(!feof($bz2))
		    {
		        fwrite($fp,bzread($bz2,4096));
		    }
		    bzclose($bz2);
		    fclose($fp);
		    echo "压缩文件已经解压完成！";
		}
	    }
	}
	break;
    case "zip" :
        if(!file_exists("pclzip.php"))
	{
	    echo "暂时无法进行解压操作！";
	}
	else
	{
	    require "pclzip.php";
	    $pk=new pclzip($path);
	    if(($zip=$pk->extract(PCLZIP_OPT_PATH,$unpackdir))==false)
	    {
	        echo "无法成功解压您的文件！";
	    }
	    else
	    {
	        echo "成功解压出&nbsp;".count($zip)."&nbsp;个档案！";
	    }
	}
	break;
    case "tar" :
        if(!file_exists("tarcls.php"))
	{
	    echo "暂时无法进行解压操作！";
	}
	else
	{
	    require "tarcls.php";
	    $pk=new Archive_Tar($path);
	    if($pk->extract($unpackdir)==false)
	    {
	        echo "无法成功解压您的文件！";
	    }
	    else
	    {
	        echo "成功的对文件进行解压！";
	    }
	}
        break;
    default :
        echo "暂时不支持的压缩类型！";
}
echo "</div>\n";
xhtml_footer();
?>
