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

        public function buscarDadosCliente($id) {
            try {
                $pdo = Connection::getInstance();
                $query = "SELECT nome, sobrenome, telefone, cidade, email FROM tb_cliente WHERE id = ? GROUP BY id";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $id);
                $stmt->execute();
                return $stmt->fetch();
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }

        public function alterarDadosCliente($cliente) {
            try {
                $pdo = Connection::getInstance();
                $query = "UPDATE tb_cliente SET nome = ?, sobrenome = ?, telefone = ?, cidade = ?, email = ?
                    WHERE id = ?";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $cliente->nome);
                $stmt->bindValue(2, $cliente->sobrenome);
                $stmt->bindValue(3, $cliente->telefone);
                $stmt->bindValue(4, $cliente->cidade);
                $stmt->bindValue(5, $cliente->email);
                $stmt->bindValue(6, $cliente->id);
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

        public function alterarSenhaCliente($id, $senha) {
            try {
                $pdo = Connection::getInstance();
                $query = "UPDATE tb_cliente SET senha = ? WHERE id = ?";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $senha);
                $stmt->bindValue(2, $id);
                $stmt->execute();
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }

        public function apagarContaCliente($id) {
            try {
                $pdo = Connection::getInstance();
                $query = "DELETE FROM tb_cliente WHERE id = ?";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $id);
                $stmt->execute();
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }
    }
