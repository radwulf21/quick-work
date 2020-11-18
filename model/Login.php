<?php require_once 'Connection.php'; ?>

<?php

    class Login extends Connection {
        public function buscarCliente($email, $senha) {
            try {
                $pdo = Connection::getInstance();
                $query = "SELECT * FROM tb_cliente WHERE email LIKE ? AND senha LIKE ?";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $email);
                $stmt->bindValue(2, $senha);
                $stmt->execute();
                return $stmt->rowCount();
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }

        public function buscarTrabalhador($email, $senha) {
            try {
                $pdo = Connection::getInstance();
                $query = "SELECT * FROM tb_trabalhador WHERE email LIKE ? AND senha LIKE ?";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $email);
                $stmt->bindValue(2, $senha);
                $stmt->execute();
                return $stmt->rowCount();
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }

        public function login() {
            session_start();
            $_SESSION['login'] = true;
        }

        public function logoff() {
            session_destroy();
        }
    }
