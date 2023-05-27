<?php
/* Local Database*/

$servername = "localhost";
$username = "mark_ngugi";
$password = "12345678";
$dbname = "user_db";


// Create connection
@$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	?>
	<script type="text/javascript">
		alert("It seems like you aint connected to the database")
	</script>
	<?php
    die("Connection to the database failed: " . mysqli_connect_error());
}

?> 