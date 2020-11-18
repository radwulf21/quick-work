<?php require_once '../model/Connection.php'; ?>

<?php

    abstract class Codificacao extends Connection {
        public static function decodeArrayDataUtf8($array) {
            $newArray = [];

            foreach ($array as $data) {
                array_push($newArray, utf8_decode($data));
            }

            $newArray = array_unique($newArray);
            $newArray = array_values($newArray);
            return $newArray;
        }

        public static function encodeArrayDataUtf8($array) {
            $newArray = [];

            foreach ($array as $data) {

                array_push($newArray, utf8_encode($data));
            }

            $newArray = array_unique($newArray);
            $newArray = array_values($newArray);
            return $newArray;
        }
    }
