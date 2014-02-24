<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>exemplo3</title>
  <meta name="description" content="">
  <meta name="author" content="André Batista">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body>
  <div>
    <header>
      <h1><?php echo "$titulo"; ?></h1>
    </header>
    <nav>
      <?php 
      foreach ($menu as $item) {?>
      	<li><?php echo $item; ?></li>
      <?php } ?> 
    </nav>

    <div>
      <p><?php echo "$texto"; ?></p>
      <p><?php echo "$segmento"; ?></p>
    </div>

    <footer>
     <p>&copy; Copyright  by André Batista</p>
    </footer>
  </div>
</body>
</html>
