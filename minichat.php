

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
            <div class="user__lists">
            <?php 
                include("showUsers.php")
            ?>
            </div>
            <!-- <div class="friends">
                <div class="friend__box">
                    <div class=friend__img></div>
                    <div class="friend__info">
                        <h6 class="friend__login">Marcus</h6>
                        <div class="friend__message">Hello<hi/div>
                    </div>
                </div>
            </div> -->
        </aside>
        <article>
            <form action="minichat_post.php" method="post">
                <div class="username__box">
                    <label  for="username">Name :</label>
                    <input 
                    value = <?php echo $username;?>
                    class="username" id="username" name="username"type="text">
                    <input class="submit" value="send" type="submit">
                    <input class="reset" class="reset" value="reset" type="reset">
                </div>
                <div>
                    
                </div>
                <div class="message__box">
                    <label for="message"></label>
                    <textarea name="message" id="message" cols="65" rows="30"></textarea>
                </div>
                
            </form>
        </article>
    </section>   
       
       
    </main>
<script src="index.js"></script>
</body>
</html>