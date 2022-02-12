<?php
    //Koneksi ke database
    $conn = mysqli_connect('localhost','root','','dbtiket');

    //Untuk mengecek apakah data sudah terkirim
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $nama = $_POST['namalengkap'];
        $tgl = $_POST['tgllahir'];

        //Query untuk mengecek apakah ada username yang sama
        $sqlc = "SELECT username FROM tbuser WHERE username = '$user'";
        $query = mysqli_query($conn, $sqlc);
        //variabel data untuk mengambil username tersebut
        $data = mysqli_fetch_array($query);
        //Untuk mengecek apakah ada username yang sama didapat, jika tidak maka akan menjalankan proses tambah data. Jika iya maka akan dikembalikan ke pendaftaran.php
        if(isset($data['username'])){
            if($data['username'] == $user){
                echo"<script>
                    alert ('Username yang anda masukkan sudah digunakan!');
                    location.href='pendaftaran.php';
                </script>";
            }
        }
        else{
            //Query untuk menambahkan data ke database
            $sql = "INSERT INTO tbuser (username, password, namalengkap, tgllahir) VALUES ('$user', '$pass', '$nama', '$tgl')";
                        
            if(mysqli_query($conn, $sql)){
                echo"<script>
                    alert('Berhasil Mendaftar!');
                    location.href = 'index.php';
                </script>";
            }
            else{
                echo"<script>
                    alert('ERROR');
                    location.href = 'pendaftaran.php';
                </script>";
            }
        }         
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <script src="script/myscript.js"></script>
        <title>Pendaftaran - TicketBuddy</title>
    </head>
    <body>
        <header class="header">
            <h1 class="header-title">Ticket Buddy</h1>
            <hr class="ruler"/>
            <p class="header-text">"Your Buddy for your Ticket needs"</p>
        </header><br>
        <div class="logreg">
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
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
                        <label for="namalengkap" class="label">Nama Lengkap</label>
                    </ul>
                    <ul>
                        <input type="text" class="input" name="namalengkap" placeholder="Nama Lengkap" required>
                    </ul>
                    <ul>
                        <label for="tgllahir" class="label">Tanggal lahir</label>
                    </ul>
                    <ul>
                        <input type="date" class="input" name="tgllahir" required>
                    </ul>
                    <ul>
                        <input type="submit" class="logreg-btn" value="Daftar" name="login">
                    </ul>
                    <ul>
                        <a href="index.php" class="back">Kembali ke halaman awal</a>
                    </ul>            
                </div>
            </form>
        </div>
        <footer class="footer">
            <p class="footer-text">&copy 2022 I Gede Budiyasa</p>
        </footer>
    </body>
</html>