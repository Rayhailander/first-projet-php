<?php
define('DB_SERVER',"localhost");
define('DB_HOST',"root");
define('DB_PWD',"");
define('DB_NAME',"manageruserdb");
$con = mysqli_connect(DB_SERVER,DB_HOST,DB_PWD,DB_NAME);
if ($con==false){
    die ( " erreur: impossible de se connecter".mysqli_connect-error());
}
function validation($data){
    $data=htmlspecialchars($data);
    $data=stripslashes($data);
    $data=trim($data);
    return $data;
}
?>