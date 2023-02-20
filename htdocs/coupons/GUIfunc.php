<?php
function selectOption($option=array(),$selected)
{
	$range=count($option);
	echo "<select name='name' size='1' style='text-align: center; height: 30px; width: 120%; font-size: 15px;'>";
	for ($i=0;$i<$range;$i++)
	{
		if($selected<>$option[$i]){echo "<option> $option[$i]";}
		else{echo "<option selected='selected'>$option[$i]";}
	}
	echo "</select></div>";
}

function selectOption2($option=array(), $selected)
{
	$range=count($option);
	echo "<select name='cost' size='1' style='text-align: center; height: 30px; width: 120%; font-size: 15px;'>";
	for ($i=0;$i<$range;$i++)
	{
		if($selected<>$option[$i]){echo "<option> $option[$i]";}
		else{echo "<option selected='selected'>$option[$i]";}
	}
	echo "</select></div>";
}

function startForm($akcja)
{
	echo "<form method='post' action='$akcja'>";
}

function endForm()
{
	echo "</form><hr>";
	echo "<div class='btn btn-primary-new disabled btn-lg'>Total money spent for coupons: ".countMoney()." zl</div><br>";
}

function displayForm($label=array(),$data=array(),$edit)
{
	$range=count($label);
	$lista=array();
	$lista=selectData('miasto');
	$lista2=array();
	$lista2=selectMoney();
	
	echo "<br><div class='input-group' style='margin-left: 38%; width: 20%;'><div class='input-group-addon' style='width: 30%; overflow: hidden;'>$label[0]</div>";
	echo "<input type='text' class='update-data-no' name='dane[]' value='$data[0]' disabled='disabled' style='font-size: 15px; text-align: center; width: 120%; background-color: yellow;'/></div>"; 

	for ($i=1;$i<$range;$i++)
	{
		echo "<div class='input-group' style='margin-left: 38%; width: 20%;'><label class='input-group-addon' style='width: 30%; overflow: hidden;'>$label[$i]</label>";
		if (!$edit)  
		{
			echo "<input type='text' class='update-data-rest' name='dane[]' value='$data[$i]' disabled='disabled' style='font-size: 15px; text-align: center; width: 120%; background-color: yellow;'/></div>";
		}
		elseif($i == 4) 
		{
			selectOption($lista,$data[$range-1]);		
		} 
        elseif($i == 3) 
		{
			selectOption2($lista2,$data[$range-1]);		
		}
		else{		
			echo "<input type='text' class='update-data-rest' name='dane[]' value='$data[$i]' style='font-size: 15px; text-align: center; width: 120%;' required/></div>";
			} 	
		echo "<input type='hidden' name='etykieta[]'value='$label[$i]'>";		
	}
	$_SESSION['pkname']=$label[0];
	$_SESSION['pkvalue']=$data[0];
	echo "<br/><br/>";
}

function fetchData(&$data=array(),&$label=array(),&$select, &$select2)	
{
	if (isset( $_POST['dane']))
	{
		foreach($_POST['dane'] as $numer => $wartosc){$data[$numer]=$wartosc;} // Pobieranie danych
		foreach($_POST['etykieta'] as $numer => $wartosc) {$label[$numer]=$wartosc;}// Pobieranie etykiet
	}
	if (isset($_POST['name'])){$select= $_POST['name'];} // pobieranie wartości z pola wyboru typu select.
	if (isset($_POST['cost'])){$select2= $_POST['cost'];}
}


function fetchDataTransfer(&$data=array(),&$label=array())	
{
	if (isset( $_POST['dane']))
	{
		foreach($_POST['dane'] as $numer => $wartosc){$data[$numer]=$wartosc;} // Pobieranie danych
		foreach($_POST['etykieta'] as $numer => $wartosc) {$label[$numer]=$wartosc;}// Pobieranie etykiet
	}
}

function ctype($atribute, $charSet)
{
	if(strlen($atribute)==0)
	{	
		return false;
	} // jeśli pole nie wypełnione zwraca false
	for($i = 0; $i < strlen($atribute); $i++)
	{
		if(strpos($charSet, $atribute{$i}) === FALSE){return false;}
		// gdy występuje znak spoza zbioru zwraca false
	} return true;	
}
function validateData(&$data=array())
{
	$charSet='aąbcćdeęfghijklłmnńoóprsśtuwxyzżźAABCĆDEĘFGHIJKLŁMNOÓPRSŚTUWXYZŻŹ1234567890.';
	$w=count($data);
	for($i=0;$i<$w;$i++)
	{
		$atribute=$data[$i];
		$atribute=str_replace(' ','',$atribute); // usunięcie spacji z atrybutu
		$atribute=ucfirst(strtolower($atribute)); // Pierwsza litera duża reszta małe
		if (ctype($atribute,$charSet)){$data[$i]=$atribute;} //sprawdzenie czy znaki należą do zbioru $charSet
		else return false; // napotkano znak z poza zbioru
	}return true; // 
} // end function validateData()

function buttonBarDisplay()
{
	?>
	<div class="btn-group" style="margin-left: 36%;">
    <input type="submit" class="btn btn-success-new btn-lg" name="display" value="first">
	<input type="submit" class="btn btn-secondary-new btn-lg" name="display" value="next">
	<input type="submit" class="btn btn-secondary-new btn-lg" name="display" value="prev">
	<input type="submit" class="btn btn-danger-new btn-lg" name="display" value="last"> 
	</div>
	<?php
}

function buttonBarEdit()
{
	?>
	<div class="btn-group" style="margin-left: 35%;">
	<input type="submit" class="btn btn-success-new btn-lg" name="edit" value="first">
	<input type="submit" class="btn btn-secondary-new btn-lg" name="edit" value="next">
	<input type="submit" class="btn btn-secondary-new btn-lg" name="edit" value="prev">
	<input type="submit" class="btn btn-danger-new btn-lg" name="edit" value="last">
	<input type="submit" class="btn btn-primary-new btn-lg" name="edit" value="OK">
	</div>
	<?php
}

function buttonBarDel()
{
	?>
	<div class="btn-group" style="margin-left: 32%;">
	<input type="submit" class="btn btn-success-new btn-lg" name="delete" value="first">
	<input type="submit" class="btn btn-secondary-new btn-lg" name="delete" value="next">
	<input type="submit" class="btn btn-secondary-new btn-lg" name="delete" value="prev">
    <input type="submit" class="btn btn-secondary-new btn-lg" name="delete" value="last">	
	<input type="submit" class="btn btn-danger-new btn-lg" name="delete" value="delete">
	</div>
	<?php
}

function buttonBarInsert()
{
	?>
	<div class="btn-group" style="margin-left: 46%;">
	<input type="submit" class="btn btn-success-new btn-lg" name="insert" value="insert">
	</div>
	<?php
}
?>