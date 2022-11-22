<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/connected.css">
    <title>Document</title>
</head>
<body>
    
<main>
    <div class="container">
            
        <h1>
            <?php
                require_once 'connection.php';

                session_start();

                if (!isset($_SESSION["user_login"])) {
                    header("location: login.php");
                }

                $cusername = $_SESSION["user_login"];

                $select_stmt = $db->prepare("SELECT * FROM users WHERE ids = :cuname");
                $select_stmt->execute(array(":cuname"=>$cusername));

                $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

                if (isset($_SESSION["user_login"])) {
                    print "Bienvenue, ".$row['names']." !";
                }

                if (isset($_POST['logout'])) {
                    header("location: logout.php");
                }
            ?>
        </h1>

            <form method="post">
                <input type="submit" id="logout" name="logout">    
            </form>   

    </div>
        
                

    </main>

    
    

</body>
</html>