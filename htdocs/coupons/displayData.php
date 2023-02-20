<?php
include_once('libfunc.php');
include_once('GUIfunc.php');
require_once '../server_connect.inc.php';
require_once '../get_logged.inc.php';

if(@($_SESSION['emp_id']==null || $_SESSION['emp_id']=="") && (@($_SESSION['atm']==null ||$_SESSION['atm']=="") || @($_SESSION['pin']==null ||$_SESSION['pin']=="")))
{
die(header('Location:../index.php'));
}

$acc_no=$_SESSION['acc_no'];
$query2="SELECT First_name,Amount, Status FROM CUSTOMERS WHERE Acc_no='$acc_no'";
$query2_data=mysqli_query($mysql1, $query2);
$query2_row = mysqli_fetch_assoc($query2_data);
$first_name = $query2_row['First_name'];
$status = $query2_row['Status'];
 if($status == 'Member')
		$label = 'primary';
	else
		$label = 'danger';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>OTS Transfer Money</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="../css/templatemo_main.css">
  <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/templatemo_script.js"></script>
</head>
</body>
<div id="main-wrapper">
    <div class="navbar navbar-inverse top-bar-gradient" role="navigation">
        <div class="navbar-header">
            <div class="logo hope"><h1>OTS Transfer Money</h1></div>
				<span class="top1-menu-word">Player Name: <?php echo $first_name; ?></span>
				<span class="top2-menu-word">Status: <span class="label label-<?php echo $label;?>"><?php echo $status;?></span></span>  
                <span><a href="javascript:;" class="btn btn-primary top3-menu-word" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Logout</a></span>
        </div>   
    </div>
	
    <div class="template-page-wrapper">
        <div class="navbar-collapse collapse templatemo-sidebar">
            <ul class="templatemo-sidebar-menu">
                <li><a href="../credit_cash.php"><i class="fa fa-credit-card"></i>Credit-Cash</a></li>
                <li><a href="../transfer.php"><i class="fa fa-bank"></i>Transfer</a></li>
                <li><a href="../account_summary.php"><i class="fa fa-book"></i>Account Summary</a></li>
                <li class="sub active "><a href="javascript:;"><i class="fa fa-money" style="font-size: 22px;"></i>Coupons
			        <div class="pull-right"><span class="caret"></span></div></a>
				    <ul class="templatemo-submenu">
                        <li><a href="displayData.php">Display</a></li>
                        <li><a href="editData.php">Edit</a></li>
			            <li><a href="insertData.php">Insert</a></li>
			            <li><a href="delData.php">Delete</a></li>
                    </ul>
				</li>
            </ul>
        </div>
		
        <div class="templatemo-content-wrapper">
            <div class="templatemo-content">
		        <svg viewBox="0 0 1500 100">
                    <symbol id="s-text">
                        <text x="35%" y="75%">Display Coupons</text>
                    </symbol>
                        <use class="text" xlink:href="#s-text"></use>
                        <use class="text" xlink:href="#s-text"></use>
                        <use class="text" xlink:href="#s-text"></use>
                        <use class="text" xlink:href="#s-text"></use>
                        <use class="text" xlink:href="#s-text"></use>
                </svg> 
				
<style>

.letter {
  width: 24px;
  display: inline-block;
  vertical-align: middle;
  position: relative;
  overflow: hidden;
  margin: 0 0;
  font-family: sans-serif;
  font-size: 24px;
  font-weight: 600;
  line-height: 24px;
  text-transform: uppercase;
  
}
.letter:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  word-break: break-all;
  background-color: #1d1f20;
  color: #eee;
}

.letter:nth-child(1):before {
  content: "6835421907";
  margin-top: 0px;
  -webkit-animation-name: letter1;
          animation-name: letter1;
  -webkit-animation-duration: 0s;
          animation-duration: 0s;
  -webkit-animation-delay: 0.99s;
          animation-delay: 0.99s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter1 {
  from {
    margin-top: 0px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter1 {
  from {
    margin-top: 0px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(2):before {
  content: "8731264590";
  margin-top: -48px;
  -webkit-animation-name: letter2;
          animation-name: letter2;
  -webkit-animation-duration: 2.1333333333s;
          animation-duration: 2.1333333333s;
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter2 {
  from {
    margin-top: -48px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter2 {
  from {
    margin-top: -48px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(3):before {
  content: "0245931786";
  margin-top: -120px;
  -webkit-animation-name: letter3;
          animation-name: letter3;
  -webkit-animation-duration: 1.7666666667s;
          animation-duration: 1.7666666667s;
  -webkit-animation-delay: 0.47s;
          animation-delay: 0.47s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter3 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter3 {
  from {
    margin-top: -120px;
  }
  to {
    margin-top: 24px;
  }
}
.letter:nth-child(4):before {
  content: "8057691243";
  margin-top: -24px;
  -webkit-animation-name: letter4;
          animation-name: letter4;
  -webkit-animation-duration: 1.68s;
          animation-duration: 1.68s;
  -webkit-animation-delay: 0.16s;
          animation-delay: 0.16s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

@-webkit-keyframes letter4 {
  from {
    margin-top: -24px;
  }
  to {
    margin-top: 24px;
  }
}

@keyframes letter4 {
  from {
    margin-top: -24px;
  }
  to {
    margin-top: 24px;
  }
}
</style>				
				<div class="wrapper">
				<span class="letter">d</span>
				<span class="letter">u</span>
				<span class="letter">p</span>
				<span class="letter">a</span>
				</div>
<?php 
echo $_SESSION['pointer'];
if (!isset($_SESSION['pointer'])) 
{
	$_SESSION['pointer']=0;
} 
startForm('control.php');
$label=array('nr','ID','words', 'name', 'cost');
$data=array();
displayData($data);
displayForm($label, $data, false);
buttonBarDisplay();
endForm();
showTable();
LogOutButton();
?>
</div>
</div>
</div>
</div>
</body>
</html>