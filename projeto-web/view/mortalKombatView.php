<header>
        <h1>Mortal Kombat</h1>
        
    </header>

            
    <div id="personagens">

    <?php foreach ($personagens as $id => $personagem) {
        echo <<<HTML
        <form action="personagem.php" method="post">
            <input type="image" src="imagens/{$personagem["image"]}" border="0" width="245px">
            <input type="hidden" name="codPersonagem" value='$id'>
            </form>
HTML;
    } ?>
        
    </div>