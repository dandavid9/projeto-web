<header>
        <h1>Tekken</h1>
        
    </header>

            
    <div id="personagens">

    <?php foreach ($personagens as $id => $personagem) {
        echo <<<HTML
        <form action="personagem.php" method="post">
            <input type="image" src="imagens/T7/{$personagem["image"]}" border="0" width="245px">
            <input type="hidden" name="codPersonagem" value='$id'>
            </form>
HTML;
    } ?>
        
    </div>