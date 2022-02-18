<?php
    
    //Koneksi ke database
    $conn=mysqli_connect('localhost','root','','dbtiket');

    //Mengambil data dari form
    $user = $_POST['username'];
    $pass = $_POST['password'];

    //Proses query
    $sql = "SELECT * FROM tbuser WHERE username='$user' AND password='$pass'";
    $query=mysqli_query($conn, $sql);
    $row=mysqli_num_rows($query);
    if($row>0){
        $data=mysqli_fetch_array($query);
        if($data['username']=="admin"){
            echo "<script>
                    location.href = 'admdash.php';
                </script>";
        }
        else{
            echo "<script>
                    location.href = 'dashboard/';
                </script>";
        }
    }
    else{
        echo "<script>
                alert ('Username atau Password tidak ditemukan!');
                location.href = 'index.php';
            </script>";
    }
?>