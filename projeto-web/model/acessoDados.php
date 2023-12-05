<?php

function obterPersonagens()
{
    $personagens = [
        "tt0417741" => [
            "name" => "Aki",
            "birthdate" => "Desconhecido",
            "birthplace" => "China",
            "height" => "5'8”",
            "weight" => "126 lbs",
            "eye_color" => "Vermelho Cardinal",
            "hair_color" => "Branco",
            "fighting_style" => "Chinese Kenpo & Shequan (Snake Kung Fu)",
            "occupation" => "Assassina",
            "debut_game" => "Street Fighter 6",
            "availability" => "DLC",
            "image" => "aki.png",
        ],
        "tt0417742" => [
            "name" => "Blanka",
            "birthdate" => "12 de fevereiro",
            "birthplace" => "Brasil",
            "height" => "192 cm",
            "weight" => "98 kg",
            "eye_color" => "Verde Azulado",
            "hair_color" => "Laranja",
            "fighting_style" => "Movimentos selvagens, ataques elétricos",
            "occupation" => "Guia Turístico",
            "debut_game" => "Street Fighter II",
            "availability" => "Jogo Base",
            "image" => "blanka.png",
        ],
        "tt0417743" => [
            "name" => "Cammy",
            "birthdate" => "6 de janeiro de 1974",
            "birthplace" => "Desconhecido",
            "height" => "5'4\" (164 cm)",
            "weight" => "61 kg (134 lbs)",
            "eye_color" => "Azul Claro",
            "hair_color" => "Loiro",
            "fighting_style" =>
                "Técnicas de assassinato Shadaloo, Treinamento das Forças Especiais (Delta Red)",
            "occupation" => "Operativa Delta Red",
            "debut_game" => "Super Street Fighter II: The New Challengers",
            "availability" => "Jogo Base",
            "image" => "cammy.png",
        ],
        "tt0417744" => [
            "name" => "Chun-Li",
            "birthdate" => "1 de março de 1968",
            "birthplace" => "China",
            "height" => "5'6\" (169 cm)",
            "weight" => "Desconhecido",
            "eye_color" => "Marrom",
            "hair_color" => "Preto",
            "fighting_style" => "Artes marciais chinesas",
            "occupation" => "Oficial da Interpol, Professora de Kung Fu",
            "debut_game" => "Street Fighter II",
            "availability" => "Jogo Base",
            "image" => "chunli.png",
        ],
        "tt0417745" => [
            "name" => "Dee Jay",
            "birthdate" => "31 de outubro de 1965",
            "birthplace" => "Jamaica",
            "height" => "6'0\" (184 cm)",
            "weight" => "203 lbs (92 kg)",
            "eye_color" => "Marrom Escuro",
            "hair_color" => "Marrom Escuro",
            "fighting_style" => "Kickboxing & Breakdancing",
            "occupation" => "Kickboxer & Músico",
            "debut_game" => "Super Street Fighter II: The New Challengers",
            "availability" => "Jogo Base",
            "image" => "deejay.png",
        ],
        "tt0417746" => [
            "name" => "Dhalsim",
            "birthdate" => "22 de novembro",
            "birthplace" => "Índia",
            "height" => "5'9 / 176 cm (pode variar)",
            "weight" => "106 lbs / 48 kg (pode variar)",
            "eye_color" => "Branco",
            "hair_color" => "Cabeça raspada, barba branca",
            "fighting_style" => "Yoga Esotérico",
            "occupation" => "Mestre de Yoga",
            "debut_game" => "Street Fighter II",
            "availability" => "Jogo Base",
            "image" => "dhalsim.png",
        ],
        "tt0417747" => [
            "name" => "E.Honda",
            "birthdate" => "3 de novembro de 1960",
            "birthplace" => "Japão",
            "height" => "6'1\" (185 cm)",
            "weight" => "302 lbs (137 kg)",
            "eye_color" => "Marrom",
            "hair_color" => "Preto",
            "fighting_style" => "Sumô",
            "occupation" => "Sumotori",
            "debut_game" => "Street Fighter II: The World Warrior",
            "availability" => "Jogo Base",
            "image" => "ehonda.png",
        ],
        "tt0417761" => [
            "name" => "Guile",
            "birthdate" => "23 de dezembro de 1960",
            "birthplace" => "Estados Unidos",
            "height" => "6'0\" (182 cm)",
            "weight" => "218 lbs (99 kg)",
            "eye_color" => "Verde",
            "hair_color" => "Loiro",
            "fighting_style" => "Artes marciais e luta profissional",
            "occupation" => "Coronel da Força Aérea dos Estados Unidos",
            "debut_game" => "Street Fighter II",
            "availability" => "Jogo Base",
            "image" => "guile.png",
        ],
        "tt0417749" => [
            "name" => "Jamie",
            "birthdate" => "30 de outubro",
            "birthplace" => "Hong Kong",
            "height" => "5'9\" (174 cm)",
            "weight" => "77 kg (170 lbs)",
            "eye_color" => "Marrom",
            "hair_color" => "Preto",
            "fighting_style" => "Zui Quan - Punho bêbado chinês",
            "occupation" => "Dançarino Experiente",
            "debut_game" => "Street Fighter 6",
            "availability" => "Jogo Base",
            "image" => "jamie.png",
        ],
        "tt0417750" => [
            "name" => "JP",
            "birthdate" => "Desconhecido",
            "birthplace" => "Rússia, França",
            "height" => "6'3” (191 cm)",
            "weight" => "97 kg (214 lbs)",
            "eye_color" => "Azul",
            "hair_color" => "Branco",
            "fighting_style" => "Bartitsu",
            "occupation" => "Desconhecido",
            "debut_game" => "Street Fighter 6",
            "availability" => "Jogo Base",
            "image" => "jp.png",
        ],
        "tt0417751" => [
            "name" => "Juri",
            "birthdate" => "1 de janeiro",
            "birthplace" => "Coreia do Sul",
            "height" => "5'5\" (165 cm)",
            "weight" => "126 lbs (57 kg)",
            "eye_color" => "Roxo",
            "hair_color" => "Preto",
            "fighting_style" => "Taekwondo, ataques ki",
            "occupation" => "Líder da S.I.N.",
            "debut_game" => "Super Street Fighter IV",
            "availability" => "Jogo Base",
            "image" => "juri.png",
        ],
        "tt0417752" => [
            "name" => "Ken",
            "birthdate" => "14 de fevereiro",
            "birthplace" => "EUA",
            "height" => "5'9\" (175 cm)",
            "weight" => "183 lbs (83 kg)",
            "eye_color" => "Azul",
            "hair_color" => "Preto, mas Ken o pinta de loiro",
            "fighting_style" =>
                "Caratê estilo Shotokan, Arte marcial enraizada nas artes de assassinato",
            "occupation" =>
                "Artista Marcial, Trabalhador na Eagle Shipping Company",
            "debut_game" => "Street Fighter",
            "availability" => "Jogo Base",
            "image" => "ken.png",
        ],
        "tt0417753" => [
            "name" => "Kimberly",
            "birthdate" => "15 de abril",
            "birthplace" => "Estados Unidos",
            "height" => "5'6\" (168 cm)",
            "weight" => "134 lbs (61 kg)",
            "eye_color" => "Marrom",
            "hair_color" => "Preto",
            "fighting_style" => "Bushin-ryu Ninjutsu",
            "occupation" => "Desconhecido",
            "debut_game" => "Street Fighter 6",
            "availability" => "Jogo Base",
            "image" => "kimberly.png",
        ],
        "tt0417754" => [
            "name" => "Lily",
            "birthdate" => "3 de junho",
            "birthplace" => "México",
            "height" => "5'3” (161 cm)",
            "weight" => "47 kg (103 lbs)",
            "eye_color" => "Marrom",
            "hair_color" => "Preto",
            "fighting_style" => "Artes Marciais Thunderfoot",
            "occupation" => "Desconhecido",
            "debut_game" => "Street Fighter 6",
            "availability" => "Jogo Base",
            "image" => "lily.png",
        ],
        "tt0417755" => [
            "name" => "Luke",
            "birthdate" => "17 de fevereiro",
            "birthplace" => "Estados Unidos da América",
            "height" => "6'1\" (185 cm)",
            "weight" => "90 kg (198 lbs)",
            "eye_color" => "Azul",
            "hair_color" => "Loiro",
            "fighting_style" => "MMA Militar",
            "occupation" => "Contratante Militar Privado",
            "debut_game" => "Street Fighter 5",
            "availability" => "Jogo Base",
            "image" => "luke.png",
        ],
        "tt0417756" => [
            "name" => "Manon",
            "birthdate" => "2 de setembro",
            "birthplace" => "França",
            "height" => "5'9” (175 cm)",
            "weight" => "129 lbs (58 kg)",
            "eye_color" => "Azul",
            "hair_color" => "Rosa Claro",
            "fighting_style" => "Judô",
            "occupation" => "Modelo e Campeã de Artes Marciais",
            "debut_game" => "Street Fighter 6",
            "availability" => "Jogo Base",
            "image" => "manon.png",
        ],
        "tt0417757" => [
            "name" => "Marisa",
            "birthdate" => "26 de setembro",
            "birthplace" => "Itália",
            "height" => "6'8” (203 cm)",
            "weight" => "269 lbs (122 kg)",
            "eye_color" => "Bronze",
            "hair_color" => "Rosa Choque",
            "fighting_style" => "Luta Greco-Romana",
            "occupation" => "Designer de Joias",
            "debut_game" => "Street Fighter 6",
            "availability" => "Jogo Base",
            "image" => "marisa.png",
        ],
        "tt0417758" => [
            "name" => "Rashid",
            "birthdate" => "7 de junho",
            "birthplace" => "Oriente Médio",
            "height" => "5'10  (178 cm)",
            "weight" => "85 kg (187 lbs)",
            "eye_color" => "Marrom Claro",
            "hair_color" => "Preto",
            "fighting_style" => "Vento e Parkour (Autodidata)",
            "occupation" => "Socialite",
            "debut_game" => "Street Fighter 5",
            "availability" => "DLC",
            "image" => "rashid.png",
        ],
        "tt0417759" => [
            "name" => "Ryu",
            "birthdate" => "21 de julho",
            "birthplace" => "Japão",
            "height" => "5'9\" (175 cm)",
            "weight" => "85 kg (187 lbs)",
            "eye_color" => "Marrom",
            "hair_color" => "Preto",
            "fighting_style" => "Ansatsuken",
            "occupation" => "Andarilho",
            "debut_game" => "Street Fighter",
            "availability" => "Jogo Base",
            "image" => "ryu.png",
        ],
        "tt0417760" => [
            "name" => "Zangief",
            "birthdate" => "1 de junho de 1956",
            "birthplace" => "Rússia",
            "height" => "7’ (214 cm)",
            "weight" => "158 kg (350 lbs)",
            "eye_color" => "Azul",
            "hair_color" => "Marrom",
            "fighting_style" => "Luta Profissional",
            "occupation" => "Lutador",
            "debut_game" => "Street Fighter II",
            "availability" => "Jogo Base",
            "image" => "zangief.png",
        ],
    ];
    return $personagens;
}

function obterPersonagem($codPersonagem)
{
    $personagens = obterPersonagens();

    return $personagens[$codPersonagem];
}

?>