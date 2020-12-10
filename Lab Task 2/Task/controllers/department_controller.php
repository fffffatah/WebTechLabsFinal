<?php
    require_once '../models/db_conn.php';
?>
<?php
    function getDepts(){
        $query="SELECT * FROM departments";
        return doQuery($query);
    }
?>