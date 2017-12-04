<?php
require "config.php";
if(!isset($_GET['path']))
{
    header("Location: ./404.php");
    exit;
}
elseif(is_dir($path=realpath(trim($_GET['path']))))
{
    header("Location: ./404.php");
    exit;
}
$fs=new filesystem($path);
xhtml_head(___shortpath($path));
if(!($data=$fs->getpath($path)))
{
    echo "<div class=\"error\">\n";
    echo "[<a href=\"./index.php?path=".urlencode($getcwd)."\">返回目录</a>]\n";
    echo "</div>\n";
}
else
{
    echo "<div class=\"like\">\n";
    echo "<a href=\"./index.php?path=".urlencode(dirname($path))."\">返回目录</a>文件详情\n";
    echo "</div>\n";
    echo "<div class=\"love\">\n";
    echo "文件名称：".___basename($path)."<br />\n";
    echo "文件大小：".___filesize($data['size'])."<br />\n";
    echo "所有者ID：{$data['uid']}<br />\n";
    echo "所有组ID：{$data['gid']}<br />\n";
    echo "上次访问：".gmdate("Y-m-d H:i:s",($data['atime'])+TIME)."<br />\n";
    echo "上次修改：".gmdate("Y-m-d H:i:s",($data['mtime'])+TIME)."<br />\n";
    echo "上次改变：".gmdate("Y-m-d H:i:s",($data['ctime'])+TIME)."<br />\n";
    echo "</div>\n";
    echo "<div class=\"like\">\n";
    echo "爱特解压<a href=\"./index.php?new&path=".urlencode(dirname($path))."&multiple=unpackdir&getcwd=".urlencode($path)."\">目标目录</a>\n";
    echo "</div>\n";
    echo "<div class=\"love\">\n";
    echo "<form action=\"unpack.php\" method=\"GET\">\n";
    echo "<input type=\"hidden\" name=\"path\" value=\"$path\" />";
    if(!isset($_GET['unpackdir']))
    {
        echo "目标：<input type=\"text\" name=\"unpackdir\" value=\"".dirname($path)."\" /><br />\n";
    }
    else
    {
        echo "目标：<input type=\"text\" name=\"unpackdir\" value=\"".trim($_GET['unpackdir'])."\" /><br />\n";
    }
    echo "类型：<input type=\"radio\" name=\"type\" value=\"gz\" />GZ<input type=\"radio\" name=\"type\" value=\"bz2\" />BZ2<input type=\"radio\" name=\"type\" value=\"zip\" checked />ZIP<input type=\"radio\" name=\"type\" value=\"tar\" />TAR<br />\n";
    echo "<input type=\"submit\" value=\"释放到指定的目录\" />（有效&nbsp;目录）\n";
    echo "</form>\n";
    echo "</div>\n";
    echo "<div class=\"like\">\n爱特文件效验工具\n</div>\n";
    echo "<div class=\"love\">\n";
    echo "md5：";
    if(isset($_GET['md5']))
    {
        echo "<br />".md5_file($path);
    }
    else
    {
        echo "<a href=\"./file.php?{$_SERVER['QUERY_STRING']}&md5\">文件的&nbsp;MD5&nbsp;散列值</a>（效验文件）\n";
    }
    echo "</div>\n";
    echo "<div class=\"love\">\n";
    echo "sha1：";
    if(isset($_GET['sha1']))
    {
        echo "<br />".sha1_file($path);
    }
    else
    {
        echo "<a href=\"./file.php?{$_SERVER['QUERY_STRING']}&sha1\">文件的&nbsp;SHA1&nbsp;散列值</a>（效验文件）\n";
    }
    echo "</div>\n";
}
xhtml_footer();
?>
