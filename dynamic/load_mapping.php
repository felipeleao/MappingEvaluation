<?php

    include_once("../config/constants.php");
    include_once("../login/security.php");

    protectPage(); //Set the script as a protected resource

    //open connection to database
    $connection = mysql_connect(SGBD_SERVER.":".SGBD_PORT, SGBD_USER, SGBD_PASSWORD)
                    or die("MySQL: It wasn't possible to connect to th Database [".SGBD_SERVER.":".SGBD_PORT."].");
    mysql_select_db(SGBD_SCHEMA, $connection) or die("MySQL: It wasn't possible to open the schema [".SGBD_SCHEMA."].");



    //Returned array (transformed to JSON)
    $arr = array();





    //======================================================================
    //Retrieve the next mapping that should be evaluated by the user.
    //======================================================================
    // $sql_synset = "select s.id as 'id', group_concat(w.word SEPARATOR ', ') as 'words', s.gloss as 'gloss' ".
    //                 " from synsets s inner join words w on w.id_synset = s.id ".
    //                 " where s.id = (SELECT (last_evaluated+1) from users u where u.id='".$_SESSION['usuarioID']."');";

    //Retrieves a synset not yet ealuated by any user
    $sql_synset = "SELECT ".
                    	"s.id as 'id', ".
                    	"group_concat(w.word SEPARATOR ', ') AS 'words', ".
                    	"s.gloss AS 'gloss' ".
                    "FROM synsets s  INNER JOIN words w ON w.id_synset = s.id ".
                    "WHERE s.id_supersense = ( ".
                    	"SELECT ss.id FROM supersenses ss ".
                    	"INNER JOIN synsets s ON s.id_supersense = ss.id ".
                    	"WHERE s.id NOT IN ( ".
                    		"SELECT e.id_synset FROM evaluation2 e GROUP BY e.id_synset ".
                    	") ".
                        "AND s.id IN ( ".
                            "SELECT shs.id_synset FROM synset_has_semtype shs where isRealMapping = false ".
                        ") ".
                    	"GROUP BY ss.id ".
                    	"ORDER BY ss.id ".
                    	"LIMIT 1 ".
                    ") ".
                    "AND s.id NOT IN ( ".
                		"SELECT e.id_synset FROM evaluation2 e GROUP BY e.id_synset ".
                	") ".
                    "AND s.id IN ( ".
                        "SELECT shs.id_synset FROM synset_has_semtype shs where isRealMapping = false ".
                    ") ".
                    "GROUP BY s.id ".
                    "ORDER BY RAND() ".
                    "LIMIT 1;";



    $query_synset = mysql_query($sql_synset);

    $num_result_synset = mysql_num_rows($query_synset);
    if($num_result_synset > 0){
        $result_synset = mysql_fetch_assoc($query_synset);

        $arr['noMoreEvaluations'] = false;
        $arr['synset'] = array(
                            'id'=>$result_synset[id],
                            'words'=>$result_synset[words],
                            'gloss'=>$result_synset[gloss]
                        );

        //======================================================================
        //Retrieve the semantic types related to the synset
        //======================================================================
        $sql_semtypes = "select st.name as 'name', st.definition as 'definition' from semantic_types st ".
                        "inner join synset_has_semtype sst on st.id = sst.id_semtype ".
                        "inner join synsets s on s.id = sst.id_synset WHERE s.id = ".$result_synset[id].";";

        $query_semtypes = mysql_query($sql_semtypes);

        //build an array with all semantic types related to the synset
        $semtypes_array = array();
        while ($row = mysql_fetch_assoc($query_semtypes)) {
            $semtypes_array[$row[name]] = $row[definition];
        }

        //Add to returnable array
        $arr['semtypes'] = $semtypes_array;


    }else{
        $arr['noMoreEvaluations'] = true;
    }




    //======================================================================
    //count evaluated synsets
    //======================================================================
    $sql_total_evaluated = "select count(*) as 'total' from (select * from evaluation2 e where id_user = '".$_SESSION['usuarioID']."' group by e.id_synset) as allregisters;";

    $query_total_evaluated = mysql_query($sql_total_evaluated);
    $result_total_evaluated = mysql_fetch_assoc($query_total_evaluated);

    if($result_total_evaluated[total] == null){
        $total_evaluated = 0;
    }else{
        $total_evaluated = $result_total_evaluated[total];
    }

    $arr['synsetsEvaluated']  = $total_evaluated;


    //======================================================================
    //Retrieve the total of mappings that must be conducted (specific for user)
    //======================================================================
    $sql_total = "select mappings_to_evaluate as 'total' from users where id = '".$_SESSION['usuarioID']."';";

    $query_total = mysql_query($sql_total);
    $result_total = mysql_fetch_assoc($query_total);



    $arr['totalSynsets']      = $result_total[total];


    //======================================================================
    // Build the output as JSON
    //======================================================================

    //outputs the array as JSON
    echo json_encode($arr);


    //======================================================================
    // If a connection was successfully open, close it
    //======================================================================

    //if(isset($connection)){
    //  mysql_close($connection);
    //}

?>
