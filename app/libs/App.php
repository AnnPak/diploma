<?

class App {
    public function __construct( $prefix = '/' ) {
        session_start();
        $get_url = isset($_GET['url']) ? htmlspecialchars($_GET['url']) : false;
        if ( $get_url ){
            $url = explode("/", rtrim($get_url, "/"));
        }else{
            $url[] = "index";
        }
        $file_controller = __DIR__.'/..'.$prefix.'controllers/'.$url[0].'Controller.php';
        
        if (file_exists($file_controller)) {
            require_once $file_controller;
            $class_name = $url[0] . "Controller";
            
            if (class_exists($class_name)) {
                $controller = new $class_name($prefix);
                if (isset($url[1])) {
                    if (method_exists($controller, $url[1])) {
                        if (isset ($url[2])) {
                            $controller->{$url[1]}($url[2]);
                        } else {
                            $controller->{$url[1]}();
                        }
                    } else {
                        self::showError('Error!Method dose not exists!!!');
                    }
                } else {
                    $controller->index();
                }
            } else {
                self::showError('Error! Controller Class dose not exists!!!');
            }
        } else {
            self::showError('Error! Controller dose not exists!!!');
        }
    }

    static function showError($error) {
        echo $error;
    }

    static function dump($param) {
        echo '<pre style="background-color: #eee; padding:10px" >';
        echo '</pre>';
    }

}