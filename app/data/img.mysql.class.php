<?php
require('image.class.php');
require_once('mysqldata.class.php');

class imagedata extends mysqldata{
    public function add_image($imagem, $user_id){
        $this->execute(
            'INSERT INTO image (imagem, data, user_id) VALUE(:imagem, NOW(), :user_id)',
            [   ':imagem' => $imagem,
                ':user_id' => $user_id,
            ]
        );
    }
    public function get_images($user_id){
        return $this->query_img('SELECT * FROM image WHERE user_id = :user_id', [
            ':user_id' => $user_id
        ]);
    }

    public function query_img($sql, $sql_params = []){
        $query = $this->query($sql, $sql_params);
        $data = $query->fetchAll(PDO::FETCH_CLASS, 'image');
        $query = null;
        return $data;
    }

}

?>