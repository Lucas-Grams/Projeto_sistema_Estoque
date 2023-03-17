<?php
    
    $conection;
    function connect(){
        global $conection;
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $dataBase = 'trabalhoPHP1';
        $conection = mysqli_connect($server, $user, $password, $dataBase) or die(mysqli_connect_error());
    }

    function query($sql){
        global $conection;
        mysqli_query($conection, "SET CHARACTER SET utf8");
        $query = mysqli_query($conection, $sql) or die(mysqli_connect_error($conection));
        return $query;
    }

    function close(){
        global $conection;
        mysqli_close($conection);
    }

?>