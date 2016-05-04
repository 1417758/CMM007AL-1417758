<?php
include("blogHeader.php");
?>
<!--START OF MAIN -->
<main class="grid-container">

    <section id="mainSectionAdd" class="grid-70 tablet-grid-70 mobile-grid-70">


    <form action="<? echo $_SERVER["PHP_SELF"] ?>" method="get">
        <!-- action="showBugs.php" method="get" -->
        <table>
            <tr>
                <td>Entry Title</td>
                <td><input type="text" name="txtName" size="72%" placeholder="Blog Title" required></td>
            </tr>
            <tr>
                <td>Entry Summary</td>
                <td><textarea rows="4" cols="25" name="txtSum" style="width: 445px;"
                              placeholder="Blog Summary" required></textarea></td>
            </tr>
            <tr>
                <td>Category</td>
                <td>
                    <select name="comboCat" required style="width: 445px;">
                        <option value='politics'>Politics</option>
                        <option value='sport'>Sport</option>
                        <option value='technology'>Technology</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Submitted By:</td>
                <td><input type="text" name="txtName" size="72%" placeholder="Author" required></td>
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
include("blogFooter.php");
?>

