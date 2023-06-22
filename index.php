<html>
<head>
    <title>File Upload</title>
    <style>
        img{
            height: 100px;
            width: 200px;
        }
    </style>
</head>
<body>

  <form action="insert.php" method="post" enctype="multipart/form-data">
      <input type="text" name="userName" placeholder="pera podra funda">
      <input type="file" name="image" placeholder="select panra funda">
      <button type="submit">Submit</button>
  </form>

<?php foreach ( $allData as $item):?>

  <p><?php echo $item['user'] ?></p>
  <img src="<?php echo $item['file']?>">
  <?php endforeach; ?>


</body>
</html>