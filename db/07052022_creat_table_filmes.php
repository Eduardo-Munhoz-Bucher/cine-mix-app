<?php

$bd = new SQLite3("filmes.db");



$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql)) echo "\nTabelas filmes apagada\n";

$sql = "CREATE TABLE filmes (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR(200) NOT NULL,
    poster VARCHAR(200),
    sinopse TEXT,
    nota DECIMAL(2,1)
    )
";

if ($bd->exec($sql)) echo "\nTabelas filmes criadas\n";
else 
    echo"\nerro ao criar tabela filmes\n";

$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    0,
    'The Batman',
    'https://www.themoviedb.org/t/p/w400/wd7b4Nv9QBHDTIjc2m7sr0IUMoh.jpg',
    'Com direção de Matt Reeves (Planeta dos Macacos: A Guerra), Batman de 2022 traz o   herói na buscapelo Charada (Paul Dano), criminoso que vem dizimando figuras notáveis de Gotham e que parece ter uma questão particular para resolver com o vigilante.',
    4.1
)";

if ($bd->exec($sql)) echo "\nFilmes inseridos com sucesso\n";
else 
    echo"\nerro ao inserir filmes\n";

$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
        1,
        'Eternos',
        'https://www.themoviedb.org/t/p/w400/mzezdUZEnpiUIlxpdyLO1R08Lqm.jpg',
        'Após os eventos de Vingadores: Ultimato, os Eternos, uma raça alienígena imortal criada pelos Celestiais que vivem em segredo na Terra há mais de 7000 anos, se reúnem após uma tragédia inesperada para proteger a humanidade dos Deviantes.',
        3.5
    )";
    
    if ($bd->exec($sql)) echo "\nFilmes inseridos com sucesso\n";
    else 
        echo"\nerro ao inserir filmes\n";

$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
            2,
            'Animais Fantásticos: Os Segredos de Dumbledore',
            'https://www.themoviedb.org/t/p/w400/gopGghuMtmdMviBcl9G0JfVB2RZ.jpg',
            'O professor Alvo Dumbledore sabe que o poderoso mago das trevas Gellert Grindelwald está se movimentando para assumir o controle do mundo mágico.',
            4.9
    )";
        
        if ($bd->exec($sql)) echo "\nFilmes inseridos com sucesso\n";
        else 
            echo"\nerro ao inserir filmes\n";        
    

?>