<?php
    include('db.php');

    if(isset($_GET["username"])){
        $username = $_GET["username"];
        $password = $_GET["password"];


        $db = new Database();
        
        $data = $db->auth($username, $password);
        
        if (count($data) == 1){
            $data = $data[0];

            $_SESSION['username'] = $data['username'];
            $_SESSION['nama'] = $data['nama'];
            echo $_SESSION['username'];

            setcookie("message", "Login Berhasil", time()-60);
            header('Location: home.php');

        }
        // back();
    }
    else{
        // back();
    }

    function saveToSession(){

    }

    function back(){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>