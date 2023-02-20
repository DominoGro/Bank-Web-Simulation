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
                        <text x="35%" y="75%">Delete Coupons</text>
                    </symbol>
                        <use class="text" xlink:href="#s-text"></use>
                        <use class="text" xlink:href="#s-text"></use>
                        <use class="text" xlink:href="#s-text"></use>
                        <use class="text" xlink:href="#s-text"></use>
                        <use class="text" xlink:href="#s-text"></use>
                </svg> 

<?php
$label=array('nr','ID','words', 'name', 'cost');
$data=array();
displayData($data);
startForm('control.php');
displayForm($label, $data, false);
buttonBarDel();
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