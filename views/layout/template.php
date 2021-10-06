<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Usuarios - Eric Medina</title>
  <link rel="stylesheet" href="./static/css/main.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>

<body>
  <?php if (user()) {
    include_once(path('/views/layout/navbar.php'));
  } ?>
  <?php include_once(path('views/' . $view . '.php')) ?>
  <script type="text/javascript">
    //DROPDOWN
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
    //FORMS VALIDATION
    function showInputError(input, message){
      let messageInput = document.createElement('span')
      messageInput.classList.add('input-message')
      messageInput.classList.add('error')
      messageInput.innerHTML = message
      input.classList.add('is-invalid')
      input.parentElement.append(messageInput)
    }
    function resetValidations(form){
      let invalids = form.querySelectorAll('.is-invalid')
      invalids.forEach(element => {
        element.classList.remove('is-invalid')
        let messages = element.parentElement.querySelectorAll('.input-message')
        messages.forEach((el) => {
          el.parentElement.removeChild(el)
        });
      })
    }
  </script>
</body>

</html>