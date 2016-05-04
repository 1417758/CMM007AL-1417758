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


        <form action="<? echo $_SERVER["PHP_SELF"] ?>" method="get">
        <!-- action="showBugs.php" method="get" -->
        <table>
            <tr>
                <td>Bug Name</td>
                <td><input type="text" name="txtName" size="72%" placeholder="Bug Name" required></td>
            </tr>
            <tr>
                <td>Bug Summary</td>
                <td><textarea rows="4" cols="25" name="txtSum" style="width: 445px;"
                              placeholder="Bug Category" required></textarea></td>
            </tr>
            <tr>
                <td>Bug Category</td>
                <td>
                    <select name="txtCat" required style="width: 445px;">
                        <option value='Android'>Android</option>
                        <option value='iOS'>iOS</option>
                        <option value='Windows'>Windows</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit" style="float: right;"></td>
            </tr>
        </table>
        </form>


        <?
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            //do nothing
            // loop through the superglobal GET array
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
            $name = $_POST['txtName'];
            $summary = $_POST['txtSum'];
            $category = $_POST['txtCat'];
            //ADD DATA TO DB
            addBug($db1, $name, $summary, $category);
            //redirects to showBugs page
            header('Location: showBugs.php');

        } else
            //redirects to index page
            header('Location: Index.php');


        ?>

    </section>

</main>
<!--END OF MAIN -->
<?php
include("rguFooter.php");
?>

