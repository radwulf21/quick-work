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

        public static function definirFetchOuFetchAll($stmt) {
            $linhas = $stmt->rowCount();
            if ($linhas == 1) {
                $result[] = $stmt->fetch();
                return $result;
            } else {
                $result = $stmt->fetchAll();
                return $result;
            }
        }

        public function buscarDadosTrabalhadores() {
            try {
                $pdo = Connection::getInstance();
                $query = "SELECT    t.id as 'id_trabalhador', 
                                    t.nome as 'nome_trabalhador', 
                                    t.sobrenome as 'sobrenome_trabalhador', 
                                    t.telefone as 'telefone_trabalhador', 
                                    t.cidade as 'cidade_trabalhador', 
                                    t.email as 'email_trabalhador', 
                                    t.descricao as 'desc_trabalhador',
                                    t.categoria_id as 'categoriad_id',
                                    c.nome as 'nome_categoria'
                        FROM tb_trabalhador t
                        JOIN tb_categoria c ON c.id = t.categoria_id"; 
                $stmt = $pdo->prepare($query);
                $stmt->execute();

                return TrabalhadorDAO::definirFetchOuFetchAll($stmt);
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }

        public function buscarTrabalhadoresPorCategoria($categoria_id) {
            try {
                $pdo = Connection::getInstance();
                $query = "SELECT    t.id as 'id_trabalhador', 
                                    t.nome as 'nome_trabalhador', 
                                    t.sobrenome as 'sobrenome_trabalhador', 
                                    t.telefone as 'telefone_trabalhador', 
                                    t.cidade as 'cidade_trabalhador', 
                                    t.email as 'email_trabalhador', 
                                    t.descricao as 'desc_trabalhador',
                                    t.categoria_id as 'categoriad_id',
                                    c.nome as 'nome_categoria'
                        FROM tb_trabalhador t
                        JOIN tb_categoria c ON c.id = t.categoria_id
                        WHERE categoria_id = ?"; 
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $categoria_id);
                $stmt->execute();

                return TrabalhadorDAO::definirFetchOuFetchAll($stmt);
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }

        public function buscarDadosTrabalhador($id) {
            try {
                $pdo = Connection::getInstance();
                $query = "SELECT nome, sobrenome, telefone, cidade, email, descricao FROM tb_trabalhador WHERE id = ?";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $id);
                $stmt->execute();
                return $stmt->fetch();
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }

        public function alterarDadosTrabalhador($trabalhador) {
            try {
                $pdo = Connection::getInstance();
                $query = "UPDATE tb_trabalhador 
                    SET nome = ?, sobrenome = ?, telefone = ?, cidade = ?, email = ?, descricao = ?, categoria_id = ?
                    WHERE id = ?";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $trabalhador->nome);
                $stmt->bindValue(2, $trabalhador->sobrenome);
                $stmt->bindValue(3, $trabalhador->telefone);
                $stmt->bindValue(4, $trabalhador->cidade);
                $stmt->bindValue(5, $trabalhador->email);
                $stmt->bindValue(6, $trabalhador->descricao);
                $stmt->bindValue(7, $trabalhador->categoria_id);
                $stmt->bindValue(8, $trabalhador->id);
                $stmt->execute();
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }

        public function validarNovaSenha($senha, $confirmSenha) {
            try {
                return $senha == $confirmSenha;
            } catch (ErrorException $erro) {
                $erro->getMessage();
            }
        }

        public function alterarSenhaTrabalhador($id, $senha) {
            try {
                $pdo = Connection::getInstance();
                $query = "UPDATE tb_trabalhador SET senha = ? WHERE id = ?";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $senha);
                $stmt->bindValue(2, $id);
                $stmt->execute();
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }

        public function apagarContaTrabalhador($id) {
            try {
                $pdo = Connection::getInstance();
                $query = "DELETE FROM tb_trabalhador WHERE id = ?";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $id);
                $stmt->execute();
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }
    }
