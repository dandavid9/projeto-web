<header>
        <h1>Street Fighter</h1>

    </header>

            
    <div id="personagens">

    <?php foreach ($personagens as $id => $personagem) {
        if ($personagem["game_id"] == 1) {
            $temLike = in_array($id, $likes);
            if ($temLike) {
                $opLike = "Dislike";
            } else {
                $opLike = "Like";
            }

            echo <<<HTML
                        <div class="personagem">
                            <form action="personagem.php" method="post">
                              <input type="image" src="imagens/{$personagem['image']}" width="245px">
                              <input type="hidden" name="idPersonagem" value='$id'>
                                </form>
                            <form action="likeDislikeSF6.php" method="post">
                                <input type="hidden" name="idPersonagem" value='$id'>
                                <input type="submit" name="opLike" value="$opLike">
                                </form>	
                            </div>
HTML;
        }
    } ?>
        
    </div>