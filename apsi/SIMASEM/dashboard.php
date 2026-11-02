<?php
include "includes/auth.php";
?>

<!DOCTYPE html>
<html>

<head>

<?php include "includes/header.php"; ?>

<title>Dashboard</title>

</head>

<body>

<?php include "includes/navbar.php"; ?>

<div class="container">

    <h2>Selamat Datang,
        <?php echo $_SESSION['username']; ?>
    </h2>

    <div class="menu">

        <a href="qr_absensi.php">
            <button>QR Absensi</button>
        </a>

        <a href="kelola_absensi.php">
            <button>Kelola Absensi</button>
        </a>

        <a href="laporan_absensi.php">
            <button>Laporan</button>
        </a>

        <a href="logout.php">
            <button>Logout</button>
        </a>

    </div>

</div>

</body>

</html>