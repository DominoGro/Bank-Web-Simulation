<?php
require '../server_connect.inc.php';

function selectQuery($query)
{
	$result = mysqli_query($GLOBALS['mysql2'], $query);
	if(!$result)
	{
		echo "MESSAGE: blad wykonania zapytania1<br/>";
		exit(); 
	}  
   $_SESSION['lenght'] = mysqli_num_rows($result);
   $fieldNum = mysqli_num_fields($result);
   
   if($_SESSION['lenght'] > 0)
   {  
	  if(mysqli_data_seek($result, $_SESSION['pointer']))
	  {
		$row2 = mysqli_fetch_row($result);
	  }
   }
   else
   {
	   for ($i=0;$i<$fieldNum;$i++)
		{
			$row2[$i]="";
		}
   }
   return $row2;   
   mysqli_close($GLOBALS['mysql2']);
}

function modifyQuery($query)
{
	$result = mysqli_query($GLOBALS['mysql2'], $query);
	
	if(!$result)
	{
		echo "MESSAGE: blad wykonania zapytania2<br/>";
		exit(); 
	}
	mysqli_close($GLOBALS['mysql2']);
}

function displayData(&$data=array())
{
	$query="SELECT z.nr, z.id, z.words, m.nazwa, c.value FROM zdrapki z, miasto m, costs c WHERE z.miasto = m.nr AND z.cost = c.id ORDER BY z.nr ASC";
	$data = selectQuery($query);	
}
/*function displayData($table1, $table2, $label=array(), $indexASC, &$data=array())
{  OLD
	$range=count($label);
	$query="SELECT ";
	for ($i=0;$i<$range-1;$i++)
	{
		$query.=$table1.".".$label[$i].",";
		
    }
	$query.=$table2.".".$label[$range-1].", costs.value FROM ".$table1.",".$table2.", costs";
	//$query.=" INNER JOIN costs ON ".$table1.".cost = c.id";
	$query.=" WHERE ".$table1.".".$table2."=".$table2.".".$label[0];
	$query.=" ORDER BY ".$table1.".".$label[$indexASC];
	$data = selectQuery($query);	
}*/


function insertData($data=array(),$label=array(),$table1,$table2,$select,$select2)
{
	$range=count($label); 
	$query="INSERT INTO ".$table1."(nr, id, words, cost, miasto) VALUES(\'".selectNr('zdrapki')."\', \'".$data[0]."\', \'".$data[1]."\', (SELECT id FROM costs WHERE value=\'$select2\'), (SELECT nr FROM $table2 WHERE nazwa=\'$select\'))";
	/*for ($i=0;$i<$range-1;$i++)
	{
		$query.=$label[$i].",";
	}

	$query.=$label[$i].")VALUES(";
	for ($i=0;$i<$range-1;$i++)
	{
		$query.="\'".$data[$i]."\',";
	}
	$query.="(SELECT id FROM costs WHERE value=\'$select2\'),";
	$query.="(SELECT nr FROM $table2 WHERE nazwa=\'$select\'))";*/
	
	$query=stripslashes($query);
	$data=modifyQuery($query);
}


function setData($table1,$table2,$label=array(),$data=array(),$select, $select2)
{
    $range=count($data);
	$query="UPDATE ".$table1." SET ";
   	for ($i=0;$i<$range;$i++)
	{
		$query.=$label[$i]."=\'".$data[$i]."\',";
	}
	$query.="cost=(SELECT id FROM costs WHERE value=\'$select2\'),";
	$query.="$table2= "."(SELECT nr FROM $table2 WHERE nazwa=\'$select\')";
	$query.=" WHERE ".$_SESSION['pkname']."=".$_SESSION['pkvalue'];
	$query=stripslashes($query);
	$data=modifyQuery($query);
}

function deleteData($table,$label)
{
	$query="DELETE FROM ".$table." WHERE ".$_SESSION['pkname']."=".$_SESSION['pkvalue'];
	$_SESSION['pointer']=0;
	$data=modifyQuery($query);
}

function selectData($table)
{
	$query="SELECT nazwa FROM $table ORDER BY nazwa";
    $result = mysqli_query($GLOBALS['mysql2'], $query);
	if(!$result)
	{
		echo "MESSAGE: blad wykonania zapytania<br/>";
		exit();
	}
    $recCount= mysqli_num_rows($result);
    $dict=array();$i=0;
    while ($row = mysqli_fetch_row($result)) 
    {
		$dict[$i]=$row[0];
		$i++;
    }
    return $dict;
}

function selectNr($table)
{
	$query="SELECT nr FROM $table ORDER BY nr DESC";
	$result = mysqli_query($GLOBALS['mysql2'], $query);
	$row = mysqli_fetch_assoc($result);
	if(!$result)
	{
		echo "MESSAGE: blad pobrania numeru<br/>";
		exit();
	}
	return $row['nr'] + 1;
	mysqli_close($GLOBALS['mysql2']);
}

function showTable()
{
	$query="SELECT z.nr, z.id, z.words, m.nazwa, c.value FROM zdrapki AS z INNER JOIN miasto AS m ON z.miasto = m.nr INNER JOIN costs AS c ON z.cost = c.id ORDER BY z.id ASC";	
	$result = mysqli_query($GLOBALS['mysql2'], $query);
	
	echo "<br>
	<input class='form-control' type='text' name='search' id='myInput' placeholder='Search the coupon..'><br>
	<table class='table table-striped table-hover'>
	<thead><tr><th>No.</th><th>ID</th><th>Words</th><th>Coupon Name</th><th>Cost</th></tr></thead>";
	    while ($row = mysqli_fetch_assoc($result))
	    {
			
		   echo "<tr class='myTable'><td>".$row['nr']."</td><td>".$row['id']."</td><td>".$row['words']."</td><td>".$row['nazwa']."</td><td>".$row['value']."</td></tr>";
	    }
	echo "</table>";
	mysqli_close($GLOBALS['mysql2']);
}

function countMoney()
{
	$query="SELECT SUM(c.value) FROM zdrapki z INNER JOIN costs c ON z.cost = c.id";
	$result = mysqli_query($GLOBALS['mysql2'], $query);
	
	$county = mysqli_fetch_row($result);
	return $county[0];
	mysqli_close($GLOBALS['mysql2']);
}

function selectMoney()
{
	$query="SELECT value FROM costs ORDER BY value";
    $result = mysqli_query($GLOBALS['mysql2'], $query);
	if(!$result)
	{
		echo "MESSAGE: blad wykonania zapytania<br/>";
		exit();
	}
    $recCount= mysqli_num_rows($result);
    $dict=array();$i=0;
    while ($row = mysqli_fetch_row($result)) 
    {
		$dict[$i]=$row[0];
		$i++;
    }
    return $dict;
}

function LogOutButton()
{
	?>
	<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="../logout.php" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

	<?php
}

function loadPage($page)
{
	echo "<script>location.href = '$page'</script>";
}

function Alert($text)
{
	echo "<script language='javascript'>alert('$text')</script>";
}

?>