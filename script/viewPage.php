<?php
/**
 * Created by PhpStorm.
 * User: henrymacbook1
 * Date: 27-10-15
 * Time: 21:30
 */

include_once('include/config.php');
include_once('include/functions.php');

getHeader("adminpage");
$id = $_GET['id'];
$db = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
$query = "SELECT * FROM `article` WHERE `article_id` = $id";

$result = mysqli_query($db, $query);

while($row = mysqli_fetch_array($result)) {
    $publication_date = $row['publication_date'];
    $article_title = $row['article_title'];
    $article_summery = $row['article_summery'];
    $article_content = $row['article_content'];

    echo "<table id='adminTable'>
            <tr>
                <td><h1>$article_title</h1></a></td>
            </tr>
            <tr>
                <td style='font-style: italic; '>$article_summery</td>
            </tr>
            <tr>
                <td>$article_content</td>
            </tr>
            <tr>
                <td id='art_date'>$publication_date</td> </tr>

                <tr><td>Back:<a href='index.php'> <img src=\"../image/back.png\"> </a></td></tr>


    </table>";
}

getFooter();