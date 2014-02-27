<!DOCTYPE html>

<html>
  <head>
    <link href="/~ccit1588/cct460/assets/style_blog.css" type="text/css" rel="stylesheet">

    <title>CRUD Assignment - Blog</title>
  </head>
<a href="http://phoenix.sheridanc.on.ca/~ccit1588/cct460/index.php/admin">Back to admin page</a>
  <body>
    <h1><?php echo $title; ?></h1>
    <?php foreach($posts as $post): ?>
      <p><?php echo $post['title']; ?></p>
      <p><?php echo $post['content']; ?></p>
      <p><?php echo $post['category']; ?></p>
    <?php endforeach; ?>
  </body>
</html>