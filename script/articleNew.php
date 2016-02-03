<?php
/**
 * Created by PhpStorm.
 * User: henrymacbook1
 * Date: 22-10-15
 * Time: 17:40
 */

session_start();

    include_once("include/config.php");
    include_once('include/functions.php');

    getHeader($description = "new article");
    getAdmin("New Article", "DTT Multimedia");
if(@$_GET['action'] == "save") {
    $article_title = $_POST['article_title'];
    $article_summery = $_POST['article_summery'];
    $article_content = $_POST['article_content'];
    $publication_date = $_POST['publication_date'];

    $db = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    $query =     "INSERT INTO `article`(`article_id`, `article_title`, `article_summery`, `article_content`, `publication_date`)
                  VALUES ('', '$article_title', '$article_summery', '$article_content','$publication_date')";


//        echo $query;

    mysqli_query($db, $query);

    echo "article: $article_title is added ";
    header("location: admin.php");
}
else {
    ?>
    <article id="tableArticle">
    <form name="articleNew" action="<?php echo $_SERVER['PHP_SELF'];?>?action=save" method="post">
            <table>
                <tr><td>Article Title</td><td><input type="text" name="article_title"  placeholder="Name of the article" size="90"></tr>
                <tr><td>Article Summery</td><td><textarea name="article_summery"  placeholder="nieuw artikel" cols="90" rows="4"></textarea></td></tr>
                <tr><td>Article Content</td><td><textarea name="article_content" placeholder="nieuw artikel" cols="90" rows="20"></textarea> </td></tr>
                <tr><td>Publication Date</td><td><input type="date" name="publication_date" placeholder="<?php echo date('Y-m-d'); ?>" size="90"></td></tr>


            <tr>
                <td><input type="submit" class="button" value="Save Changes"></td><td><input type="reset" class="button" name="cancel"></td>
            </tr>
            </table>
    </form>
    </article>
    <?php
}
getFooter();
    ?>