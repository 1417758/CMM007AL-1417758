<?php
include("blogHeader.php");
?>
<!--START OF MAIN -->
<main class="grid-container">

    <section id="mainSectionAdd" class="grid-95 tablet-grid-95 mobile-grid-95">
        <form action="<? echo $_SERVER["PHP_SELF"] ?>" method="POST">
            <!-- action="showBugs.php" method="get" -->
            <table>
                <tr>
                    <td>Entry Title</td>
                    <td><input type="text" name="txtTitle" size="72%" placeholder="Blog Title" required></td>
                </tr>
                <tr>
                    <td>Entry Summary</td>
                    <td><textarea rows="4" cols="25" name="txtSum" style="width: 445px;"
                                  placeholder="Blog Summary" required></textarea></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>
                        <select name="comboCat" required style="width: 100%;">
                            <option value='Work'>Work</option>
                            <option value='University'>University</option>
                            <option value='Family'>Family</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Submitted By:</td>
                    <td><input type="text" name="txtName" size="72%" placeholder="Author"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Submit" style="float: right;"></td>
                </tr>
            </table>
        </form>

        <?
            //invoke page get and post logic
            addLogic($db1);
        ?>
    </section>

</main>
<!--END OF MAIN -->
<?php
include("blogFooter.php");
?>

