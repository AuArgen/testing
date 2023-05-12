<?php
	$conn = new mysqli("localhost:3306", "root","Root1234","testing");
	if ($conn -> connect_errno) {
		die("Error !!! ".$conn -> connect_errno);
        $conn -> close();
}
?>