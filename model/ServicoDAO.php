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

        public function buscarServicosSolicitados($id_cliente) {
            try {
                $pdo = Connection::getInstance();
                $query = "SELECT	s.id        'id_servico',
                                    t.nome      'nome_trabalhador',
                                    t.sobrenome 'sobrenome_trabalhador',
                                    t.cidade    'cidade_trabalhador',
                                    t.telefone  'telefone_trabalhador',
                                    st.nome     'nome_status',
                                    s.descricao 'descricao_servico',
                                    c.nome      'nome_cliente'
                            FROM tb_servico s
                            JOIN tb_trabalhador t ON s.trabalhador_id = t.id
                            JOIN tb_status st     ON s.status_id      = st.id
                            JOIN tb_cliente c     ON s.cliente_id     = c.id
                            WHERE s.cliente_id = ?"; 
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $id_cliente);
                $stmt->execute();

                return ServicoDAO::definirFetchOuFetchAll($stmt);
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }

        public function fecharSolicitacaoServico($id_servico) {
            try {
                $pdo = Connection::getInstance();
                $query = "DELETE FROM tb_servico WHERE id = ?";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $id_servico);
                $stmt->execute();
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        }
    }
