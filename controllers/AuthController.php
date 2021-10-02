<?php

class AuthController{
  public function index(){
    $variable = 'ésto viene en la variable';
    require_once view('login');
  }
}