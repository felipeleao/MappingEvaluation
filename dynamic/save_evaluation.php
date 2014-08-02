<?php

    include_once("../config/constants.php");
    include_once("../login/security.php");

    protectPage(); //Set the script as a protected resource


    // checks if a form has been posted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //open connection to database
        $connection = mysql_connect(SGBD_SERVER.":".SGBD_PORT, SGBD_USER, SGBD_PASSWORD)
                        or die("MySQL: It wasn't possible to connect to th Database [".SGBD_SERVER.":".SGBD_PORT."].");
        mysql_select_db(SGBD_SCHEMA, $connection) or die("MySQL: It wasn't possible to open the schema [".SGBD_SCHEMA."].");


        $sql_insert_evaluation = "insert into evaluation (id_user, id_synset, correct) values (".$_SESSION['usuarioID'].",".$_POST['synset'].",".$_POST['evaluation'].");";
        $query_insert_evaluation = mysql_query($sql_insert_evaluation);// or die (mysql_error("error"));
        if($query_insert_evaluation){
            $mensagem = "sucesso";
        }else{
            $mensagem = "falha";
        }


        $return = array('meesage'=>$mensagem);
        //outputs the array as JSON
        echo json_encode($return);
    }




?>
