<header>
        <h1>Street Fighter</h1>

    </header>

            
    <div id="personagens">

    <?php foreach ($personagens as $id => $personagem) {
        if($personagem['game_id'] == 1) {
        echo <<<HTML
        <form action="personagem.php" method="post">
            <input type="image" src="imagens/{$personagem['image']}" width="245px">
            <input type="hidden" name="codPersonagem" value='$id'>
            </form>
HTML;
        }
    } ?>
        
    </div>