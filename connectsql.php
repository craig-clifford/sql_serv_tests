<?php
$serverName = "tcp:ospcf.database.windows.net,1433";
$connectionOptions = array(
    "Database" => "HiveX_2018-07-13T03-00Z_Copy",
    "Uid" => "craigclifford@ospcf",
    "PWD" => "Icarus1..1"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
function sql_params($params){
    $cnt_ = count($params);
    $apar_ = array_fill(0, $cnt_, "?");
    $list_ = implode(', ', $apar_);
    return $list_;
}

function conlog(&$var_) {
    echo '<script>console.log('.json_encode($var_).')</script>';
}


//function sql_query($query, $params) {
//    global $conn;
//    $stmt = sqlsrv_query($conn, $query, $params);
//    return $stmt;
//}




//include_once 'connectsql.php';
//
///*-----------------------------------------SQL Query--------------------------------------------------*/
//$params = array( $item_fname, $item_lname, $item_email, $item_street, $item_city, $item_state, $item_zipcode, $item_dob, $item_cellphone,
//                 $item_hsdtype, $item_placeissue, $item_dateissue, $item_paymethod, $item_paysource, $item_program, $item_school, $item_Class,
//                 $item_Class_Name, $item_experience,$item_prevstu, $hash, $plnx);
//
//$sql = "INSERT INTO access.registrations (fname, lname, email, street, city, state, zipcode, dob, cellphone, hsdtype, placeissue,
//                                          dateissue, paymethod, paysource, program, school, class, classname, notes, prevstu, hash, payplan)
//        VALUES (".sql_params($params).")";
//$stmt = sqlsrv_query( $conn, $sql, $params );