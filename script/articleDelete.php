<?php
/**
 * Created by PhpStorm.
 * User: henrymacbook1
 * Date: 22-10-15
 * Time: 20:43
 */

//getHeader("admin | Delete");
session_start();

include_once('include/config.php');

$id = $_GET['id'];

if(@$_GET['action'] = "delete")
{
    $db = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    $query = "DELETE FROM `article` WHERE `article_id` = '$id'";

    mysqli_query($db, $query);


    echo $query;

    echo "article $id is deleted";
    header("location: admin.php");
}

//getFooter();