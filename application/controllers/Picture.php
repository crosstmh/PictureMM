<?php

class PictureController extends Yaf_Controller_Abstract {

    private $pictureModel;
    private $PAGEMAX = 100;
    public function init()
    {
        $this->pictureModel = new PictureModel;
        Yaf_Dispatcher::getInstance()->disableView();
    }

    public function indexAction()
    {
        $id = $this->getRequest()->getParam('id');
        if ($id!='')
            return $this->pictureModel->fetchPicByAlbumId($id);
    }

}
?>
