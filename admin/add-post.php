<?php
 include 'partials/header.php';
?>


    <section class="form__section">
        <div class="container form__section-conatiner">
            <h2>Add Post</h2>
            <div class="alert__message error">
                <p>This is an error message</p>
            </div>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="Title">
                <select>
                    <option value="1">Travel</option>
                    <option value="1">Food</option>
                    <option value="1">Sports</option>
                    <option value="1">Entertainment</option>
                    <option value="1">Politics</option>
                    <option value="1">Ghana News</option>
                </select>
                <textarea rows="10" placeholder="Body"></textarea>
                <div class="form__control inline">
                    <input type="checkbox" id="is_featured" checked>
                    <label for="is_Featured" checked >Featured</label>
                </div>
                <div class="form__control">
                    <label for="thumbnail">Add Thumbnail</label>
                    <input type="file" id="thumbnail">
                </div>
                <button type="submit" class="btn">Add Post</button>
            </form>
        </div>
    </section>


    <br><br><br><br><br>

<?php
 include 'partials/header.php';
?>