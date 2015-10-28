<!doctype html>
<html>

<form action="" method="post">
	
	<input type="datetime-local" name="date" >
	<input type="submit">
	</form>
	
		<br />
	
	<?php
		echo $deet = $_POST['date'];
		echo '<br />';
		echo '<br />';
		$date = date_create();
		echo date_format($date, 'Y-m-d H:i:s') . "\n";
		echo '<br />';
		date_timestamp_set($date, 1171502725);
		echo date_format($date, 'U = Y-m-d H:i:s') . "\n";
		echo '<br />';
		echo '<br />';
		echo '<br />';
		$deet = date_create();
		echo date_format($deet, 'Y-m-d H:i:s') . "\n";
		echo '<br />';
		date_timestamp_set($deet, 1171502725);
		echo date_format($deet, 'U = Y-m-d H:i:s') . "\n";
		echo '<br />';
		echo '<br />';
		echo '<br />';
		echo '<hr />';
		$time = new DateTime;
		echo $time->format(DateTime::ATOM);
		
	?>
	
	
	</html>