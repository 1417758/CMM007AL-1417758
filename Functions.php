<?php

static $count = 4;

//function
function PrintBug($name, $cat, $sum)
{
    print("Bug Name: " . $name) . "<br>";
    print("Bug Category: " . $cat) . "<br>";
    print("Bug Summary: " . $sum) . "<br>";
    print "<hr>";
}

function addBug($db, $name, $sum, $cat)
{
    //try {
        //*NOTE TEST
        // PrintBug($name, $sum, $cat);
        //$count = $GLOBALS['count'];//print "global variable count is at: " . $count;// print "<hr>";

        // create a SQL query as a string
        $sql_query = "INSERT INTO Bugs (bugName, bugSummary, bugCategory) VALUES ('$name', '$sum', '$cat')";
        echo "something before executing sql";

        // execute the SQL query
        if (mysqli_query($db, $sql_query))
            echo "sql query executed succesfully" . "<br/>" . mysqli_affected_rows();
        else
            echo "Error: " . $sql_query . "<br/>" . mysqli_error($db);
            //throw new Exception("Error: " . $sql_query . "<br/>" . mysqli_error($db));

        //increment counter
        //$GLOBALS['count']++;
        // print $GLOBALS['count'];
   /* } catch (Exception $e) {
        throw new Exception("Value must be 1 or below");
        echo $e;
        echo "Error: " . $sql_query . "<br/>" . mysqli_error($db);
    }*/
}


function getBugsPrinted($db)
{
    // create a SQL query as a string
    $sql_query = "SELECT * FROM Bugs";
    // execute the SQL query
    $result = $db->query($sql_query);

    // iterate over $result object one $row at a time
    // use fetch_array() to return an associative array
    while ($row = $result->fetch_array()) {
        $a = $row['bugName'];
        $b = $row['bugSummary'];
        $c = $row['bugCategory'];

        // echo "<p>{$a}</p>";
        PrintBug($a, $b, $c);
    }
}

