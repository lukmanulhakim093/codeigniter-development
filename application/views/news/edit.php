<div class="container bg-transparent border mt-3">
    <h2><?php echo $title; ?></h2>

    <?php echo validation_errors(); ?>

    <?php echo form_open('news/update'); ?>

    <input type="hidden" name="id" value="<?= $news_item['id']; ?>" >

    <div class="form-group">
        <label for="title">News title</label>
        <input type="input" class="form-control" name="title" placeholder="News title goes here.." value="<?= $news_item['title']; ?>">
    </div>
    <div class="form-group">
        <label for="preview">News preview</label>
        <input type="input" class="form-control" name="preview" id="preview" placeholder="News preview goes here.." value="<?= $news_item['preview']; ?>">
    </div>
    <div class="form-group">
        <label for="text">News content</label>
        <textarea id="editor1" class="form-control text-justify" name="text" placeholder="News content goes here.."  style="height:300px;"><?= $news_item['text']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Publish</button>
  
    </form>
</div>