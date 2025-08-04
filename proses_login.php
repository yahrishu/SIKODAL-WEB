<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username = ?";
$stmt = $koneksi->prepare($query);

if (!$stmt) {
    die("Prepare statement gagal: " . $koneksi->error);
}

$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Result</title>
    <!-- Import SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
if ($password == $user['password']) {
    $_SESSION['username'] = $user['username'];
    $_SESSION['level'] = $user['level'];
    $_SESSION['nama_lengkap'] = $user['nama_lengkap'];

    $nama_lengkap = htmlspecialchars($user['nama_lengkap']);

    if ($user['level'] == 'pelaksana') {
        echo "
        <script>
            Swal.fire({
                title: 'Login Berhasil!',
                text: 'Selamat datang, $nama_lengkap.',
                icon: 'success'
            }).then((result) => {
                window.location = 'dashboard.php';
            });
        </script>";
    } elseif ($user['level'] == 'admin') {
        echo "
        <script>
            Swal.fire({
                title: 'Login Berhasil!',
                text: 'Selamat datang, $nama_lengkap.',
                icon: 'success'
            }).then((result) => {
                window.location = 'master/dashboard.php';
            });
        </script>";
    } else {
        echo "
        <script>
            Swal.fire({
                title: 'Error!',
                text: 'Level user tidak dikenali!',
                icon: 'error'
            }).then((result) => {
                window.location = 'index.php';
            });
        </script>";
    }
} else {
    echo "
    <script>
        Swal.fire({
            title: 'Gagal!',
            text: 'Password salah!',
            icon: 'error'
        }).then((result) => {
            window.location = 'index.php';
        });
    </script>";
}
?>
</body>
</html>
