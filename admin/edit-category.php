<?php
 include 'partials/header.php';

  // before you edit category you have to get the category id
  if(isset($_GET['id'])){
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM categories WHERE id=$id";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result)){
    $category = mysqli_fetch_assoc($result);
    }
 }else {
    header('location:'. ROOT_URL . 'admin/manage-category.php');
 }
?>


<section class="form__section">
    <div class="container form__section-conatiner">
        <h2>Edit category</h2>
        <form action="<?= ROOT_URL?>admin-edit-category-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="hidden" value="<?=$category['id'] ?>" placeholder="id">
            <input type="text" name="title" value="<?=$category['title'] ?>" placeholder="Title">
            <textarea rows="4" name="description" placeholder="Description"><?=$category['description'] ?>"</textarea>
            <button type="submit" name="submit" class="btn">Update category</button>
        </form>
    </div>
</section>

<?php
 include 'partials/header.php';
?>