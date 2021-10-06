<?php

class AuthController{

  public function index(){
    return view('login');
  }

  public function login(){
    include_once path('/models/Usuario.php');
    $request = new Request;
    $usuario = new Usuario;
    $usuario->findByEmail($request->email);
    if($usuario->getId()){
      if(password_verify($request->password, $usuario->getPassword())){
        $_SESSION['Usuario'] = serialize($usuario);
        redirect('/');
      }else{
        echo 'Contraseña incorrecta';
        return;
      }
    }
    echo 'Usuario no encontrado';
    return;
  }
  
  public function logout(){
    unset($_SESSION['Usuario']);
    redirect('/');
  }
}