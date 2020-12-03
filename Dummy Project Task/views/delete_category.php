<?php
    require_once '../controllers/CategoriesController.php';
?>

<?php
    deleteCategory($_GET["category_id"]);
    echo  "<script type='text/javascript'>";
    echo "window.close();";
    echo "</script>";
?>