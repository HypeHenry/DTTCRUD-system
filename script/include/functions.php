<?php
/**
 * Created by PhpStorm.
 * User: henrymacbook1
 * Date: 23-10-15
 * Time: 18:20
 */

include_once("config.php");


function getHeader($description, $title = "DTT Multimedia")
{
    $header = "<!DOCTYPE html>
    <html lang=\"en\">
        <head>/Applications/MAMP/htdocs/DTTMedia 2/script/index.php
            <meta name=\"description\" content=\"$description\">
            <title>$title</title>
            <link rel=\"stylesheet\" href=\"./css/style.css\">
        </head>
        <body>
            <div id=\"content\">
                <img src=\"../image/logo.jpg\">
                <hr>
        ";

    echo $header;
}
function getAdmin($description)
{
    $getAdmin = "
                <h2>Widget News Admin</h2>
                <p>You are logged in as admin.<a href=\"logout.php\">log out</a></p>
                <hr>
                <h1>$description</h1>

                ";

    echo $getAdmin;
}

function getCount(){
    $db = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    $query = "SELECT COUNT(1) FROM `article`";

    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);

    $total = $row[0];
    echo "<p> $total article in total.</p>";
}

function addArticle()
{
    echo "<a href=\"articleNew.php\">add new article</a>";
}

function articleArchive()
{
    $db = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    $query = "SELECT * FROM `article` WHERE `article_id` > '3' ORDER BY `publication_date` DESC";

    $result = mysqli_query($db, $query);

    while($row = mysqli_fetch_array($result))
    {
        $id = $row['article_id'];
        $publication_date = $row['publication_date'];
        $article_title = $row['article_title'];
        $article_summery = $row['article_summery'];

        echo "<table id='adminTable'>
            <tr>
                <td id='art_date'>$publication_date</td>
                <td style=' margin-left: 20px; float: left;'><a href='viewPage.php?id=$id'><h2>$article_title</h2></a></td>
            </tr>
            <tr>
                <td>$article_summery</td>
            </tr>
    </table>";
    }

}
function getFooter()
{
    $year = date("Y");
    $footer = "

        <footer>
        <hr>
        <p> DTT Multimedia © $year</p> <a href='login.php'> Site Admin</a>
        </footer>
        </div>
        </body>
    </html>";

    echo $footer;
}
