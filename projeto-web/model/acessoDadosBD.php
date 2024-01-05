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
    $personagens = $stmt->fetchAll(PDO::FETCH_UNIQUE);


    return $personagens;
}

function obterPersonagem($idPersonagem) 
{
    $conexao = estabelerConexao();

    $stmt = $conexao->prepare('SELECT * FROM personagem WHERE id_personagem = :id');
    $stmt->bindParam(':id', $idPersonagem, PDO::PARAM_INT);
    $stmt->execute();

    $personagem = $stmt->fetch(PDO::FETCH_ASSOC);

    return $personagem;
}

function usernameExists( $username )
{
    $conexao = estabelerConexao();
    $stmt = $conexao->prepare("SELECT username FROM users WHERE username=:username" );
    $stmt->execute( [ 'username' => $username ] );
    $username = $stmt->fetchColumn();

    return is_string($username);
}


function adicionarUser( $username )
{
    $conexao = estabelerConexao();
    $stmt = $conexao->prepare("INSERT INTO users ( `username`, `password`, `email` ) VALUES (:username, :password, :email )");
    $stmt->execute( [ 'username' => $username, 'password' => '1234', 'email' => "$username@gmail.com" ] );
}

function getLikes( $username )
{
    $conexao = estabelerConexao();
    $stmt = $conexao->prepare("SELECT personagemId FROM userlikes WHERE username=:username" );
    $stmt->execute( [ 'username' => $username ] );
    $likes = $stmt->fetchAll(PDO::FETCH_COLUMN);
   
    return $likes; 
}

/* 
   Adiciona um Like aos Likes de um utilizador 
   cujo 'username' é passado no primeiro parâmetro,
   e a personagemId passada no segundo parâmetro  
*/ 
function adicionarLike($username, $personagemId )
{
    $conexao = estabelerConexao();
    $stmt = $conexao->prepare("INSERT INTO userlikes ( `username`, `personagemId` ) VALUES (:username, :personagemId)");
    $stmt->execute( [ 'username' => $username, 'personagemId' => $personagemId] );
}

/* 
   Remove um Like dos Likes de um utilizador 
   cujo 'username' é passado no primeiro parâmetro,
    e a personagemId passada no segundo parâmetro  
*/ 
function removerLike($username, $personagemId ) {
    $conexao = estabelerConexao();
    $stmt = $conexao->prepare("DELETE FROM userlikes WHERE `username`=:username AND `personagemId`=:personagemId ");
    $stmt->execute( [ 'username' => $username, 'personagemId' => $personagemId] );
}

 ?>