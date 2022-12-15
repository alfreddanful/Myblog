<?php
require 'config/database.php';

if (isset($_GET['id'])){
   $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

   //FOR LATER
   //update category_id of posts that belongs to this category to id of uncategorized category


     // delete category from database
     $delete_user_query = " DELETE FROM categories WHERE id=$id";
     $delete_user_result = mysqli_query($connection, $delete_user_query);
     if(mysqli_errno($connection)){
        $_SESSION['delete-cstegory'] = "Couldn't delete $title category.";
     } else {
        $_SESSION['delete-category-success'] = "$title deleted successfully.";
    }
}
header('location: '. ROOT_URL . 'admin/manage-category.php');
die();