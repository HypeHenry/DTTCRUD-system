<?php
/**
 * Created by PhpStorm.
 * User: henrymacbook1
 * Date: 22-10-15
 * Time: 22:22
 */
session_start();

include_once('include/config.php');
include_once('include/functions.php');

getHeader("adminpage", "DTT Multimedia");
getAdmin();
$db = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
$query = "SELECT * FROM `article`";

$result = mysqli_query($db, $query);

echo "
     <div id='adminTable'>
     <table>
        <tr>
            <th>Publication Date</th>
            <th>Article</th>
            <th>edit</th>
            <th>Delete</th>
        </tr>
        <br>";

while ($rij = mysqli_fetch_array($result))
{
    $id =                   $rij['article_id'];
    $publication_date =     $rij['publication_date'];
    $article_title =        $rij['article_title'];

    echo"<tr>
            <td>$publication_date</td>
            <td>$article_title</td>
            <td><a href=\"articleEdit.php?&id=$id\"><img src=\"../image/edit.jpg\"></a></td>
            <td><a href=\"articleDelete.php?action=delete&id=$id\"><img src=\"../image/delete.jpg\"></a></td>
        </tr>";
}

echo "
</div>
</table>";

getCount();
addArticle();
getFooter();

?>