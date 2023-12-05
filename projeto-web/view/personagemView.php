<div id="personagem">

<!-- 
	Neste div são apresentados os dados acerca do personagem seleccionado 
-->

<?php
$personagem = obterPersonagem($codPersonagem);
echo <<<HTML
<h2>{$personagem["name"]}</h2>
<img src="imagens/{$personagem["image"]}" alt="poster do personagem">
<br>
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


HTML;
?>


</div>