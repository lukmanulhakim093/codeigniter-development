<div class="container bg-transparent">
  <div class="card container mt-2">
    <div class="text-justify">
      
      <?= '<h2>'.$news_item['title'].'</h2>';?>
      <?= $news_item['text'];?>

      <div class="mt-2">
      <a class="btn btn-outline-success" href="<?= base_url(); ?>news/edit/<?= $news_item['slug']; ?>">Edit news</a>
      </div>

      <div>
          <?= form_open('news/delete/' .$news_item['id']); ?>
              <button type="submit" value="delete" class="btn btn-outline-danger my-2 tombol-view" onclick="return confirm('Are you sure to delete the news?')">Delete news</button>
          </form >
      </div>
    </div>
  </div>
</div>
