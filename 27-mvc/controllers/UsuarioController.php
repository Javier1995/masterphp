<?php

class UsuarioController {

    public function mostrarTodos() {
        require_once 'models/usuario.php';


        $usuario = new Usuario();
        $usuarios = $usuario->ConseguirTodos('usuarios');

        require_once 'views/usuarios/mostrar-todos.php';
    }

    public function crear() {
        require_once 'views/usuarios/crear.php';
    }

}