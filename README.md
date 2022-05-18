<p align="center">
	PEMROGRAMAN WEB
</p>
<p align="center">
	TUGAS PRATIKUM 7
</p>
<p align="center">
	Dosen Pengampu : Agung Nugroho, M.Kom
</p>
<p align="center"> 
	<b>Tugas untuk memenuhi syarat penilain pada Pert-9</b>
</p>

<p align="center">
	<img src="Logo/logo.png" alt="UPB" width="350" height="350">
</p>

<p align="center">
                 Nama  : Jose Fisto
</p>
<p align="center">
                 NIM   : 312010119
</p>
<p align="center">
                 Kelas : TI.20 A.1
</p>

<br/>
<br/>

<p align="center">
	<b>UNIVERSITAS PELITA BANGSA</b>
</p>
<p align="center">
	<b>FAKULTAS TEKNIK</b>
</p>
<p align="center">
	<b>TEKNIK INFORMATIKA</b>
</p>
<p align="center">
	<b>TA 2021 / 2022</b>
</p>

<br></br>

<hr>
</hr>

<br></br>

# Laporan Praktikum 6

Dipertemuan kali ini akan saya akan mempelajari tentang PHP dasar pada html

1.  Pertama menjalankan web server dari menu XAMPP Control.

<p align="center">
	<img src="ss/ss0.png" alt="">
</p>

2. membuat folder lab7_php_dasar dan mengecek di http://localhost/lab7_php_dasar/
<p align="center">
	<img src="ss/ss1.png" alt="">
</p>

<p align="center">
	<img src="ss/ss2.png" alt="">
</p>

3. Selanjutnya buat directory pada php_dasar dengan kode berikut.

```php
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
<h1>Belajar PHP Dasar</h1>
<?php
echo "Hello World";
?>
</body>
</html>
```

Berikut hasil output
<p align="center">
	<img src="ss/ss3.png" alt="">
</p>

4.  menambahkan variable PHP

```php
<?php
$nim = "312010119";
$nama = 'Jose Fisto';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>
```

Berikut hasilnya 
<p align="center">
	<img src="ss/ss4.png" alt="">
</p>

5.  membuat file latihan2.php dan membuat kode sebagai berikut

```php
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
<h1>Predifine Variable</h1>
<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>
</body>
</html>
```

Menggunakan predivine variabel dengan metode $_GET

Merupakan metode mengambilkan data nilai dari input yang dikirim oleh user. Pada metode get untuk pengiriman data nilai menggunakan HTTP GET sehingga semuanya menjadi array dan tesimpan pada Query String. Query string terletak pada URL halaman web dan ditandai dengan "?". Dan sebagai contoh url halaman sebagai berikut ;

http://localhost/lab7_php_dasar/latihan2.php?nama=Jose%20Fisto

Hasil output PHP :
<p align="center">
	<img src="ss/ss5.png" alt="">
</p>

6. Membuat Form Input

```php
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
<label>Nama: </label>
<input type="text" name="nama">
<input type="submit" value="Kirim">
</form>
<?php
echo 'Selamat Datang ' . $_POST['nama'];
?>
</body>
</html>
```
Menggunakan predivine variabel dengan metode $_POST

**$_POST** merupakan metode mengambil nilai dari input yang dikirim oleh user melalui input FORM, baik itu jenis input text, textarea, select, radio box, checkox, dan yang lainnya.

Hasil output
<p align="center">
	<img src="ss/ss6.png" alt="">
</p>

7. Membuat data Operator

```php
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
<h2>Operator</h2>
<?php
$gaji = 5000000;
$pajak = 0.5;
$thp = $gaji - ($gaji*$pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>
</body>
</html>
```

dengan hasil
<p align="center">
	<img src="ss/ss7.png" alt="">
</p>

8.  membuat kondisi IF

```php
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
<h2>Kondisi IF</h2>
<?php
$nama_hari = date("l");
if ($nama_hari == "Sunday") {
 echo "Minggu";
} elseif ($nama_hari == "Monday") {
 echo "Senin";
} elseif ($nama_hari == "Tuesday") {
 echo "Selasa";
} else {
 echo "Rabu";
} 
?>
</body>
</html>
```

Hasil Output
<p align="center">
	<img src="ss/ss8.png" alt="">
</p>

9.  Membuat data kondisi Switch

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
<h2>Kondisi Switch</h2>
<?php
$nama_hari = date("l");
switch ($nama_hari) {
 case "Sunday":
 echo "Minggu";
 break;
 case "Monday":
 echo "Senin";
 break;
 case "Tuesday":
 echo "Selasa";
 break;
 default:
 echo "Sabtu";
}
?>
</body>
</html>
```

Hasil Output
<p align="center">
	<img src="ss/ss12.png" alt="">
</p>

10.  membuat perulangan For

```html
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>PHP Dasar</title>
</head>
<body>

<h2>Perulangan For</h2>
 <?php
echo "Perulangan 1 sampai 10 <br />";
for ($i=1; $i<=10; $i++) {
 echo "Perulangan ke: " . $i . '<br />';
}
echo "Perulangan Menurun dari 10 ke 1 <br />";
for ($i=10; $i>=1; $i--) {
 echo "Perulangan ke: " . $i . '<br />';
}
?>
  
</body>
</html>
```

Hasil Output
<p align="center">
	<img src="ss/ss9.png" alt="">
</p>

11.  membuat perulangan while

```html
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>PHP Dasar</title>
</head>
<body>

<h2>Perulangan While</h2>
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
while ($i<=10) {
 echo "Perulangan ke: " . $i . '<br />';
 $i++;
}
?>
  
</body>
</html>
```

Hasil Output
<p align="center">
	<img src="ss/ss10.png" alt="">
</p>

12.  membuat perulangan Dowhile

```html
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>PHP Dasar</title>
</head>
<body>

<h2>Perulangan Dowhile</h2>
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
do {
 echo "Perulangan ke: " . $i . '<br />';
 $i++;
} while ($i<=10);
?>
  
</body>
</html>
```

Hasil Output
<p align="center">
	<img src="ss/ss11.png" alt="">
</p>