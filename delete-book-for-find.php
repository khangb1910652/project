<?php
$page_title = "Book Management"; 
include "templates/header-manage.php";
?>
<h2>Edit & Delete Book</h2>
<div class='main'>
    <div class='nav-bar'>
        <form class='search-form' action="delete-book-for-find.php" method="POST">
            <input placeholder='Type some books' type="search" name="search_kw" value="<?php empty($_REQUEST['search_kw']) || 
                                                                print $_REQUEST['search_kw'];?>"/>
            <button type="submit" value="Search">
            <br>
        </form>
    </div>
<?php
    if (isset($_REQUEST['search_kw'])) {
        include 'action/find-book-edit-delete.php';
        $paging = search($_REQUEST['search_kw']);
        echo "<div class='temp'></div>";
        echo "</div>";
        page_nav_links($paging, $_REQUEST['search_kw']);
    }
?>
<?php
// require "data/connect-db.php";
// require "action/form.php";
require "action/delete-book-action.php";
require "action/edit-book-action.php";
// echo "<div class='temp'></div>";
// echo "</div>";
// page_nav_links($paging);
?>
<?php
// include "templates/footer-manage.php";
?>