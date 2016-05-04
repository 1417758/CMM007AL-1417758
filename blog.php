<?php
include("bugHeader.php");
?>
<!--START OF MAIN -->
<main class="grid-container">
    <aside id="asideLeft" class="grid-30 tablet-grid-30 mobile-grid-30">
        <?php
        include("bugNavig.php");
        ?>
    </aside>

    <section id="mainSection" class="grid-60 tablet-grid-60 mobile-grid-60">

        <?php
        //get data entered by user on insert bug page";
        $a = $_GET['txtName'];
        $b = $_GET['txtSum'];
        $c = $_GET['txtCat'];

        //add data from addBugs.php page
        if (isset($_GET['txtName'])) {
            //ADD DATA TO DB
            addBug($db1, $a, $b, $c);
        }

        //display all bugs
        getBugsPrinted($db1);

        ?>
    </section>

</main>
<!--END OF MAIN -->
<?php
include("rguFooter.php");
?>

