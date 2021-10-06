<?php 
include_once path('/models/Usuario.php');
include_once path('/middlewares/AuthMiddleware.php');
class UsuarioController{
  function __construct()
  {
    new AuthMiddleware();
  }

  //LISTAR USUARIOS
  function index(){
    $request = new Request;
    $filter = '';
    if(property_exists($request, 'buscar')){
      $filter = $request->buscar;
    }
    $usuarios = Usuario::get($filter);
    return view('usuarios/index', ['usuarios' => $usuarios, 'filter' => $filter]);
  }

  //VISTA NUEVO USUARIO
  function create(){
    return view('usuarios/create');
  }

  //GUARDAR USUARIO
  function store(){
    $request = new Request;
    $usuario = new Usuario;
    $usuario->setNombre($request->nombre);
    $usuario->setApellido($request->apellido);
    $usuario->setEmail($request->email);
    $usuario->setPassword($request->password);
    if($usuario->insert()){
      showMessage('success', $usuario->getNombre()." ".$usuario->getApellido()." se ha agregado correctamente");
      redirect('/');
    }else{
      showMessage('error', 'No se ha podido guardar el usuario');
      back();
    }
  }

  //VISTA VER USUARIO
  function show(){
    $request = new Request;
    $usuario = new Usuario;
    $usuario->find($request->id);
    return view('usuarios/show', ['usuario' => $usuario]);
  }

  //VISTA EDITAR USUARIO
  function edit(){
    $request = new Request;
    $usuario = new Usuario;
    $usuario->find($request->id);
    return view('usuarios/edit', ['usuario' => $usuario]);
  }

  //MODIFICAR USUARIO EN BD
  function update(){
      $request = new Request;
      $usuario = new Usuario;
      $usuario->setId($request->id);
      $usuario->setNombre($request->nombre);
      $usuario->setApellido($request->apellido);
      $usuario->setEmail($request->email);
      
      if($usuario->updateWithoutPass()){
        showMessage('success', $usuario->getNombre()." ".$usuario->getApellido()." se ha modificado correctamente");
        redirect('/');
      }else{
        showMessage('error', 'No se ha podido modificar el usuario');
        back();
      }
  }

  //Eliminar USUARIO EN BD
  function delete(){
    $request = new Request;

    if(Usuario::delete($request->id)){
      showMessage('success', "Se ha eliminado correctamente");
      redirect('/');
    }else{
      showMessage('error', 'No se ha podido eliminar el usuario');
      back();
    }
  }

  function editPassword(){
    return view('usuarios/cambiarpassword');

  }

  function updatePassword(){
    $request = new Request;
    if($request->password == $request->confirmpassword){
      if(password_verify($request->oldpassword, user()->getPassword())){
        $usuario = new Usuario;
        $usuario->setId(user()->getId());
        $usuario->setPassword($request->password);
        if($usuario->updatePassword()){
          showMessage('success', "Su contraseña se ha modificado correctamente");
          redirect('/');
        }else{
          showMessage('error', 'Su contraseña no se ha podido modificar');
          back();
        }
      }else{
        showMessage('error', 'Las contraseñas no coinciden');
        back();
      }
    }else{
      showMessage('error', 'La nueva contraseña no coincide con su confirmación');
      back();
    }
  }

}