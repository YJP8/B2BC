<?php
function ___codepre()
{
    $str=func_get_arg(0);
    $arr1=array("&","\"","'","<",">");
    $arr2=array("&amp;","&quot;","&apos;","&lt;","&gt;");
    return str_replace($arr1,$arr2,$str);
}
function ___convert()
{
    $str=func_get_arg(0);
    if(!function_exists("mb_convert_encoding")) return $str;
    $encode=func_num_args()<2?"UTF-8":func_get_arg(1);
    $enlist=func_num_args()>2?func_get_arg(2):"auto,CP936,CP950";
    return mb_convert_encoding($str,$encode,$enlist);
}
function ___sendfile()
{
    $i=0;
    $to=func_get_arg(0);
    $fs=func_get_arg(1);
    if(!is_file("email.php"))
    {
        return false;
    }
    else
    {
        require "email.php";
    }
    if($to=="" || !is_array($fs))
    {
        return false;
    }
    elseif(count($fs)<1)
    {
        return false;
    }
    $systags=uniqid("");
    $subject="your files";
    $headers="Content-Type: multipart/mixed; boundary=\"$systags\"\r\n";
    $emailbody="--$systags\r\n";
    $emailbody.="Content-type: text/plain; charset=utf-8\r\n";
    $emailbody.="Content-transfer-encoding: 8bit\r\n\r\n";
    while($i<count($fs))
    {
        if(!is_file($fs[$i]) || !is_readable($fs[$i])) continue;
	$attachment=chunk_split(base64_encode(file_get_contents($fs[$i])));
	$emailbody.="--$systags\r\n";
	$emailbody.="Content-type: application/octet-stream; name=".___basename($fs[$i])."\r\n";
	$emailbody.="Content-transfer-encoding: base64\r\n\r\n";
	$emailbody.="$attachment\r\n\r\n";
	$i++;
    }
    $emailbody.="--$systags--";
    return email($to,"From Aite.me File Manager",$emailbody,$headers);
}
function ___basename()
{
    $path=trim(func_get_arg(0));
    $path=str_replace("\\","/",$path);
    $path=explode("/",$path);
    return ___convert($path[count($path)-1]);
}
function ___filesize()
{
    $size=trim(func_get_arg(0));
    if($size<1024)
    {
        return $size." B";
    }
    elseif($size<1024*1024)
    {
        return number_format($size/1024,3)." KB";
    }
    elseif($size<1024*1024*1024)
    {
        return number_format($size/1024/1024,3)." MB";
    }
    elseif($size<1024*1024*1024*1024)
    {
        return number_format($size/1024/1024/1024,3)." GB";
    }
    else
    {
        return number_format($size/1024/1024/1024/1024,3)." TB";
    }
}
function ___shortpath()
{
    $path=trim(func_get_arg(0));
    if(strlen($path)<=18) return $path;
    $path1=substr($path,-9);
    $path2=substr($path,0,9);
    return $path2."&nbsp;....&nbsp;".$path1;
}
?>
