<?php
    require_once '../controllers/student_controller.php';
?>
<?php
    deleteStudent($_GET["id"]);
    echo  "<script type='text/javascript'>";
    echo "window.close();";
    echo "</script>";
?>