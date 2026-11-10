
<?php

class Usuario {
    private $nome;
    private static $usuarios = array(
        array('nome' => 'João'),
        array('nome' => 'Maria'),
        array('nome' => 'Bernardo'),
        array('nome' => 'Cláudio'),
        array('nome' => 'José'),
        array('nome' => 'Pedro')
    );

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public static function setUsuario($nome) {
        self::$usuarios[] = array('nome' => $nome);
    }

    public static function listarTodos() {
        $listaUsuarios = array();

        foreach (self::$usuarios as $usuario) {
            $listaUsuarios[] = new Usuario($usuario['nome']);
        }

        return $listaUsuarios;
    }
}

?>
