<?php

        try {
            $db = new PDO("mysql:host=localhost;dbname=batch13;charset=utf8", "root", "");
        }
        catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }
    
        $response = $db->query("SELECT pseudo, message, DATE_FORMAT(message_sent_date, '%D %M %Y') AS french_date  FROM minichat ORDER BY id DESC LIMIT 0,15 ");
        $response->bindColumn('pseudo', $showName);
        $response->bindColumn('message', $showMessage);
        $response->bindColumn('french_date', $showDate);
        // $response->bindColumn('day', $showDay);
        // $response->bindColumn('month', $showMonth);
        // $response->bindColumn('year', $showYear);
        while ($data = $response->fetch(PDO::FETCH_BOUND)) {
            $capitalName = strtoupper($showName);
            echo "User : ";
            echo htmlspecialchars($capitalName);
            echo "<br>";
            echo "Message : ";
            echo htmlspecialchars($showMessage);
            echo "<br>";
            echo "at : ";
            echo htmlspecialchars($showDate);
            echo "<br>";
            echo "<br>";
            
        }
        $response->closeCursor();

?>