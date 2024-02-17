<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
</head>
<body>
    <center>
    <div class="form">
    <h1>Silahkan register</h1>
    <form action = "proses_register.php" method = "POST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="username" name="username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>NamaLengkap</td>
                <td><input type="text" name="NamaLengkap" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>

            </tr>

            <td></td>

            <br>

            <td><input type="submit" value="register"></td>

            </table>
            </form>
</div>
        </body>
        </html>