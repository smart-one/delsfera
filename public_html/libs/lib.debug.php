<?php 
// ���������� �������� �������
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////
// �����: ������ �������
// ������ 111209
//
//
//  showme($par) -����������� ����������
//	mylib_goto($url) - ������� �� ������



function showme($par)
{
	echo "<pre>";
	print_r($par);
	echo "</pre>";
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////
function mylib_goto($url)
{
	$url= (strstr($url,"http://")) ? $url : "http://".$_SERVER['SERVER_NAME']."$url";
	echo "<script> window.location.href='".$url."'; </script>";
}
			
////////////////////////////////////////////////////////////////////////////////////////////////////////////
function mylib_getReadTime($stamp)
{
		if(!(int)($stamp)) return "����� �� ������";
		$today=date("d.m.Y");
		$tommorrow= (date("d")-1) < 10 ?  "0".(date("d")-1): (date("d")-1);
		$tommorrow.=date(".m.Y");
		$stamp=date("d.m.Y � H:i:s",$stamp);
		$stamp=str_replace($today,"�������",$stamp);
		$stamp=str_replace($tommorrow,"�����",$stamp);
		return $stamp;
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////
function getReadDate($stamp)
{
		if(!(int)($stamp)) return 0;
		$stamp=date("d.m.Y",$stamp);
		return $stamp;
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////
function getBrowser()
{
	$Browser=array();
	preg_match("/(Opera|Firefox)\/([0-9\.]+)/i",$_SERVER['HTTP_USER_AGENT'],$res);
	if(isset($res[1]))
	{
		$Browser["name"]=$res[1];
		$Browser["version"]=$res[2];
		return $Browser;
	}

	preg_match("/(MSIE) ([0-9\.]+)/i",$_SERVER['HTTP_USER_AGENT'],$res);
	if(isset($res[1]))
	{
		$Browser["name"]=$res[1];
		$Browser["version"]=$res[2];
		return $Browser;
	}

	return false;
}
?>