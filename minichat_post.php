<?php 
    if(isset($_POST["username"])){
        setcookie("username", $_POST["username"], time()+365*24*3600,null,null,false,true);
    }

    if($_POST["message"] AND $_POST["username"]){
        try {
            $db = new PDO("mysql:host=localhost;dbname=batch13;charset=utf8", "root", "");
        }
        catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }

       
        $username= $_POST["username"];
        $message= $_POST["message"];
        //1. 전송받은 데이터를 fetchColumn으로 데이터 베이스에 보내주기 
        $response = $db->prepare("INSERT INTO minichat(pseudo, message, message_sent_date, expiration_date) VALUES(:pseudo_name, :message_content, NOW(), DATE_ADD(NOW(), INTERVAL 2 MONTH)) ");
        $response->execute(array(
            'pseudo_name' => $username,
            'message_content' => $message 
        ));
        // $response->bindColumn('pseudo', $_COOKIE["username"]);
        // $response->bindColumn('message', $_COOKIE["message"]);
        // $response->execute();
        $response->closeCursor();
          
    }
    // $response = $db->query("SELECT pseudo, message FROM minichat");
    // $response->bindColumn('pseudo', $showName);
    // $response->bindColumn('message', $showMessage);
    // while ($data = $response->fetch()) {
    //     echo "☹️{$showName}<br>";
    //     echo "📒{$showMessage}<br>";
    //   }
    // $response->closeCursor();
    header("Location: minichat.php");
?>
