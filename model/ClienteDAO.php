<?php require_once 'Connection.php'; ?>

<?php
    class ClienteDAO extends Connection {
        public function cadastrarCliente($cliente) {
            try {
                $pdo = Connection::getInstance();
                $query = "INSERT INTO tb_cliente (id, nome, sobrenome, telefone, cidade, email, senha) 
                    VALUES (NULL, ?, ?, ?, ?, ?, ?)";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $cliente->nome);
                $stmt->bindValue(2, $cliente->sobrenome);
                $stmt->bindValue(3, $cliente->telefone);
                $stmt->bindValue(4, $cliente->cidade);
                $stmt->bindValue(5, $cliente->email);
                $stmt->bindValue(6, $cliente->senha);
                $stmt->execute();
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }
    }
