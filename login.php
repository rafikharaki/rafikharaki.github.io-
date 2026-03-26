<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>

    <h2 align="center">Login</h2>
    <form action="proses.php" method="POST">
        <table border="1" align="center" cellpadding="8" cellspacing="0">
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="email_user" placeholder="Masukkan username" required>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="pass_user" placeholder="Masukkan password" required>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Login">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
