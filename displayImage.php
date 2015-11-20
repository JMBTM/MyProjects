<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include "config.php";
include "classCaller.php";
$users->connect();
				$query = mysql_query("SELECT * FROM screenshot");
				while($sql = mysql_fetch_array($query)){
					echo '<img src="data:image/jpeg;base64,'.base64_encode($sql['Img']).'" height="150" width="250"/><br/>';
}
?>
</body>
</html><div class="img">
			<?php
			$query = mysql_query("SELECT * FROM screenshot");
				while($sql = mysql_fetch_array($query)){
					echo '<img src="data:image/jpeg;base64,'.base64_encode($sql['Img']).'" height="250" width="350" style="margin:5px;"/>';
		}
			?>
		</div>