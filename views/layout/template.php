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
  <?php if (user()) {
    include_once(path('/views/layout/navbar.php'));
  } ?>
  <?php include_once(path('views/' . $view . '.php')) ?>
  <script type="text/javascript">
    function toggleDropdown(element) {
      let dropdown = document.querySelector(`#${element.dataset.dropdown}`)
      if (dropdown.classList.contains('show')) {
        dropdown.classList.remove('show')
      } else {
        dropdown.classList.add('show')
        document.addEventListener("click", function(event){
          closeDropdown(event, element)
        });
      }
    }

    function closeDropdown(event, element) {
      let dropdown = document.querySelector(`#${element.dataset.dropdown}`)
      if(!element.contains(event.target)){
        if (dropdown.classList.contains("show")) {
          dropdown.classList.remove("show");
        }
      }
    }
  </script>
</body>

</html>