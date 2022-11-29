<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    include_once("../includes/conexao.php");
    $sql = "CALL sp_validate_login_usuario $email, $password";
    $result = $conexao->query($sql);

    if($result->num_rows > 0) {
        $return = true;
    }
    else {
        $return = false;
    }

    echo json_encode(array("retorno"=>$return));
?>