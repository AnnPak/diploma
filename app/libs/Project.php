<?php

$mysqli=mysqli_connect(DBLH, DBNAME,DBPASS,DBUSER );


class Project{

    static function project( $data ){
        $_SESSION['PROJECT_ID']=$data['id'];
        $_SESSION['PROJECT_NAME']=$data['name'];
        $_SESSION['PROJECT_DATA_CREATE']=$data['data_create'];
        $_SESSION['PROJECT_DATA_SUCCESS']=$data['data_success'];
      
    }
    
    static function getName(){
        if (isset($_SESSION['PROJECT_NAME']) ){
            return $_SESSION['PROJECT_NAME'];
        }else{
            return false;
        }
    }

    function getList(): array
    {
        $connect=$GLOBALS["mysqli"];
        $result=$connect->query("SELECT*FROM projects");
        $data=array();
        while ($row = $result->fetch_assoc()){
            $data[$row["id"]]=$row;
        }

    return $data;

    }

    

    // function addProduct($data){
    //     $connect=$GLOBALS["mysqli"];

    //     $stmt = $connect -> prepare("INSERT INTO `projects`(`id`, `name`, `data_create`, `data_success`, `complited`) VALUES (NULL, ?, ?, ? )");
    //     $stmt->bind_param('sss', $data["name"], $data["desc"],  $data["file"], $data["date"]);
    //     if ($stmt->execute())
    //     {
    //         $stmt->close();
    //         return $connect->insert_id; 
    //     }
    //     else{
    //         $stmt->close();
    //         return 0;
    //     }
        

    // }
  
}
