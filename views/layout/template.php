<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ver usuario</title>
  <link rel="stylesheet" href="./static/css/main.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>

<body>
  <?php if($view != 'login'){include_once(path('/views/layout/navbar.php')); }?>
  <?php include_once(path('views/'.$view.'.php'))?>
</body>

</html>