<?php
$teste = 0;
if (isset($_POST['teste'])) {
    $teste = $_POST['teste'];
}

if ($teste == 'sim') {
    header('Location: login.html'); 
    exit();
}
?>
