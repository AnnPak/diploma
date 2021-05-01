<?php

class projController extends Controller {
    public function __construct( $prefix ) {
        parent::__construct( $prefix );
        $this ->view->setTitle('Проекты');
    }

    public function index(){
        if ( $projects = $this->model->getList('projects')){
            
            $this->view->arResult["ITEMS"] = $projects;
        }else{
            $this->view->arResult["ITEMS"] = array();
        }

        parent::index();

    }

    public function add(){
        $data = array(
            'name' => htmlspecialchars($_POST["name-proj"]),
            'data_success' => isset($_POST["data_success"]) ? htmlspecialchars($_POST["data_success"]) : NULL,
            'complited' => isset($_POST["complited"]) ? htmlspecialchars($_POST["complited"]) : 'N'
        );

        if ( strlen($data['name']) >= 2) {
            if( $id = $this->model->add($data)){ 
                echo json_encode(array("error" => false));
            }else{
                echo json_encode(array("error" => true));
            }
        }else{
            echo json_encode(array("error" => true));
        }
    }

    public function del(){
     
        $data=array(
            "id" => (htmlspecialchars((int)$_POST["id"]))
        );

        if($data["id"] > 0){
            if( $this->model->delete("projects", "id", $data["id"]) ){ 
                echo json_encode(array("error" => "true"));
            }else{
                echo json_encode(array("error" => "false"));
            }
        }
    }

    public function edit(){
     
        $data=array(
            "id" => (htmlspecialchars((int)$_POST["id"])),
            'name' => htmlspecialchars($_POST["name-proj"])
        );

        if($data["id"] > 0){
            if( $this->model->delete("projects", "id", $data["id"]) ){ 
                echo json_encode(array("error" => "true"));
            }else{
                echo json_encode(array("error" => "false"));
            }
        }
    }

    

}