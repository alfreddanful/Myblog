<?php
require 'config/database.php';

// get updated form data
if (isset($_POST['submit'])) {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

//check for valid input
    if (!$title) {
        $_SESSION['edit-category'] = "Please enter Title";
    } elseif (!$description) {
        $_SESSION['edit-categoty'] = "Please enter description";
    } else {
        //update user
        $query = "UPDATE categories SET title='$title', description='$description' WHERE id=$id LIMIT 1";
        $result = mysqli_query($connection, $query);

        if (mysqli_errno($connection)) {
            $_SESSION['edit-category'] = "Failed to update category.";
        } else {
            $_SESSION['edit-category-success'] = "User $title updated successfully.";
        }
    }
}
header('location:' . ROOT_URL . 'admin/manage-category.php');
    die();
