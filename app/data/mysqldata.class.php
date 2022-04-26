<?php
class mysqldata{

    public function add_imagem($imagem){
        $this->execute(
            'INSERT INTO image (imagem, data) VALUE(:imagem, NOW())',
            [ ':imagem' => $imagem
            ]
        );
    }
    private function connect(){
        try{
            return new PDO('mysql:dbname=teste;host=localhost;port=3306', 'root', '');
        } catch(PDOException $e){
            return null;
        }     
    }

    private function execute($sql, $sql_params = []){
        $db = $this->connect();

        if($db == null){
            return;
        }

        $query = $db->prepare($sql);
        $query->execute($sql_params);
        $db = null;
    }
}
?>