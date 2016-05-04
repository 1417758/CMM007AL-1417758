<?php


//function
function PrintBlog($title, $sum, $cat, $author)
{
    print("Entry Title: " . $title) . "<br>";
    print("Entry Summary: " . $sum) . "<br>";
    print("Entry Category: " . $cat) . "<br>";
    print("Entry Author: " . $author) . "<br>";
    print "<hr>";
}

function addBlogEntry($db, $title, $sum, $cat, $author)
{
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


function getEntrysPrinted($db)
{
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

        PrintBlog($t, $s, $c, $a);
    }
}

