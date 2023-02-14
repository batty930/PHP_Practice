<?php
if (!function_exists('session_is_registered')) {
    function session_is_registered($name) {
        if (isset($_SESSION[$name])) {
            return true;
        } else {
            return false;
        }
    }
}
 
if (!function_exists('session_register')) {
    function session_register() {
        $args = func_get_args();
        foreach ($args as $key) {
            $_SESSION[$key] = $GLOBALS[$key];
        }
    }
}
 
if (!function_exists('session_unregister')) {
    function session_unregister($name) {
        unset($_SESSION[$name]);
    }
}?>



<?php
session_start();
$name=$_POST["name"];
$password=$_POST["password"];
if($name !="test" || $password !="1234")
{
    echo "帳號或密碼輸入錯誤";
    exit;
}
session_register("password","name");
?>
