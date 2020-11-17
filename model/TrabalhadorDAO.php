<?php require_once 'Connection.php'; ?>

<?php

    class TrabalhadorDAO extends Connection {
        public function cadastrarTrabalhador($trabalhador) {
            try {
                $pdo = Connection::getInstance();
                $query = "INSERT INTO tb_trabalhador (id, nome, sobrenome, telefone, cidade, email, senha, descricao, categoria_id)
                    VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)"; 
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $trabalhador->nome);
                $stmt->bindValue(2, $trabalhador->sobrenome);
                $stmt->bindValue(3, $trabalhador->telefone);
                $stmt->bindValue(4, $trabalhador->cidade);
                $stmt->bindValue(5, $trabalhador->email);
                $stmt->bindValue(6, $trabalhador->senha);
                $stmt->bindValue(7, $trabalhador->descricao);
                $stmt->bindValue(8, $trabalhador->categoria_id);
                $stmt->execute();
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }
    }
