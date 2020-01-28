<!-- create news start -->
<div class="container bg-transparent border mt-3">

    <!-- show the title -->
    <h2><?= $title; ?></h2>

    <!-- use validation error for form validation if users forgot to insert the value -->
    <?= validation_errors(); ?>

    <!-- use form provides by CI -->
    <!-- Form start here -->
    <?= form_open('news/create'); ?>
    <div class="form-group">
        <label for="title">News title</label>
        <input type="input" class="form-control" name="title" id="title" placeholder="News title goes here..">
    </div>
    <div class="form-group">
        <label for="preview">News preview</label>
        <input type="input" class="form-control" name="preview" id="preview" placeholder="News preview goes here..">
    </div>
    <div class="form-group">
        <label>News content</label>
        <textarea id="editor1" class="form-control" name="text" placeholder="News content goes here.." style="height:300px;"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Publish</button>
    </form>
</div>
<!-- create news stop -->