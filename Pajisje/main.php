<!DOCTYPE html>
<?php

$viti1= array(
	'hekur'=>10,
'frigorifere'=>25,
'tharese'=>45,
'sobe'=>12
);   // optional.
arsort($viti1);
$viti2= array(
	'hekur'=>101,
'frigorifere'=>125,
'tharese'=>415,
'sobe'=>112
);
  // optional.
arsort($viti2);?>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title></title>
<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck")
  var checkBox1=document.getElementById("myCheck1");
  var text = document.getElementById("text");

  if(checkBox.checked == true && checkBox1.checked==true ){
  div = document.getElementById('a');
   div.style.display = "block";
   div = document.getElementById('b');
    div.style.display = "block";
  div = document.getElementById('c');
    div.style.display = "block";

  } 

  else if(checkBox1.checked==true){
   div = document.getElementById('b');
    div.style.display = "block";

  }
else if (checkBox.checked == true){
     div = document.getElementById('a');
    div.style.display = "block";


}  	else {
     alert("Zgjidhni te pakten nje vit");
  }
}

function pajisjaMeShitur(){



}

</script>
</head>
<body>  <div id="form1">
	
   
  <form >
    	<h2>Afishoni te dhenat per pajisjet elektronike duke perzgjedhur si me poshte:</h2>
    	
     
        <input type="checkbox" name="my_checkbox" id="myCheck" />
        <span> Viti 1  </span>
     
   
     
        <input type="checkbox" id="myCheck1" />
        <span> Viti 2</span>
   
   
    	<p>*Zgjidhni nje ose me shume vite per te afishuar te dhenat</p>

    	<input type="button" name="Kerko" value="Kerko" onclick="myFunction()">


	<div id="b">
		<table>
		<p>Viti 2</p>
		<?php $shuma=0;
foreach ($viti2 as $x=>$y):
		 
		 $max=0;
		 if ($y>$max){
		 $max=$y;
		 $shuma=$shuma+$y;
		 $mes=$shuma/sizeof($viti2);
		}?>
		 <tr>
		 	<td><?php echo ($x); ?></td>

		 	<td><?php echo ($y); ?></td>
		 	
		 </tr>
		<?php endforeach; ?>
		
		<td>PAJISJA ME E SHITUR</td>
	
		<td><?php echo (key($viti2));  ?></td>
<tr>
		<td>MESATARJA</td>
	
		<td><?php echo ($mes);  ?></td></tr>
		<tr>
		<td>SHUMA</td>
	
		<td><?php echo ($shuma);  ?></td></tr>
		<td>PAJISJA ME PAK E SHITUR</td>
	
		<td><?php  echo ($index = array_search(min($viti2), $viti2));  ?></td>
	</table>
	</div>
	<div id="a">
<table>
		<p>Viti 1</p>
		<?php $shuma1=0;

foreach ($viti1 as $x=>$y):
		 		 $max1=0;
		 if ($y>$max1){
		 $max1=$y;
		 $shuma1=$shuma1+$y;
		 $mes1=$shuma1/sizeof($viti1);
		}?>
		 <tr>
		 	<td><?php echo ($x); ?></td>

		 	<td><?php echo ($y); ?></td>
		 	
		 </tr>
		<?php endforeach; ?>
		
		<td>PAJISJA ME E SHITUR</td>
	
		<td><?php echo (key($viti1));  ?></td>
<tr>
		<td>MESATARJA</td>
	
		<td><?php echo ($mes1);  ?></td></tr>
		<tr>
		<td>SHUMA</td>
	
		<td><?php echo ($shuma1);  ?></td></tr>
		<td>PAJISJA ME PAK E SHITUR</td>
	
		<td><?php  echo ($index = array_search(min($viti1), $viti1));  ?></td></tr>
		
	
	</table>
</div>
<div id="c">
	<table>	<tr><td>
			<?php if ($shuma>$shuma1){
			echo "Me shume shitje viti i dyte : ".  $shuma;
}
else {echo "Me shume shitje viti i pare : ".$shuma1;}
		  ?></td></tr></table>
</div>
    </form>
</div>




</body>
</html>