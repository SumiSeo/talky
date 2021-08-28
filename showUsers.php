
<style>
<?php include 'style.css'; ?>
</style>

<?php

        try {
            $db = new PDO("mysql:host=localhost;dbname=batch13;charset=utf8", "root", "");
        }
        catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }
    
        $response = $db->query("SELECT pseudo, message, DATE_FORMAT(message_sent_date, '%d/%m/%Y') AS french_date  FROM minichat ORDER BY id DESC LIMIT 0,15 ");
        $response->bindColumn('pseudo', $showName);
        $response->bindColumn('message', $showMessage);
        $response->bindColumn('french_date', $showDate);
        // $response->bindColumn('day', $showDay);
        // $response->bindColumn('month', $showMonth);
        // $response->bindColumn('year', $showYear);
        while ($data = $response->fetch(PDO::FETCH_BOUND)) {
            $msgLimit = substr($showMessage, 0,15);
            $capitalName = strtoupper($showName);
            echo "<img class='user__profil' src='https://images.unsplash.com/photo-1524250502761-1ac6f2e30d43?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80'/>";
            echo "
            <div class='user__profil__box'>"."<div class='user__name'>" .htmlspecialchars($capitalName). "</div>".
             "<div class='user__message'> " .
             "<div class='user__msg'>" .htmlspecialchars($msgLimit)."...".
             "</div>"."<div class='user__date'>". htmlspecialchars($showDate)."</div>". "</div>"."</div>" ;
             echo"<br>";


            
        }
        $response->closeCursor();

?>