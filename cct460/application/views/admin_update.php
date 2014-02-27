<a href="http://phoenix.sheridanc.on.ca/~ccit1588/cct460/index.php/admin">Back to admin page</a>
<h1><?php echo $title; ?> | Admin</h1>

<?php foreach($post as $p): ?>
  <?php echo form_open('admin/update_post/' . $p['id']) ?>
    <label>Title</label>
    <input type="text" name="title" value="<?php echo $p['title']; ?>">
    <label>Content</label>
    <textarea name="content"><?php echo $p['content']; ?></textarea>
    <label>Categories</label>
    <textarea name="category"><?php echo $p['category']; ?></textarea>
    <input type="submit" name="submit" value="Save">
  </form>
<?php endforeach; ?>