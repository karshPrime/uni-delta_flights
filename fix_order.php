<?php $page='fix_order'; include("header.inc");

session_start();
print_r($_SESSION["errMsg"]);

if (!isset($_POST["firstname"]) && !isset($_SESSION["firstname"])){
    header("location:enquire.php");
    exit();
};
?>

<?php include("footer.inc") ?>
