<?

use Libs\User as User;
class regController extends Controller {
    
    public function __construct( $prefix ) {
        parent::__construct( $prefix );
        
        $this->view->setTitle("Регистрация/Авторизация");
    }

    public function registration(){

       $name=htmlspecialchars($_POST['name']);
       $login=htmlspecialchars($_POST['login']);
       $email=htmlspecialchars($_POST['email']);
       $password=htmlspecialchars($_POST['password']);
       $password_confirm=htmlspecialchars($_POST['password_confirm']);

       if($password == ($password_confirm)){

            if($this->model->loginExist($login)){
                echo json_encode(array("error"=> "This login already exists"));
                die;
            }

            if($this->model->emailExist($email)){
                echo json_encode(array("error"=> "This e-mail already exists"));
                die;
            }

           $data=array(
               "login"=> $login,
               "role"=> 0,
               "password"=> md5($password),
               "name"=> $name,
               "email"=> $email

             );
            

            if ( $id = $this -> model -> registration($data)){
                $data['id']=$id;
                User::login($data);
                echo json_encode(array("error"=>""));
            }else{
                echo json_encode(array("error"=>"Error!"));
            }

        }else{
                echo json_encode(array("error"=> "Passwords don't match"));
            }
    }

    public function login(){
        $data["LOGIN"] = htmlspecialchars($_POST['login']);
        $data["PASSWORD"] = htmlspecialchars($_POST['password']);
        sleep(1);
        if($this-> model->loginExist($data["LOGIN"])){//проверка сущестования логина
            if( $user = $this->model->authorization($data) ){//если юзер уже авторизован
                User::login($user);
                echo json_encode(array("error"=> ""));
            }else{
                echo json_encode(array("error"=> "Error"));
            }

        }else{
            echo json_encode(array("error"=> "This login already exists"));
        }
    }

    public function logout(){
         User::logout();
         header('Location:'.MAIN_PREFIX.'/reg');
    }

}