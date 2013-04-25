<?php

class PictureModel {

    private $conn = null;
    private $config = null;
    function __construct() {
        $this->conn = new mysqlconnect(Yaf_Registry::get('dbconfig'));
        $this->config = Yaf_Registry::get('config');
        $this->conn->connect();
    }

    public function fetchPicByAlbumId($id) {
        $sql = 'SELECT * FROM pic JOIN album ON pic.album_id = album.id WHERE album_id=?';
        $result = $this->conn->fetch($sql);
        for($i = 0; $i<count($result); $i++)
            $result[$i]['pic_url'] = $this->config.$result[$i]['pic_url'];
        return $result;
    }

    public function insertPic($data) {
        return $this->conn->insert('pic', $data);
    }

    public function updatePic($data, $condition) {
        $this->conn->update('pic', $data, $condition);
    }

}

?>
