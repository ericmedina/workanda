<?php 
include_once path('/models/Usuario.php');

class UsuarioController{

  //LISTAR USUARIOS
  function index(){
    $usuarios = Usuario::getAll();
    require_once view('usuarios/index');
  }

  //VISTA NUEVO USUARIO
  function create(){
    require_once view('usuarios/create');
  }

  //GUARDAR USUARIO
  function store(){
    $request = new Request;
    $usuario = new Usuario;
    $usuario->setNombre($request->nombre);
    $usuario->setApellido($request->apellido);
    $usuario->setEmail($request->email);
    $usuario->setPassword($request->password);
    $usuario->insert();
    header('location: '.url('/'));
  }
}