<?php
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "dms";
        
    private $conn;
    
    function __construct() {
        $this->conn = $this->connectDB();
        if(!empty($this->conn)) {
            $this->selectDB();
        }
    }
    
    function connectDB() {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
    }
    //import from db controller of secure remember login
    function runBaseQuery($query) {
        $result = mysqli_query($this->conn,$query);
        while($row=mysqli_fetch_assoc($result)) {
        $resultset[] = $row;
        }		
        if(!empty($resultset))
        return $resultset;
}



function runQuery($query, $param_type, $param_value_array) {

$sql = $this->conn->prepare($query);
$this->bindQueryParams($sql, $param_type, $param_value_array);
$sql->execute();
$result = $sql->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $resultset[] = $row;
    }
}

if(!empty($resultset)) {
    return $resultset;
}
}

function bindQueryParams($sql, $param_type, $param_value_array) {
$param_value_reference[] = & $param_type;
for($i=0; $i<count($param_value_array); $i++) {
    $param_value_reference[] = & $param_value_array[$i];
}
call_user_func_array(array(
    $sql,
    'bind_param'
), $param_value_reference);
}

function insert($query, $param_type, $param_value_array) {
$sql = $this->conn->prepare($query);
$this->bindQueryParams($sql, $param_type, $param_value_array);
$sql->execute();

    }

    function registration_insert($query, $param_type, $param_value_array) {
        $sql = $this->conn->prepare($query);
        $this->bindQueryParams($sql, $param_type, $param_value_array);
        $sql->execute();
         return true;
            }

function update($query, $param_type, $param_value_array) {
$sql = $this->conn->prepare($query);
$this->bindQueryParams($sql, $param_type, $param_value_array);
$sql->execute();
}
    
    function selectDB() {
        mysqli_select_db($this->conn, $this->database);
    }
    
    function numRows($query) {
        $result  = mysqli_query($this->conn, $query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
	
	function insert_data($query) {
        $result  = mysqli_query($this->conn, $query);
        return $result;
    }
    
    
    function getRecords($sql) {
        $result = $this->conn->query($sql);
        return $result;
    }
    function displayError($query){
        $result  = mysqli_query($this->conn, $query);
        return $this->conn->error;
    }
}