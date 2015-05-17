<?php

class Lesc_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        $this->loadLayout(); //Cargar Layout
        $this->renderLayout(); //Renderear Vista
    }

}
