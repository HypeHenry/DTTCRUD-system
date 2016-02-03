<?php
/**
 * Created by PhpStorm.
 * User: henrymacbook1
 * Date: 24-10-15
 * Time: 01:20
 */

include_once("include/config.php");
include_once('include/functions.php');
getHeader($description = "Home | DTT Multimedia");

$db = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
$query = "SELECT * FROM `article` ORDER BY `publication_date` DESC LIMIT 2";

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

echo '<a href="'.$_SERVER['PHP_SELF'].'?function=1"> Article Archive</a>';

if(isset($_GET['function']))
{

    articleArchive();
}


getFooter();