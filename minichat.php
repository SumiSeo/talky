

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talky // 💬 Let's talk about that ! </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
        <?php 
        $username = isset($_COOKIE["username"]) ? $_COOKIE["username"] : "";
        ?>
     <main>
        <nav>
            <ul class="nav__lists">
                <li class="logo">Talky </li>        
                <li> <h4>Hello! <span> <?php echo $username?></span></h4></li>  
                <div class="lists">
                    <li><a>Login</a></li> 
                    <li><a>Bookmark</a></li> 
                </div> 
                
            </ul>
       
        </nav>
     <section>
   
        <aside>
            <div class="friends">
                12
            </div>
        </aside>
        <article>
            <form action="minichat_post.php" method="post">
                <div class="username__box">
                    <label  for="username">Username : </label>
                    <input 
                    value = <?php echo $username;?>
                    class="username" id="username" name="username"type="text">
                </div>
                <div class="message__box">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
        
                <input class="submit" value="send" type="submit">
                <input class="reset" class="reset" value="reset" type="reset">
            </form>
        </article>
    </section>   
        <div class="user__lists">
        <?php 
            include("showUsers.php")
        ?>
        </div>
       
    </main>
<script src="index.js"></script>
</body>
</html>