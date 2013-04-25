<?php

class AlbumModel {

    private $conn = null;
    private $config = null;
    function __construct() {
        $this->conn = new mysqlconnect(Yaf_Registry::get('dbconfig'));
        $this->config = Yaf_Registry::get('config');
        $this->conn->connect();
    }

    public function fetchAlbum() {
        $sql = 'SELECT * FROM album';
        $result = $this->conn->fetch($sql);
        for($i = 0; $i<count($result); $i++)
            $result[$i]['cover_pic'] = $this->config.$result[$i]['cover_pic'];
        return $result;
    }

    public function insertAlbum($data) {
        return $this->conn->insert('album', $data);
    }

    public function updateInfo($data, $condition) {
        $this->conn->update('album', $data, $condition);
    }

}

?>
