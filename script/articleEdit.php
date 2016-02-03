<?php
/**
 * Created by PhpStorm.
 * User: henrymacbook1
 * Date: 22-10-15
 * Time: 18:41
 */

session_start();

include_once("include/config.php");
include_once('include/functions.php');
getHeader($description = "Edit article");
getAdmin("Edit Article");

$id = $_GET['id'];

if(@$_GET['action'] =="save")
{
    $article_title = $_POST['article_title'];
    $article_summery = $_POST['article_summery'];
    $article_content = $_POST['article_content'];
    $publication_date = $_POST['publication_date'];

    $db = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    $query = "UPDATE `article` SET `article_title`='$article_title',`article_summery`='$article_summery',`article_content`='$article_content',`publication_date`='$publication_date' WHERE `article_id`='$id'";

    mysqli_query($db, $query);

    echo "article: $article_title is updated in the database";
    header("location: admin.php");

    exit ();
}
else {
    $db = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    $query = "SELECT * FROM `article` WHERE `article_id` = '$id'";

    $result = mysqli_query($db, $query);

    while ($rij = mysqli_fetch_array($result))
    {
        $id = $rij['article_id'];
        $article_title = $rij['article_title'];
        $article_summery = $rij['article_summery'];
        $article_content = $rij['article_content'];
        $publication_date = $rij['publication_date'];
    }
}
?>
<article id="tableArticle">
    <form name="articleNew" id="#admin_table" action="<?php echo $_SERVER['PHP_SELF'];?>?action=save&id=<?php echo $id; ?>" method="post">
        <table>
            <tr><td>Article Title</td><td><input type="text" name="article_title"  value="<?php echo $article_title; ?>" size="90"></tr>
            <tr><td>Article Summery</td><td><textarea name="article_summery" cols="90" rows="4"><?php echo $article_summery; ?></textarea></td></tr>
            <tr><td>Article Content</td><td><textarea name="article_content" cols="90" rows="20"><?php echo $article_content; ?> </textarea> </td></tr>
            <tr><td>Publication Date</td><td><input type="date" name="publication_date" value="<?php echo $publication_date; ?>" size="90"></td></tr>


            <tr>
                <td><input type="submit" class="button"  value="Save Changes"></td><td><input type="reset" class="button" name="Cancel"></td>
            </tr>
        </table>
    </form>
</article>

<?php


echo "<a href=\"articleDelete.php?action=delete&id=$id\"></a>";

getFooter();

?>