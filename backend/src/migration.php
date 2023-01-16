<?php

require 'conexao.php';

$query = 'CREATE TABLE IF NOT EXISTS mensagens (
    id int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(100),
    email varchar(200),
    comentario varchar(300)
);';

$connection->query($query);
