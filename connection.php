<?php 

$username = 'root';
$password = '';
$server = 'localhost';
$database = 'bbms';
	
$con = mysqli_connect($server,$username,$password,$database);

if(!$con){
?>
	<script>
		alert("Connection faild");
	</script>
<?php
}?>
