<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="utkarsh"/>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles/responsive.css" media="screen and (max-width: 1024px)"/>
    <title>Delta Flights</title>
</head>

<body>
    <?php $page='manager'; 
    include("header.inc"); 
    session_start(); 
    // redirect to enquire if opened this website directly
    if (!isset($_SESSION["firstname"])) {
        header("location:enquire.php");
        exit();
    };?>

    <section id="page_content">
        <!--
            page html here    
        -->
    </section>

    <?php include("footer.inc") ?>
</body>
</html>
