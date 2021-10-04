<?php
  class AuthMiddleware{
    function __construct()
    {
      if(!isset($_SESSION['Usuario'])){
        redirect('/login');
      }
    }
  }
?>