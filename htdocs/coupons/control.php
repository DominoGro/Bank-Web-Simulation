<?php
session_start();
include_once('libfunc.php');
include_once('GUIfunc.php');

if(isset($_POST['session'])&& $_POST['session'])
{
	$session = $_POST['session']-1;
    $_SESSION['pointer'] = $session;
}


if(isset($_POST['display']) || isset($_POST['session'])) 
{
	switch ($_POST['display'])  
	{
	case "first": 
		$_SESSION['pointer'] = 0;
		header("Location: displayData.php");
		break;
	case "next":
		($_SESSION['pointer']<$_SESSION['lenght']-1) ? $_SESSION['pointer']++ : $_SESSION['pointer']=0;
		header("Location: displayData.php");
		break;
	case "prev":
		($_SESSION['pointer'] > 0) ? $_SESSION['pointer']-- : $_SESSION['pointer'] = $_SESSION['lenght']-1;	
		header("Location: displayData.php");
		break;
	case "last":
		$_SESSION['pointer']=$_SESSION['lenght']-1;
		header("Location: displayData.php");
		break;
	default: 
		echo "MESSAGE: Cannot perform the action<br/>";
		break;
	} 
}else if(isset($_POST['edit']))
{
	switch ($_POST['edit'])
	{
	case "first":
		$_SESSION['pointer']=0; 
		loadPage('editData.php');
		break;
	case "next":
		($_SESSION['pointer']<$_SESSION['lenght']-1) ? $_SESSION['pointer']++ : $_SESSION['pointer']=0;
		loadPage('editData.php');
		break;
	case "prev":
		($_SESSION['pointer'] > 0) ? $_SESSION['pointer']-- : $_SESSION['pointer'] = $_SESSION['lenght']-1;
        loadPage('editData.php');
		break;
	case "last":
		$_SESSION['pointer']=$_SESSION['lenght']-1;
		loadPage('editData.php');
		break;
	case "OK": 
	
	if($_SESSION['lenght'] > 0)
		{
		 	fetchData($data,$label,$select, $select2);
		 	$dataOld=$data;
		 	if (validateData($data))
			{
				setData('zdrapki','miasto',$label,$data,$select, $select2);
			}
		}  
		loadPage('editData.php');
		break; 
	default:
		echo "MESSAGE: Cannot perform the action<br/>";
		break;
	}
}else if(isset($_POST['insert']))
{
	switch ($_POST['insert'])
	{
	case "insert":
		fetchData($data,$label,$select, $select2);
		if (validateData($data))
		{
	    insertData($data,$label,'zdrapki','miasto',$select, $select2);
		Alert('Successfully added a new coupon!');
        } 
		loadPage('insertData.php');
		break; 
	default:
		echo "MESSAGE: Cannot perform the action<br/>";
		break;
	}
}else if(isset($_POST['delete']))
{
	switch ($_POST['delete'])
	{
	case "first":
		$_SESSION['pointer']=0;
		header("Location: delData.php");
		break;
	case "next":
		($_SESSION['pointer']<$_SESSION['lenght']-1) ? $_SESSION['pointer']++ : $_SESSION['pointer']=0;
		header("Location: delData.php");
		break;
	case "prev":	
		($_SESSION['pointer'] > 0) ? $_SESSION['pointer']-- : $_SESSION['pointer'] = $_SESSION['lenght']-1;
		header("Location: delData.php");
		break;
	case "last":
		$_SESSION['pointer']=$_SESSION['lenght']-1;
		header("Location: delData.php");
		break;
	case "delete":
		if($_SESSION['lenght'] > 0)
		{
			fetchData($data,$label,$select, $select2);
			deleteData('zdrapki',$label);
		}
		header("Location: delData.php");
		break;
	default:
		echo "MESSAGE: Cannot perform the action<br/>";
		break;
	}
}
?>