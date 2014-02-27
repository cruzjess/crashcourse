<!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/~ccit1588/cct460/assets/style.css">
    <title>CRUD Assignment - Jessica Cruz</title>
  </head>
  <body>
    <div id="main">
    <h1><?php echo $title; ?> | CRUD Assignment</h1>
    <?php echo form_open('admin/create') ?>
      <h2>Write new post</h2>
      <label>Title</label>
      <input type="text" name="title">
      <label>Content</label>
      <textarea name="content"></textarea>
      <label>Categories</label>
      <textarea name="category"></textarea>
      <input type="submit" name="submit" value="Create">
      
    </form>


<div id="list">
 <a href="http://phoenix.sheridanc.on.ca/~ccit1588/cct460/index.php/blog"> View all blog posts</a>
    <h2>Edit Posts</h2>
    <ul>
      <?php foreach($posts as $post): ?>
      <li><a href="/~ccit1588/cct460/index.php/admin/update/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a> | <a href="/~ccit1588/cct460/index.php/admin/delete/<?php echo $post['id']; ?>">delete post</a></li>
      <?php endforeach; ?>
      </ul>
       </div>
    </div>
  </body>
</html>