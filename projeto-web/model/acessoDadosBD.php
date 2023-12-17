<?php 
	
  function estabelerConexao()
{
     // Deviam estar num ficheiro de configuração
    $hostname = "localhost";
    $databasename = "web";
    $username = "root";
    $password = "";
    
    try {
        $conexao = new PDO("mysql:host=$hostname;dbname=$databasename;charset=utf8mb4",
                       $username, $password);
    }
    catch (\PDOException $e) {
        echo $e->getMessage();
    }

    return $conexao;

}

/* 
   Devolve todos os personagens que existem 
*/ 
function obterPersonagens() 
{
    $conexao = estabelerConexao();

    $stmt = $conexao->query('SELECT * FROM personagem');

    // $personagens = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $personagens = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $personagens;
}

function obterPersonagem($idPersonagem) 
{
    $conexao = estabelerConexao();

    $stmt = $conexao->prepare('SELECT * FROM personagem WHERE id_personagem = :id + 1');
    $stmt->bindParam(':id', $idPersonagem, PDO::PARAM_INT);
    $stmt->execute();

    $personagem = $stmt->fetch(PDO::FETCH_ASSOC);

    return $personagem;
}

 ?>