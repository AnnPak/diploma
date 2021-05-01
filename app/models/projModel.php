<?php

class projModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }

    public function add( $data ){
        $sth = $this->db->prepare(
            "INSERT INTO projects ( name, data_create, data_success, complited ) "
            . " VALUE ( :name,  CURRENT_DATE(), :data_success, :complited);"
        );
        
        $sth->execute($data);
        if( $sth->rowCount() > 0){
            return $this->db->lastInsertId();
        }else{
            return false;
        }

    }

    
}