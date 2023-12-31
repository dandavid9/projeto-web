CREATE TABLE IF NOT EXISTS users (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
     `email` varchar(40) NOT NULL,
  PRIMARY KEY (`username`)
);

CREATE TABLE IF NOT EXISTS userlikes (
  personagemId int NOT NULL,
  username varchar(20) NOT NULL,
  PRIMARY KEY (username, personagemId),
  FOREIGN KEY (username) REFERENCES users(username),
  FOREIGN KEY (personagemId) REFERENCES personagem(id_personagem)
);


INSERT INTO users (username, `password`, email) VALUES
('danilo', '1234', 'danilo@hotmail.com'),
('duarte', '1234', 'duarte@gmail.com'),
('admin', 'admin', 'admin@outlook.com');

INSERT INTO `userlikes` ( `username`, `personagemId` ) VALUES
('danilo', 9),
('danilo', 11),
('danilo', 14),
('duarte', 2),
('duarte', 24),
('admin', 3);


CREATE TABLE IF NOT EXISTS game (
    id_game INT PRIMARY KEY AUTO_INCREMENT,
    game_title VARCHAR(255) NOT NULL,
    release_date DATE NOT NULL
);

insert into game(game_title, release_date) values('Street Fighter 6', '2023-06-02'),
    ('Mortal Kombat 1', '2023-09-19');
    
CREATE TABLE IF NOT EXISTS personagem (
    id_personagem INT PRIMARY KEY AUTO_INCREMENT,
    personagem_name VARCHAR(255),
    birthdate VARCHAR(255),
    birthplace VARCHAR(255),
    height VARCHAR(255),
    weight VARCHAR(255),
    eye_color VARCHAR(255),
    hair_color VARCHAR(255),
    fighting_style TEXT,
    occupation VARCHAR(255),
    debut_game VARCHAR(255),
    availability VARCHAR(255),
    image VARCHAR(255),
    game_id INT,
    FOREIGN KEY (game_id) REFERENCES game(id_game)
);
    
