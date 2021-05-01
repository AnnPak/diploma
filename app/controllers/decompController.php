<?php

class decompController extends Controller {
    public function __construct( $prefix ) {
        parent::__construct( $prefix );
        $this ->view->setTitle('Проекты');
    } 


 

    public function get( $id ){
        $el = parent::getByID("projects", $id);
        $this ->view->arResult["PROJECT"] = $el ;
        parent::index();
    }

}