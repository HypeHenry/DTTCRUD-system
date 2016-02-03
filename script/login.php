<?php
session_start();
include_once ('functions.php');


if(isset($_POST['username'])){

    include_once('include/config.php');
    $dbCon = mysqli_connect(HOST, USER, PASSWORD, DATABASE);


    $usname = strip_tags($_POST["username"]);
    $paswd = strip_tags($_POST["password"]);

    $usname = mysqli_real_escape_string($dbCon, $usname);
    $paswd = mysqli_real_escape_string($dbCon, $paswd);

    $sql = "SELECT id, username, password FROM members WHERE username = '$usname' AND activated = '1' LIMIT 1";
    $query = mysqli_query($dbCon, $sql);
    $row = mysqli_fetch_array($query);
    $uid = $row[0];
    $dbUsname = $row[1];
    $dbPassword = $row[2];

    if ($usname == $dbUsname && password_verify($paswd, $dbPassword)) {
        $_SESSION['username'] = $usname;
        $_SESSION['id'] = $uid;

        header("location: admin.php");
    } else {
        $message = "<h2>username or password incorrect. try again</h2>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/logcss.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <article id="content">
            <img src="../image/logo.jpg">
            <hr>
            <div class="wrapper">
                <h1>Login</h1>
                <form id="form" action="login.php" method="post" enctype="multipart/form-data">
                    <table id="login">
                    <tr> <td> <?php echo $message; ?> </td></tr>
                        <tr><td>Username: <input type="text" name="username"> <br /></td></tr>
                        <tr><td>Password: <input type="password" name="password"> <br /></td></tr>

                    <tr>
                        <td><input type="submit" class="button"  value="Login" name="Submit"></td>
                    </tr>
                    </table>
                </form>
            </div>
            <footer>
                <hr>
                <p> DTT Multimedia © 2015 </p> <a href='login.php'> Site Admin</a>
            </footer>
        </article>
    </body>
</html>
