<?php
include "config.php";
//##############INSERT ENGINE###################################
@$a;
function insert($b){
global $a,$type,$con;
$c=$b-1;
$p="INSERT INTO tbl_".$type." (";
for($i=0;$i<$b;$i++){	
$p=$p."`".$a[$i][0]."`";
if($i==$c){}else{$p=$p.",";}
}
$p=$p.") VALUES (";
for($i=0;$i<$b;$i++){	
$p=$p."'".$a[$i][1]."'";
if($i==$c){}else{$p=$p.",";}
}
$sql= $p.");";
$qry=mysqli_query($con,$sql);
		
		return $query;	
}
//##############DELETE ENGINE###################################
function delete(){
  global $con,$error,$select,$type,$info;
	$id1=$_GET['del'];
	$sql="delete from `tbl_$type` WHERE id='$id1'";
	$query=mysqli_query($con,$sql);
	return $query;
}
  ?>