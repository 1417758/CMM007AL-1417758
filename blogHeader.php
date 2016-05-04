<?php
include("DBConnection.php");
include("Functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <!--CSSs link -->
    <link rel="stylesheet" type="text/css" href="assets/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" type="text/css" href="assets/htmlDefault.css">
    <link rel="stylesheet" type="text/css" href="assets/menu.css">
    <link rel="stylesheet" type="text/css" href="assets/blogStyle.css">

</head>
<body>
<!--START OF HEADER -->
<header>
    <section>
        <h2>myBlog</h2>
        <span>
            Because the internet needs to know what I think
        </span>
        <span id="spanCat">here CATEGORY YORU</span>
    </section>

    <ul id="mainNav">
        <li><a href="blog.php">All Blog Items</a></li>
        <li><a href="blog.php?category=work">Work Items</a></li>
        <li><a href="blog.php?category=university">University Items</a></li>
        <li><a href="blog.php?category=family">Family Items</a></li>
        <li><a href="add.php">Insert a Blog Item</a></li>
        <!-- <li><a href="index.php">Home</a></li> -->
    </ul>

</header>
<!--END OF HEADER -->
