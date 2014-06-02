<?php
    include_once("../config/constants.php");
    include_once("../login/security.php");

    protectPage(); //Set the script as a protected resource

    //open connection to database
    $connection = mysql_connect(SGBD_SERVER.":".SGBD_PORT, SGBD_USER, SGBD_PASSWORD)
                    or die("MySQL: It wasn't possible to connect to th Database [".SGBD_SERVER.":".SGBD_PORT."].");
    mysql_select_db(SGBD_SCHEMA, $connection) or die("MySQL: It wasn't possible to open the schema [".SGBD_SCHEMA."].");

    //======================================================================
    //Retrieve the next mapping that should be evaluated by the user.
    //======================================================================
    $sql_synset = "select s.id as 'id', group_concat(w.word SEPARATOR ', ') as 'words', s.gloss as 'gloss' ".
                    " from synsets s inner join words w on w.id_synset = s.id ".
                    " where s.id = (SELECT (last_evaluated+1) from users u where u.id='".$_SESSION['usuarioID']."');";

    $query_synset = mysql_query($sql_synset);
    $result_synset = mysql_fetch_assoc($query_synset);


    //======================================================================
    //Retrieve the total of mappings that must be conducted (simply the number of synsets)
    //======================================================================
    $sql_total = "select count(*) as 'total' from synsets;";

    $query_total = mysql_query($sql_total);
    $result_total = mysql_fetch_assoc($query_total);


    //======================================================================
    //Retrieve the total of mappings that must be conducted (simply the number of synsets)
    //======================================================================
    $sql_semtypes = "select * from semantic_types st ".
                    "inner join synset_has_semtype sst on st.id = sst.id_semtype ".
                    "inner join synsets s on s.id = sst.id_synset WHERE s.id = ".$result_synset[id].";";

    $query_semtypes = mysql_query($sql_semtypes);
    $result_semtypes = mysql_fetch_assoc($query_semtypes);




    //======================================================================
    // Build array that will be ocnverted into JSON
    //======================================================================

    $arr = array (
            'synset'=>array(
                        'words'=>$result_synset[words],
                        'gloss'=>$result_synset[gloss]
                    ),
            'semtypes'=>array(
                        'Animate'=>'Definition for Animate semantic type',
                        'Human'=>'Another definition to be used for the second semantic type.'
                    ),
            'synsetsEvaluated'=>$result_synset[id]-1,
            'totalSynsets'=>$result_total[total],
            'noMoreEvaluations'=>false);

    //outputs the array as JSON
    echo json_encode($arr);


    //======================================================================
    // If a connection was successfully open, close it
    //======================================================================

    if(isset($connection)){
      mysql_close($connection);
    }

?>
