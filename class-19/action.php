<?php

    require_once './vendor/autoload.php';

    use App\classes\FullName;

    $result = '';
//    $name = $_POST['full_name_btn'];
//    $page = $_GET['page'];
    if (isset($_GET['page'])){
        if ($_GET['page'] == 'home'){
            include "./pages/home.php";
        }
        elseif ($_GET['page'] == 'full-name'){
            include "./pages/fullName.php";
        }
        elseif ($_GET['page'] == 'calculator'){
            include "./pages/calculator.php";
        }
    }
    elseif (isset($_POST['full_name_btn'])){
        $fullName = new FullName($_POST);
        $result = $fullName->getFullname();
        include "./pages/fullName.php";
    }

?>