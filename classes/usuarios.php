<?php


class usuario{

    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha)

    {
        global $pdo;
        global $msgErro;

        try {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
            
        } catch (PODException $e) {
            $msgErro = $e- >getMessage()
            
        }

    }


    public function cadastrar($nome, $telefone, $email, $senha)

    {
        global $pdo;
        global $msgErro;

        //Verificar se já existe email cadastrado
        $sql = $pdo- >prepare("SELECT id_usuario FROM usuarios WHEN email = :e");
        $sql- >bindValue(":e", $email);
        $sql- >execute();
        if($sql- >rowCount() > 0){

            return false; //já está cadastrado
        }

        else{

            //Caso não, cadastrar

            $sql = $pdo- >prepare("INSERT INTO usuarios(nome,telefone,email,senha) VALUES (:n, :t, :e, :s)");
            $sql- >bindValue(":n", $nome);
            $sql- >bindValue(":t", $telefone);
            $sql- >bindValue(":e", $email);
            $sql- >bindValue(":s", $senha);
            $sql- >execute();
            return true;

        }

        



    }

    public function logar($email, $senha)

    {
        global $pdo;
        global $msgErro;

    }


}
?>