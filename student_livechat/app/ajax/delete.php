<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_care_management";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     /*sql to delete a record*/
    $sql = "DELETE FROM users WHERE user_id='" . $_GET["user_id"] . "'";

    /*use exec() because no results are returned*/
    $conn->exec($sql);
     $em = "Your Livechat Account Deleted Successfully";
            # redirect to 'Instructor_index.php' and passing error message
            header("Location: ../../deleted.php?success=$em");

    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$conn = null;
?>

