<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BIngo</title>
</head>
<body>
<?php 
session_start();
if($_POST['nuevoNumero']){
	for ($num=1; $num <=75 ; $num++) { 
		$total[]=$num;
	}
	$numero_elejido='<h2>'.array_rand($total,1).'</h2>';
	$_SESSION['numeros_ele'][]=$numero_elejido;
}	
for ($i=1; $i <=15 ; $i++) { 
	$bn[$i]=$i;
}
for ($a=16; $a <=30 ; $a++) { 
	$in[$a]=$a;
}
for ($c=31; $c <=45 ; $c++) { 
	$nn[$c]=$c;
}
for ($d=46; $d <=60 ; $d++) { 
	$gn[$d]=$d;
}
for ($e=61; $e <=75 ; $e++) { 
	$on[$e]=$e;
}

$bingo=array('1'=>$bn,'2'=>$in,'3'=>$nn,'4'=>$gn,'5'=>$on);
?>

<style type="text/css" media="screen">
	.cartilla{display: flex;flex-wrap: wrap;margin-bottom: 20px;border: 1px solid #111;}
	.cartilla div{flex: 0 0 20%;}
</style>
<?php 
if(!empty($numero_elejido)){
echo $numero_elejido; 
}
 ?>
<div class="botones">
	<form method="post" action="index.php">
		<input type="submit" id="nuevoNumero" name="nuevoNumero" value="NUEVO NUMERO">
	</form>
</div>

<?php for ($i=1; $i <=3 ; $i++) { ?>
		<div class="cartilla">
			<?php 
			for ($ia=1; $ia <=5 ; $ia++) { 
				for ($lis=1; $lis <=5 ; $lis++) { 
					if($lis==1){			
						$val1=array_rand($bn,1);			
						echo '<div>'. $val1.'</div>';
						unset($bn[$val1]);
					} else if($lis==2){
						$val1=array_rand($in,1);
						echo '<div>'. $val1.'</div>';	
						unset($in[$val1]);
					}	
					else if($lis==3){
						$val1=array_rand($nn,1);
						if($ia==3){
							echo '<div></div>';	
						} else{
							echo '<div>'. $val1.'</div>';	
						}
						
						unset($nn[$val1]);
					}	
					else if($lis==4){
						$val1=array_rand($gn,1);
						echo '<div>'. $val1.'</div>';	
						unset($gn[$val1]);
					}	
					else if($lis==5){
						$val1=array_rand($on,1);
						echo '<div>'. $val1.'</div>';	
						unset($on[$val1]);
					}	
				}
			}
			 ?>
		</div>
	
<?php } ?>



</body>
</html>