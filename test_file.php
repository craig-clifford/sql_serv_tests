<?php
//get the payload
global $conn;
$useridx = 35;
$ridx = $_GET['rid'];
//$plnx = $_GET['payplan'];
//$cidx = $_GET[cid];
//
////create the registration record
//
//$item_fname = $_GET['first_name'];
//$item_lname = $_GET['last_name'];
//$item_email = $_GET['email'];
//$item_street = $_GET['address'];
//$item_city = $_GET['city'];
//$item_state = $_GET['state'];
//$item_zipcode = $_GET['zip'];
//$item_dob = $_GET['dob'];
//$item_cellphone = $_GET['phone'];
//$item_hsdtype = $_GET['hsdtype'];
//$item_placeissue = $_GET['placeissue'];
//$item_dateissue = $_GET['hsd_date'];
//$item_paymethod = $_GET['paymenttype'];
//$item_paysource = $_GET['paymentsource'];
//$item_program = $_GET['program'];
//$item_prevstu = $_GET['prevstu'];
//$item_experience = $_GET['experience'];
//$hash = md5( rand(0,1000) );

include_once 'connectsql.php';

/*-----------------------------------------SQL Query--------------------------------------------------*/
$params = array();
$sql = "INSERT INTO access.registrations (fname, lname, email, street, city, state, zipcode, dob, cellphone, hsdtype, placeissue, 
        dateissue, paymethod, paysource, program, school, class, classname, notes, prevstu, hash, payplan)
        VALUES (".sql_params($params).")";

$params = array( $item_fname, $item_lname, $item_email, $item_street, $item_city, $item_state, $item_zipcode, $item_dob, $item_cellphone,
    $item_hsdtype, $item_placeissue, $item_dateissue, $item_paymethod, $item_paysource, $item_program, $item_school, $item_Class,
    $item_Class_Name, $item_experience,$item_prevstu, $hash, $plnx);

//$stmt = sqlsrv_query( $conn, $sql, $params );
conlog($sql);
conlog($useridx);
conlog($ridx);
/*-----------------------------------------Enrollment-------------------------------------------------*/

// enroll the student
// add to invoice datasheet? 0 = yes
//if ($plnx == "A" || $plnx == "B" || $plnx == "C" || $plnx == "D" || $plnx == "DA" || $plnx == "PIF") {
//    $invpifx = "";
//} else {
//    $invpifx = "0";
//}
//
//$tsql = "UPDATE access.registrations
//         SET payplan = '$plnx',
//		 enrolled = 'true',
//		 assignedby = '$useridx',
//		 invpif = '$invpifx',
//		 enrolldate = GETDATE()
//		 WHERE id = '$ridx'";
//
//$stmt1 = sqlsrv_query($conn, $tsql);
///*---  ---*/
//if ($stmt1) {
//    echo "true";
//
//    $tsql2 = "INSERT INTO access.actions (regid, actionTaken, content, userid,classid)
//            VALUES (?, ?, ?, ?, ?)";
//    $params2 = array($ridx, 'Enrolled Student from Cyanna', "PayPlan: $plnx" , $useridx, $cidx);
//    $stmt2 = sqlsrv_query($conn, $tsql2, $params2);
//    if ($stmt2) {
//        sqlsrv_commit($conn);
//    }
//} else {
//    echo "false";
//}
//sqlsrv_close($conn);


$tsql = "SELECT id, exam, 
       FORMAT([testdate], 'MMMM dd, yyyy') as testdate,
        testtime,
        school, 
        FORMAT([closed], 'MMMM dd, yyyy') as closed 
        FROM  access.nha 
        where school = 'OSP' AND exam = 'CMA' AND closed > GETDATE() order by testdate DESC";

$stmt = sqlsrv_query($conn, $tsql);
$rows = sqlsrv_has_rows( $stmt );

if ($rows == 'true') {
    echo '<div style="margin:0px;padding:0px;">
                    <div class="div2" style="margin-bottom:18px;">
                    <div class="div1">
                    <table class="tableclass">
                    <tr><th>TESTING DATE</th><th>EXAM TIME</th><th><span class="hidden-xs">REGISTRATION</span><span class="visible-xs-inline">REG</span> DATE</th></tr>';
    while ($row = sqlsrv_fetch_array($stmt)){
        echo "<tr><td>" .$row['exam']. " - ".$row['testdate'] . "</td><td>" . $row['testtime'] . " </td><td>" . $row['closed'] . " </td></tr>";
    }
    echo '
            </table></div></div></div>';
} else {
    echo "<div class=\"div2\" style=\"margin-bottom:18px;\"><div class=\"div1\"><h5 class=\"h41\">No dates scheduled. Please call the office</h5></div></div>";
}








?>