<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <form method="POST" action="tampilan.php">
        <h2>Form Pengisian Data</h2>
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Nama Anda"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgllahir"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                    <td><select name="pekerjaan" id="">
                        <option value="">--Pekerjaan Anda--</option>
                        <option value="Rata-rata gaji untuk IT Support adalah Rp 4.000.000 per bulan">IT Support</option>
                        <option value="Rata-rata gaji untuk Web Developer adalah Rp 4.500.000 per bulan">Web Developer</option>
                        <option value="Rata-rata gaji untuk game developer sekala pemuka sekitar Rp3,2-5 juta per bulan">Game Developer</option>
                    </select>
                    </td>
            </tr>
        </table>
        <br>
        <td><button type="submit" name="submit" value="submit">Kirim</button></td>
    </form>
</body>
</html>