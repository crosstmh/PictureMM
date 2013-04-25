<?php

class AlbumController extends Yaf_Controller_Abstract {

    private $albumModel;
    private $PAGEMAX = 100;
    public function init()
    {
        $this->albumModel = new AlbumModel();
        Yaf_Dispatcher::getInstance()->disableView();
    }

    public function indexAction()
    {
        return $this->albumModel->fetchAlbum();
    }

}