INSERT INTO personagem (personagem_name, birthdate, birthplace, height, weight, eye_color, hair_color, fighting_style, occupation, debut_game, availability, image, game_id)
VALUES
('Aki', 'Desconhecido', 'China', "5\'8”", '126 lbs', 'Vermelho Cardinal', 'Branco', 'Chinese Kenpo & Shequan (Snake Kung Fu)', 'Assassina', 'Street Fighter 6', 'DLC', 'SF6/aki.png', 1),
('Blanka', '12 de fevereiro', 'Brasil', '192 cm', '98 kg', 'Verde Azulado', 'Laranja', 'Movimentos selvagens, ataques elétricos', 'Guia Turístico', 'Street Fighter II', 'Jogo Base', 'SF6/blanka.png', 1),
('Cammy', '6 de janeiro de 1974', 'Desconhecido', '5\'4" (164 cm)', '61 kg (134 lbs)', 'Azul Claro', 'Loiro', 'Técnicas de assassinato Shadaloo, Treinamento das Forças Especiais (Delta Red)', 'Operativa Delta Red', 'Super Street Fighter II: The New Challengers', 'Jogo Base', 'SF6/cammy.png', 1),
('Chun-Li', '1 de março de 1968', 'China', '5\'6" (169 cm)', 'Desconhecido', 'Marrom', 'Preto', 'Artes marciais chinesas', 'Oficial da Interpol, Professora de Kung Fu', 'Street Fighter II', 'Jogo Base', 'SF6/chunli.png', 1),
('Dee Jay', '31 de outubro de 1965', 'Jamaica', '6\'0" (184 cm)', '203 lbs (92 kg)', 'Marrom Escuro', 'Marrom Escuro', 'Kickboxing & Breakdancing', 'Kickboxer & Músico', 'Super Street Fighter II: The New Challengers', 'Jogo Base', 'SF6/deejay.png', 1),
('Dhalsim', '22 de novembro', 'Índia', '5\'9 / 176 cm (pode variar)', '106 lbs / 48 kg (pode variar)', 'Branco', 'Cabeça raspada, barba branca', 'Yoga Esotérico', 'Mestre de Yoga', 'Street Fighter II', 'Jogo Base', 'SF6/dhalsim.png', 1),
('E.Honda', '3 de novembro de 1960', 'Japão', '6\'1" (185 cm)', '302 lbs (137 kg)', 'Marrom', 'Preto', 'Sumô', 'Sumotori', 'Street Fighter II: The World Warrior', 'Jogo Base', 'SF6/ehonda.png', 1),
('Guile', '23 de dezembro de 1960', 'Estados Unidos', '6\'0" (182 cm)', '218 lbs (99 kg)', 'Verde', 'Loiro', 'Artes marciais e luta profissional', 'Coronel da Força Aérea dos Estados Unidos', 'Street Fighter II', 'Jogo Base', 'SF6/guile.png', 1),
('Jamie', '30 de outubro', 'Hong Kong', '5\'9" (174 cm)', '77 kg (170 lbs)', 'Marrom', 'Preto', 'Zui Quan - Punho bêbado chinês', 'Dançarino Experiente', 'Street Fighter 6', 'Jogo Base', 'SF6/jamie.png', 1),
('JP', 'Desconhecido', 'Rússia, França', '6\'3” (191 cm)', '97 kg (214 lbs)', 'Azul', 'Branco', 'Bartitsu', 'Desconhecido', 'Street Fighter 6', 'Jogo Base', 'SF6/jp.png', 1),
('Juri', '1 de janeiro', 'Coreia do Sul', '5\'5" (165 cm)', '126 lbs (57 kg)', 'Roxo', 'Preto', 'Taekwondo, ataques ki', 'Líder da S.I.N.', 'Super Street Fighter IV', 'Jogo Base', 'SF6/juri.png', 1),
('Ken', '14 de fevereiro', 'EUA', '5\'9" (175 cm)', '183 lbs (83 kg)', 'Azul', 'Preto, mas Ken o pinta de loiro', 'Caratê estilo Shotokan, Arte marcial enraizada nas artes de assassinato', 'Artista Marcial, Trabalhador na Eagle Shipping Company', 'Street Fighter', 'Jogo Base', 'SF6/ken.png', 1),
('Kimberly', '15 de abril', 'Estados Unidos', '5\'6" (168 cm)', '134 lbs (61 kg)', 'Marrom', 'Preto', 'Bushin-ryu Ninjutsu', 'Desconhecido', 'Street Fighter 6', 'Jogo Base', 'SF6/kimberly.png', 1),
('Lily', '3 de junho', 'México', '5\'3” (161 cm)', '47 kg (103 lbs)', 'Marrom', 'Preto', 'Artes Marciais Thunderfoot', 'Desconhecido', 'Street Fighter 6', 'Jogo Base', 'SF6/lily.png', 1),
('Luke', '17 de fevereiro', 'Estados Unidos da América', '6\'1" (185 cm)', '90 kg (198 lbs)', 'Azul', 'Loiro', 'MMA Militar', 'Contratante Militar Privado', 'Street Fighter 5', 'Jogo Base', 'SF6/luke.png', 1),
('Manon', '2 de setembro', 'França', '5\'9” (175 cm)', '129 lbs (58 kg)', 'Azul', 'Rosa Claro', 'Judô', 'Modelo e Campeã de Artes Marciais', 'Street Fighter 6', 'Jogo Base', 'SF6/manon.png', 1),
('Marisa', '26 de setembro', 'Itália', '6\'8” (203 cm)', '269 lbs (122 kg)', 'Bronze', 'Rosa Choque', 'Luta Greco-Romana', 'Designer de Joias', 'Street Fighter 6', 'Jogo Base', 'SF6/marisa.png', 1),
('Rashid', '7 de junho', 'Oriente Médio', '5\'10  (178 cm)', '85 kg (187 lbs)', 'Marrom Claro', 'Preto', 'Vento e Parkour (Autodidata)', 'Socialite', 'Street Fighter 5', 'DLC', 'SF6/rashid.png', 1),
('Ryu', '21 de julho', 'Japão', '5\'9" (175 cm)', '85 kg (187 lbs)', 'Marrom', 'Preto', 'Ansatsuken', 'Andarilho', 'Street Fighter', 'Jogo Base', 'SF6/ryu.png', 1),
('Zangief', '1 de junho de 1956', 'Rússia', '7’ (214 cm)', '158 kg (350 lbs)', 'Azul', 'Marrom', 'Luta Profissional', 'Lutador', 'Street Fighter II', 'Jogo Base', 'SF6/zangief.png', 1),
('Ashrah', 'Desconhecida', 'Netherrealm', 'Desconhecida', 'Desconhecido', 'Preto', 'Preto', 'Ba Gua, Chou Jaio', 'Desconhecida', 'Mortal Kombat: Deception', 'Jogo Base', 'MK1/ashrah.png', 2),
('Baraka', 'Desconhecida', 'Outworld', 'Desconhecida', 'Desconhecido', 'Desconhecido', 'Sem cabelo', 'Silat, Hung Gar', 'Desconhecida', 'Mortal Kombat II', 'Jogo Base', 'MK1/baraka.png', 2),
('General Shao', 'Desconhecida', 'Outworld', '7\'2"/218 cm', '400 lbs/181 kg', 'Vermelho', 'NA', 'Tai Tzu, Pankration', 'General', 'Mortal Kombat II', 'Jogo Base', 'MK1/generalshao.png', 2),
('Geras', 'Desconhecida', 'Desconhecido', '7\'1/216cm', '158kg/350lbs', 'Azul', 'Nenhum', 'Desconhecido', 'Guardião do Tempo', 'Mortal Kombat 11', 'Jogo Base', 'MK1/geras.png', 2),
('Havik', 'Desconhecida', 'Orderrealm', 'Desconhecida', 'Desconhecido', 'Vermelho', 'Preto', 'Snake, Tang Soo Do', 'Desconhecida', 'Mortal Kombat: Deception', 'Jogo Base', 'MK1/havik.png', 2),
('Johnny Cage', '1963', 'Veneza, Carlifornia, EUA.', '6\' 1"/185cm', '190lbs/86kg', 'Azul', 'Marrom', 'Karate, Jeet Kune Do, Shinto Ryu, Shorin Ryu', 'Ator', 'Mortal Kombat', 'Jogo Base', 'MK1/johnnycage.png', 2),
('Kenshi', 'Desconhecida', 'Japão', '6’1', 'Desconhecido', 'Desconhecido', 'Preto', 'Tai Chi, San Shou, Judo, Swordsman', 'Desconhecida', 'Mortal Kombat: Deadly Alliance', 'Jogo Base', 'MK1/kenshi.png', 2),
('Kitana', 'Desconhecida', 'Edenia', 'Desconhecida', 'Desconhecido', 'Desconhecido', 'Preto', 'Eagle Claw, Ba Gua, Tessenjutsu', 'Desconhecida', 'Mortal Kombat II', 'Jogo Base', 'MK1/kitana.png', 2),
('Kung Lao', '13 de fevereiro', 'Zhumadian, Província de Henan, China', '5\' 10"/178cm', '175lbs/79kg', 'Marrom', 'Preto', 'Shaolin Fist, White Lotus, Kenpo, Mantis, Wing Chun.', 'Monge', 'Mortal Kombat II', 'Jogo Base', 'MK1/kunglao.png', 2),
('Li Mei', 'Desconhecida', 'Sun Do, Outworld', '5’9', 'Desconhecido', 'Marrom', 'Preto', 'Baji Quan, Lui He Ba Fa, Mi Zong', 'Desconhecida', 'Mortal Kombat: Deadly Alliance', 'Jogo Base', 'MK1/limei.png', 2),
('Liu Kang', 'Desconhecida', 'Earthrealm (Província de Henan, China)', 'Desconhecida', 'Desconhecido', 'Branco', 'Preto', 'Jun Fan, Karate, Pao Chui, Jeet Kune Do, Choy Lay Fut, Monkey, Dragon, Luohan Quan', 'Desconhecida', 'Mortal Kombat', 'Jogo Base', 'MK1/liukang.png', 2),
('Mileena', '1 de maio', 'Outworld', '5\' 7"/170cm', '128lbs/58kg', 'Laranja', 'Preto', 'Ying Yeung, Mian Chuan, Saijutsu.', 'Princesa', 'Mortal Kombat II', 'Jogo Base', 'MK1/mileena.png', 2),
('Nitara', 'Desconhecida', 'Vaeternus', 'Desconhecida', 'Desconhecido', 'Marrom/Vermelho', 'Vermelho Escuro', 'Leopard, Fu Jow Pai', 'Desconhecida', 'Mortal Kombat: Deadly Alliance', 'Jogo Base', 'MK1/nitara.png', 2),
('Omni-Man', 'Desconhecida', 'Viltrum', 'Desconhecida', 'Desconhecido', 'Desconhecido', 'Preto e cinza', 'Lutador', 'Desconhecida', 'Mortal Kombat 1', 'DLC', 'MK1/omniman.png', 2),
('Raiden', 'Desconhecida', 'Fengjian', '7’0”/213cm', '240 lbs/108.8 kg', 'Azul', 'Preto', 'Nan Chuan, Jujutsu, Judo, Tae Kwon Do', 'Deus do Trovão', 'Mortal Kombat', 'Jogo Base', 'MK1/raiden.png', 2),
('Rain', 'Desconhecida', 'Edenia', 'Desconhecida', 'Desconhecido', 'Desconhecido', 'Desconhecido', 'Zi Ran Men', 'Desconhecida', 'Ultimate Mortal Kombat 3', 'Jogo Base', 'MK1/rain.png', 2),
('Reiko', 'Desconhecida', 'Outworld', 'Desconhecida', 'Desconhecido', 'Preto', 'Preto', 'Ying Yeung', 'Desconhecida', 'Mortal Kombat 4', 'Jogo Base', 'MK1/reiko.png', 2),
('Reptile', 'Desconhecida', 'Zaterra', '6’1', 'Desconhecido', 'Marrom', 'Preto', 'Pao Chui, Crab, Hung Gar', 'Desconhecida', 'Mortal Kombat', 'Jogo Base', 'MK1/reptile.png', 2),
('Scorpion', '9 de fevereiro de 1969', 'Japão', '6\'2"/188 cm', '210 lbs/95 kg', 'Branco', 'Preto', 'Hapkido, Pi Gua, Moi Fah, Ninjitsu', 'Ninja', 'Mortal Kombat', 'Jogo Base', 'MK1/scorpion.png', 2),
('Shang Tsung', 'Desconhecida', 'Earthrealm (China)', 'Desconhecida', 'Desconhecido', 'Desconhecido', 'Preto', 'Mimicry, Snake, Crane, Mantis', 'Desconhecida', 'Mortal Kombat (baixo), Mortal Kombat II (jogável)', 'Bônus de Pré-Compra, DLC', 'MK1/shangtsung.png', 2),
('Sindel', 'Desconhecida', 'Desconhecido', '6\'0"/182 cm', '128 lbs/58 kg', 'Branco', 'Branco', 'Kwan Dao', 'Rainha', 'Mortal Kombat 3', 'Jogo Base', 'MK1/sindel.png', 2),
('Smoke', 'Desconhecida', 'República Tcheca', '6’1', '81kg', 'Marrom', 'Cinza', 'Mi Tzu & Judo', 'Desconhecida', 'Mortal Kombat II', 'Jogo Base', 'MK1/smoke.png', 2),
('Sub-Zero', 'Desconhecida', 'Earthrealm (China)', 'Desconhecida', 'Desconhecido', 'Desconhecido', 'Preto', 'Hapkido, Pi Gua, Monkey', 'Desconhecida', 'Mortal Kombat', 'Jogo Base', 'MK1/subzero.png', 2),
('Tanya', 'Desconhecida', 'Edenia', 'Desconhecida', 'Desconhecido', 'Desconhecido', 'Preto', 'Zi Ran Men, Yue Chuan', 'Desconhecida', 'Mortal Kombat 4', 'Jogo Base', 'MK1/tanya.png', 2);
