<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <table>
    <h2>Data Anda</h2>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $_POST['nama'] ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $_POST['tgllahir'] ?></td>
    </tr>
    <tr>
        <td>Umur Anda</td>
        <td>:</td>
        <td>
            <?php
                $tgllahir = new DateTime($_POST['tgllahir']);
                $sekarang = new DateTime("today");
                if ($tgllahir > $sekarang) { 
                $thn = "0";
                $bln = "0";
                $tgl = "0";
                }
                $thn = $sekarang->diff($tgllahir)->y;
                $bln = $sekarang->diff($tgllahir)->m;
                $tgl = $sekarang->diff($tgllahir)->d;
                echo $thn." tahun ".$bln." bulan ".$tgl." hari";
            ?>
        </td>
    </tr>
    <tr>
        <td>Jenis Pekerjaan</td>
        <td>:</td>
        <td><?php echo $_POST['pekerjaan'] ?></td>
    </tr>
    </table>
</body>
</html>