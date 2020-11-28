<?php require_once "Connection.php"; ?>

<?php

    class ServicoDAO extends Connection {
        public function cadastrarServico($servico) {
            try {
                $pdo = Connection::getInstance();
                $query = "INSERT INTO tb_servico (id, cliente_id, trabalhador_id, categoria_id, status_id, descricao)
                    VALUES (NULL, ?, ?, ?, ?, ?)"; 
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $servico->cliente_id);
                $stmt->bindValue(2, $servico->trabalhador_id);
                $stmt->bindValue(3, $servico->categoria_id);
                $stmt->bindValue(4, $servico->status_id);
                $stmt->bindValue(5, $servico->descricao);
                $stmt->execute();
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }
    }