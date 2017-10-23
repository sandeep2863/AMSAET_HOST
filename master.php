<?php
error_reporting(0);
function generateFormToken($form)
{
	$token=md5(uniqid(microtime(),true));
	$_SESSION[$form.'_token']=$token;
	return $token;
}

function stripcleantohtml($s)
{
	return htmlentities(trim(strip_tags(stripslashes($s))), ENT_NOQUOTES, "UTF-8");
}

function idgenerator()
{
	$n=rand(1,999);
	$s=$n*(rand(1,9));
	$id="AMS".$s;
	return $id;
}

function verifyFormToken($form)
{
	if(!isset($_SESSION[$form.'_token']))
	{
		return false;
	}

	if(!isset($_POST['token']))
	{
		return false;
	}

	if($_SESSION[$form.'_token']!==$_POST['token'])
	{
		return false;
	}

	return true;
}

function writelog($where)
{
	$ip=$_SERVER["REMOTE_ADDR"];
	$host=gethostbyaddr($ip);
	$date=date("d M Y");

	$logging = "\r\nThere was a hacking attempt on your form. \r\n Date of Attack: ".$date."\r\n IP-Adress: ".$ip." \r\n Host of Attacker: ".$host."\r\n Point of Attack: ".$where;

	if($handle=fopen('hacklog.log','a'))
	{
		fputs($handle,$logging);
		fclose($handle);
	}
	else
	{
		$to='mintu.nitish@protonmail.ch';
		$subject='HACK ATTEMPT';
		$header='From: admin@amsaet.poornima.edu.in';
		if(mail($to,$subject,$logging,$header))
		{
			echo 'The admin has been notified!';
		}
	}
}
?>
