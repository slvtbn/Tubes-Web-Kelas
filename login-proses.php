<?php 
    include 'koneksi.php';
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($koneksi, $sql);

        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION['login'] = true;
                header('location:admin.php');
            }
        }else {
            echo "
                <script>
                    alert('Username atau Password Salah, Silahkan Coba Lagi');
                    window.location.href = 'login.php';
                </script>
            ";
        }
    }

?>