<?php

//function
function getCat(){
        //get category";
        if (isset($_GET['category'])) {
            $cat = $_GET['category'];
            echo "current category selected is ".$cat;
          //  return $cat;
        }

}

function PrintBlog2($title, $sum, $cat, $author){
    print ($title) . " by " . ($author) . "<br>";
    print($cat) . "<br>";
    print($sum) . "<br>";
    print "<hr>";
}


function addBlogEntry($db, $title, $sum, $cat, $author){
    //try {
    //*NOTE TEST
    // PrintEntry($title, $sum, $cat, $author);

    // create a SQL query as a string
    $sql_query = "INSERT INTO BlogView (entryTitle, entrySummary, category, submitter) VALUES ('$title', '$sum', '$cat', '$author')";

    echo "something before executing sql";

    // execute the SQL query
    if (mysqli_query($db, $sql_query))
        echo "sql query executed succesfully" . " < br />" . mysqli_affected_rows();
    else
        echo "Error: " . $sql_query . " < br />" . mysqli_error($db);
    //throw new Exception("Error: " . $sql_query . " < br />" . mysqli_error($db));
}


function getEntrysPrinted($db){
    // create a SQL query as a string
    $sql_query = "SELECT * FROM BlogView";
    //echo "something before executing sql";
    // execute the SQL query
    $result = $db->query($sql_query);
    //echo "something after executing sql";
    // iterate over $result object one $row at a time
    // use fetch_array() to return an associative array
    while ($row = $result->fetch_array()) {
        $t = $row['entryTitle'];
        $s = $row['entrySummary'];
        $c = $row['category'];
        $a = $row['submitter'];

        PrintBlog2($t, $s, $c, $a);
    }
}

function getEntrysPrintedByCat($db, $cat){
    // create a SQL query as a string
    $sql_query = "SELECT * FROM BlogView WHERE category = '$cat'";
    //echo "something before executing sql";
    // execute the SQL query
    $result = $db->query($sql_query);
    //echo "something after executing sql";
    // iterate over $result object one $row at a time
    // use fetch_array() to return an associative array
    while ($row = $result->fetch_array()) {
        $t = $row['entryTitle'];
        $s = $row['entrySummary'];
        $c = $row['category'];
        $a = $row['submitter'];

        PrintBlog2($t, $s, $c, $a);
    }
}

function addLogic($db){
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        //echo "SAME PAGE RE-ENTRY";
        //do nothing
        //TEST - loop through the superglobal GET array
        /*foreach ($_GET as $key => $value) {
        PrintKeyAndValue($key, $value);
        }*/
    } //otherwise print Post stuff (data entered to form)
    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // loop through the superglobal POST array
        /*foreach ($_POST as $key => $value){
        PrintKeyAndValue($key, $value);
        }*/
        //get data entered by user on insert bug page";
        $title = $_POST['txtTitle'];
        $summary = $_POST['txtSum'];
        $category = $_POST['comboCat'];
        $author = $_POST['txtName'];
        //ADD DATA TO DB
        addBlogEntry($db, $title, $summary, $category, $author);

        //test -PrintBlog($title, $summary, $category, $author);
        //redirects to showBugs page
        header('Location: blog.php');

    } else
        //redirects to index page
        header('Location: index.php');
}

