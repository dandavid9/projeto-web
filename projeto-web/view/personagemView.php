<div id="personagem">

<!-- 
	Neste div são apresentados os dados acerca do personagem seleccionado 
-->

<?php
$personagem = obterPersonagem($idPersonagem);
$idProximoPersonagem = $idPersonagem + 1;
$idPersonagemAnterior = $idPersonagem - 1;
echo <<<HTML
<h2>{$personagem["personagem_name"]}</h2>
<img src="imagens/{$personagem['image']}" alt="imagem do personagem">

<div class="info">
    <p style="text-align:justify;"><span><b>Data de Nascimento</b>:&nbsp; {$personagem["birthdate"]}</span></p>
    <p style="text-align:justify;"><span><b>Local de Nascimento</b>:&nbsp; {$personagem["birthplace"]}</span></p>
    <p style="text-align:justify;"><span><b>Altura</b>:&nbsp; {$personagem["height"]}</span></p>
    <p style="text-align:justify;"><span><b>Peso</b>:&nbsp; {$personagem["weight"]}</span></p>
    <p style="text-align:justify;"><span><b>Cor dos Olhos</b>:&nbsp; {$personagem["eye_color"]}</span></p>
    <p style="text-align:justify;"><span><b>Cor do Cabelo</b>:&nbsp; {$personagem["hair_color"]}</span></p>
    <p style="text-align:justify;"><span><b>Estilo de Luta</b>:&nbsp; {$personagem["fighting_style"]}</span></p>
    <p style="text-align:justify;"><span><b>Ocupação</b>:&nbsp; {$personagem["occupation"]}</span></p>
    <p style="text-align:justify;"><span><b>Jogo de Estreia</b>:&nbsp; {$personagem["debut_game"]}</span></p>
    <p style="text-align:justify;"><span><b>Disponibilidade</b>:&nbsp; {$personagem["availability"]}</span></p>
</div>
</div>
HTML;
?>

<div id="navigation">
<?php
if (array_key_exists($idPersonagemAnterior, $personagens) ) {
    echo <<<HTML
    <form action="personagem.php" method="post">
        <input type="submit" value="Anterior">
        <input type="hidden" name="idPersonagem" value='$idPersonagemAnterior'>
    </form>
    HTML;
}
if (array_key_exists($idProximoPersonagem, $personagens) ) {
    echo <<<HTML
    <form action="personagem.php" method="post">
        <input type="submit" value="Próximo">
        <input type="hidden" name="idPersonagem" value='$idProximoPersonagem'>
    </form>
HTML;
}
?>
</div>