<?php
include("blogHeader.php");
?>
<!--START OF MAIN -->
<main class="grid-container">


    <section id="mainSectionBlog" class="grid-90 tablet-grid-90 mobile-grid-90">

        <?php
        //get data entered by user on insert bug page";
        /*   $a = $_GET['txtName'];
           $b = $_GET['txtSum'];
           $c = $_GET['txtCat'];

        /*   //add data from addBugs.php page
           if (isset($_GET['txtName'])) {
               //ADD DATA TO DB
               addBug($db1, $a, $b, $c);
           }
   */
        //display all bugs
        getEntrysPrinted($db1);

        ?>
    </section>

</main>
<!--END OF MAIN -->
<?php
include("blogFooter.php");
?>

