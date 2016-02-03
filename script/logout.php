<?php

session_start();
session_destroy();

if (isset($_SESSION['username'])) {
    $msg = "you are logged out";
} else {
    $msg = "<h2>Could not log you out</h2>";
}
?>
<html>
<body>
<?php echo $msg; ?><br>
<p><a href="index.php"> click here</a> <- to return to our homepage </p>
</body>
</html>
