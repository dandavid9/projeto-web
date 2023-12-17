<header>
        <h1>Mortal Kombat</h1>
        
    </header>

            
    <div id="personagens">


    <?php 
    foreach ($personagens as $id => $personagem) {
        if($personagem['game_id'] == 2) {
        echo <<<HTML
        <form action="personagem.php" method="post">
            <input type="image" src="imagens/{$personagem['image']}" width="245px">
            <input type="hidden" name="idPersonagem" value='$id'>
            </form>
HTML;
        }
    } ?>
        
    </div>