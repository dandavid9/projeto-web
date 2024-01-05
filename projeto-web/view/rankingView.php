<header>
        <h1>Ranking de Popularidade</h1>

    </header>

            
    <div id="personagens">

    <?php foreach ($personagens as $id => $personagem) {
        $likes = obterLikesPersonagem($id);
        $texto = ($likes == 1) ? 'like' : 'likes';
            echo <<<HTML
                        <div class="personagem">
                                <img src="imagens/{$personagem['image']}" alt="" width="245px">
                            <span>$likes $texto</span>
                            </div>
HTML;
    } ?>
        
    </div>