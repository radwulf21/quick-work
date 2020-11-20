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

        public function listarTodosTrabalhadores() {
            try {
                $pdo = Connection::getInstance();
                $query = "SELECT t.id, 
                                 t.nome, 
                                 t.sobrenome, 
                                 t.telefone, 
                                 t.cidade, 
                                 t.email, 
                                 t.descricao,
                                 c.nome
                        FROM tb_trabalhador t
                        JOIN tb_categoria c ON c.id = t.categoria_id"; 
                $stmt = $pdo->prepare($query);
                $stmt->execute();
                $linhas = $stmt->rowCount();
                if ($linhas == 1) {
                    return $stmt->fetch();
                } else {
                    return $stmt->fetchAll();
                }
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }

        public function pesquisarTrabalhadoresCategoria($categoria_id) {
            try {
                $pdo = Connection::getInstance();
                $query = "SELECT * FROM tb_trabalhador WHERE categoria_id = ?";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $categoria_id);
                $stmt->execute();
                return $stmt->fetch();
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }

        public function pesquisarTrabalhadoresCategoriaECidade($categoria_id, $cidade) {
            try {
                $pdo = Connection::getInstance();
                $query = "SELECT * FROM tb_trabalhador WHERE categoria_id = ? AND cidade = %?%";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $categoria_id);
                $stmt->bindValue(2, $cidade);
                $stmt->execute();
                return $stmt->fetch();
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }
    }
