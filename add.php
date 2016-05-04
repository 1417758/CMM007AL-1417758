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
                            <select name="comboCat" required style="width: 445px;">
                                <option value='Work'>Work</option>
                                <option value='University'>University</option>
                                <option value='Family'>Family</option>
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
            addBlogEntry($db1, $title, $summary, $category, $author);

            //test -PrintBlog($title, $summary, $category, $author);
            //redirects to showBugs page
            header('Location: blog.php');

        } else
            //redirects to index page
            header('Location: index.php');
        ?>
    </section>

</main>
<!--END OF MAIN -->
<?php
include("blogFooter.php");
?>

