<?php
    abstract class Connection {
        public static function getInstance()
        {
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=quick_work', 'root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                ini_set('default_charset', 'UTF-8');
                date_default_timezone_set('America/Sao_Paulo');
                return $pdo;
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }
    }
    