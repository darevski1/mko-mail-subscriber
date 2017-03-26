<?php
require_once ('db.php');
    $msg = "";
    $error = false;
    $hoy = date('Y-m-d H:i:s');

if (isset($_POST['email']) && !empty($_POST['email'] !='') && (isset($_POST['fname']) && !empty($_POST['fname']) != ''))
    {
        $email = $_POST['email'];
        $fname = $_POST['fname'];

        $stmt = $pdo->prepare("INSERT INTO subscriber(email, timeinsert, fname) VALUES(:email, :hoy, :fname)");

        $stmt->bindparam(':email', $email);
        $stmt->bindParam(':hoy', $hoy);
        $stmt->bindParam(':fname', $fname);
        $stmt->execute();

        if ($stmt){
            echo  "Ви благодариме!!!!";;
            header('Refresh:4; url=index.php');
        }
    }
    else{
        $error = true;
        $msg  .= "Венс";
        header('Refresh:4; url=index.php', 'UTF-8');
     }if ($error){
    echo $msg;
    }

?>






