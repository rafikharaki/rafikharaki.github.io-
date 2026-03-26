<?php
session_start();

if (!isset($_SESSION['status_login'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Dashboard</span>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>
<div class="container mt-5">

    <div class="card shadow">
        <div class="card-body">
            <h3>
                Selamat datang, <?php echo $_SESSION['user_email']; ?> 👋
            </h3>
            <p>Kamu berhasil login.</p>
        </div>
    </div>

</div>
</body>
</html>