<?php 
    include '../koneksi.php';
    function upload() {
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if($error === 4) {
            echo "
                <script>
                    alert('Gambar Harus Diisi');
                    window.location.href = 'tambah-perlengkapan.php';
                </script>
            ";

            return false;
        }

        // cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "
                <script>
                    alert('File Harus Berupa Gambar');
                     window.location.href = 'tambah-perlengkapan.php';
                </script>
            ";

            return false;
        }

        // cek apakah ukurannya terlalu besar
        if($ukuranFile > 1000000) {
            echo "
                <script>
                    alert('Ukuran Terlalu Besar');
                    window.locatin.href = 'tambah-perlengkapan.php';
                </script>
            ";

            return false;
        }

        // lolos pengecekan untuk upload gambar
        // generate nama baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        $tempat =  move_uploaded_file($tmpName, '../image/' . $namaFileBaru);
        return $namaFileBaru;
    }

    if(isset($_POST['tambah'])) {
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $gambar = upload();

        $sql = "INSERT INTO tb_perlengkapan VALUES ('', '$gambar', '$nama', '$deskripsi', '$harga')";

        if(empty($nama) || empty($deskripsi) || empty($harga)) {
            echo "
                <script>
                    alert('Pastikan Anda Mengisi Seluruh Data');
                    window.location.href = 'tambah-perlengkapan.php';
                </script>
            ";
        }elseif(mysqli_query($koneksi, $sql)) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    window.location.href = 'perlengkapan.php';
                </script>
            ";
        }else {
            echo "
                <script>
                    alert('Terjadi Kesalahan');
                    window.location.href = 'tambah-perlengkapan.href';
                </script>
            ";
        }
    }elseif(isset($_POST['edit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $gambarLama = $_POST['gambarLama'];

        // cek apakah user pilih gambar atau tidak
        if($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarLama;
        }else {
            $gambar = upload();
        }

        $sql = "UPDATE tb_perlengkapan SET
                gambar = '$gambar', 
                nama_perlengkapan = '$nama', 
                deskripsi = '$deskripsi', 
                harga = '$harga'
                WHERE id_perlengkapan = '$id'";

        if(mysqli_query($koneksi, $sql)) {
            echo "
                <script>
                    alert('Data Perlengkapan Berhasil Diubah');
                    window.location.href = 'perlengkapan.php';
                </script>
            ";
        }else {
            echo "
                <script>
                    alert('Terjadi Kesalahan');
                    window.location.href = 'edit-perlengkapan.php';
                </script>
            ";
        }
    }elseif(isset($_POST['hapus'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM tb_perlengkapan WHERE id_perlengkapan = $id";
        if(mysqli_query($koneksi, $sql)) {
            echo "
                <script>
                    alert('Data Berhasil Dihapus');
                    window.location.href = 'perlengkapan.php';
                </script>
            ";
        }else {
            echo "
                <script>
                    alert('Data Gagal Dihapus');
                    window.location.href = 'perlengkapan.php';
                </script>
            ";
        }
    }else {
        header('location: perlengkapan.php');
    }
?>