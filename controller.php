<?php

$host="localhost";
$username="root";
$pw="";
$db="send";
$conn=mysqli_connect($host,$username,$pw,$db);


function display($syntax){
    global $conn;
    $rows = [];
    $result = mysqli_query($conn,"$syntax");
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
function query($syntax){
    global $conn;
    mysqli_query($conn,$syntax);
    return mysqli_affected_rows($conn);
}
// ---------------------------------------------------------------
function delete($table,$pk){
    query("DELETE FROM $table WHERE $pk");
}
function update($table,$edit,$pk){
    query("UPDATE $table SET $edit WHERE $pk");
}

?>