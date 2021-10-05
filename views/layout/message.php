<?php
if(isset($_SESSION['message'])){
?>
<div class="message <?php echo $_SESSION['message']['class'] ?>">
  <p><?php echo $_SESSION['message']['text'] ?></p>
</div>
<?php 
  unset($_SESSION['message']);
}
?>