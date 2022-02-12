<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <script src="script/myscript.js"></script>
        <title>TicketBuddy</title>
    </head>
    <body>
        <header class="header">
            <h1 class="header-title">Ticket Buddy</h1>
            <hr class="ruler"/>
            <p class="header-text">"Your Buddy for your Ticket needs"</p>
        </header><br>
        <div class="logreg">
            <form action="proseslogin.php" method="POST">
                <div class="logreg-content">
                    <ul>
                        <label for="username" class="label">Username</label>
                    </ul>
                    <ul>
                        <input type="text" class="input" name="username" placeholder="Username" required>
                    </ul>
                    <ul>
                        <label for="password" class="label">Password</label>                            
                    </ul>
                    <ul>
                        <input type="password" class="input" name="password" placeholder="Password" required>
                    </ul>
                    <ul>
                        <input type="submit" class="logreg-btn" value="Login" name="login">
                    </ul>  
                    <ul>
                        <hr class="ruler"/> 
                    </ul>
                    <ul>
                        <p class="register">Belum memiliki akun? <a href="pendaftaran.php">Daftar</a> Sekarang!</p>
                    </ul>             
                </div>
            </form>
        </div>
        <footer class="footer">
            <p class="footer-text">&copy 2022 I Gede Budiyasa</p>
        </footer>
    </body>
</html>