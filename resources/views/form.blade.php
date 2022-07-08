@extends('layouts.modul5')

@section('header')

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>Alat Musik</title>
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script>
		function createCookie(name, value, days) {
			var expires;
			if (days) {
				var date = new Date();
				date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
				expires = "; expires=" + date.toGMTString();
			}
			else {
				expires = "";
			}
			document.cookie = name + "=" + value + expires + "; path=/";
		}

		function getCookie(c_name) {
			if (document.cookie.length > 0) {
				c_start = document.cookie.indexOf(c_name + "=");
				if (c_start != -1) {
					c_start = c_start + c_name.length + 1;
					c_end = document.cookie.indexOf(";", c_start);
					if (c_end == -1) {
						c_end = document.cookie.length;
					}
					return unescape(document.cookie.substring(c_start, c_end));
				}
			}
			return "";
		}

		var temp = getCookie('name');
		$(document).ready(function () {
			$('body').css("background-color", temp);
			if (temp == 'white') {
				$('.kiri').css("background-color", "pink");
				$('.kiri').css("color", "black");
				$('nav').css("background-color", "black");
				$('nav').css("color", "black");
				$('.kanan').css("background-color", "#d6e0f0");
				$('.kanan').css("color", "black");
				$('header').css("background-color", "aqua");
				$('header').css("color", "black");
				$('.tengah').css("background-color", "white");
				$('.tengah').css("color", "black");
				$('footer').css("background-color", "chartreuse");
				$('footer').css("color", "black");

			} else {
				$('.kiri').css("background-color", "grey");
				$('.kiri').css("color", "white");
				$('nav').css("background-color", "black");
				$('nav').css("color", "white");
				$('.kanan').css("background-color", "grey");
				$('.kanan').css("color", "white");
				$('header').css("background-color", "grey");
				$('header').css("color", "white");
				$('.tengah').css("background-color", "black");
				$('.tengah').css("color", "white");
				$('footer').css("background-color", "black");
				$('footer').css("color", "white");


			}
			$("input[type='checkbox']").prop('checked', (temp == 'black'));
		});

		$(document).on("click", '#save-btn', function () {
			if (temp == 'black') {
				$('.kiri').css("background-color", "pink");
				$('.kiri').css("color", "black");
				$('nav').css("background-color", "black");
				$('nav').css("color", "black");
				$('.kanan').css("background-color", "#d6e0f0");
				$('.kanan').css("color", "black");
				$('header').css("background-color", "aqua");
				$('header').css("color", "black");
				$('.tengah').css("background-color", "white");
				$('.tengah').css("color", "black");
				$('footer').css("background-color", "chartreuse");
				$('footer').css("color", "black");
				temp = 'white';
			} else {
				$('.kiri').css("background-color", "grey");
				$('.kiri').css("color", "white");
				$('nav').css("background-color", "black");
				$('nav').css("color", "white");
				$('.kanan').css("background-color", "grey");
				$('.kanan').css("color", "white");
				$('header').css("background-color", "grey");
				$('header').css("color", "white");
				$('.tengah').css("background-color", "black");
				$('.tengah').css("color", "white");
				$('footer').css("background-color", "black");
				$('footer').css("color", "white");
				temp = 'black';
			}
			$('body').css("background-color", temp);



			createCookie('name', temp, 5);
		});
	</script> -->
</head>

<header>
		<ul class="nav-list">
			<img src="umm.png" alt="" height="70px" width="200px">
		</ul>
		<h2 class="header">Alat Musik</h2>
		<nav>
				<a style="color: palevioletred" href="/">Home</a>
                <a style="color: palevioletred" href="/profile">Profile</a>
                <a style="color: palevioletred" href="/kategori">Kategori</a>
				<a style="color: palevioletred" href="/form">Form</a>
				<a style="color: palevioletred" href="/news">Admin</a>
            </nav>
	</header>
<!-- <header>
            <img class="logo" src="./index_files/logo.png" alt="logo">
            <h2 class="judul">Berita</h2>
            <nav>
                <a style="color: palevioletred" href="/">Home</a>
                <a style="color: palevioletred" href="/profile">Profile</a>
                <a style="color: palevioletred" href="/list1">List</a>
				<a style="color: palevioletred" href="/news">Admin</a>
            </nav>
            <div class="modes">
				<div class="mode">
				<input type="checkbox" class="checkbox" id="checkbox">
					<label for="checkbox" class="label">
					<p class="on">ON</p>
					<p class="off">OFF</p>
					<div class="ball"></div>
					</label>
				</div>
			</div> 
            <script src="./index_files/dark.js"></script>
        </header> -->

<!-- <header>
            <img class="logo" src="./index_files/logo.png" alt="logo">
            <h2 class="judul">Profile</h2>
            <nav>
				<a style="color: palevioletred" href="/">Home</a>
                <a style="color: palevioletred" href="/profile">Profile</a>
                <a style="color: palevioletred" href="/list1">List</a>
				<a style="color: palevioletred" href="/news">Admin</a>
            </nav>
            <div class="modes">
				<div class="mode">
				<input type="checkbox" class="checkbox" id="checkbox">
					<label for="checkbox" class="label">
					<p class="on">ON</p>
					<p class="off">OFF</p>
					<div class="ball"></div>
					</label>
				</div>
			</div> 
            <script src="dark.js"></script>
        </header> -->
@endsection

@section('kanan')
<div class="kanan">
		<h3>Pencarian</h3>
		<input type="search" value="" id="search" onchange="openPage()">

		<script>
			function openPage() {
				var x = document.getElementById("search").value;
	
				if (x === "home") {
					window.open("index.php");
				}

				if (x === "bass") {
					window.open("page1.php");
				}
				
				if (x === "gitar") {
					window.open("index.php");
				}

				if (x === "drum") {
					window.open("page2.php");
				}

				if (x === "biola") {
					window.open("page4.php");
				}

				if (x === "piano") {
					window.open("page3.php");
				}

				if (x === "kompas") {
					window.open("https://www.kompas.com/");
				}

				if (x === "cnn") {
					window.open("https://www.cnnindonesia.com/");
				}

				if (x === "tempo") {
					window.open("https://www.tempo.co/");
				}

				if (x === "profil") {
					window.open("profil.php");
				}
	
				if (x === "kategori") {
					window.open("kategori.php");
				}
				if (x === "form") {
					window.open("form.php");
				}
	
			}
		</script>

		<h1>Berita Utama</h1>
		<h2><a href="https://www.cnnindonesia.com/nasional/20220412193415-32-783938/jokowi-jamin-anggaran-kpu-dan-bawaslu-untuk-pemilu-2024">Jokowi Jamin Anggaran KPU dan Bawaslu untuk Pemilu 2024</a></h2>
		<img src="jokowi.jpeg" alt="" height="200px" width="200px">
		<p>Selasa, 12 Apr 2022 22:53 WIB</p>
		<br>
		<h2><a href="https://www.cnnindonesia.com/nasional/20220412213533-12-783976/polisi-dalami-motif-pengeroyokan-ade-armando">Polisi Dalami Motif Pengeroyokan Ade Armando</a></h2>
		<img src="ade.jpeg" alt="" height="200px" width="200px">
		<p>Selasa, 12 Apr 2022 19:23 WIB</p>
		<br>
		<h2><a href="https://www.cnnindonesia.com/ekonomi/20220412124953-92-783660/tolak-blt-buruh-desak-pemerintah-gelontorkan-subsidi-minyak-goreng">Tolak BLT, Buruh Desak Pemerintah Gelontorkan Subsidi Minyak Goreng</a></h2>
		<img src="wartawan.jpeg" alt="" height="200px" width="200px">
		<p>Selasa, 12 Apr 2022 19:23 WIB</p>
	</div>
<!-- <div class="kanan">
            <div class="pencarian">
                <input class="pencarian2" type="text" placeholder="Cari..." required>
                <input class="tombolpencarian" type="button" value="Cari">
                
            </div>
            <h3 class="judulkanan" style="color: rgb(29, 163, 240)" align="center"> Berita Utama Populer</h3>
            <ol class="isikanan" type="1">
            <h1>Berita Utama</h1>
		    <h2><a href="https://www.cnnindonesia.com/nasional/20220412193415-32-783938/jokowi-jamin-anggaran-kpu-dan-bawaslu-untuk-pemilu-2024">Jokowi Jamin Anggaran KPU dan Bawaslu untuk Pemilu 2024</a></h2>
		    <img src="jokowi.jpeg" alt="" height="200px" width="200px">
		    <p>Selasa, 12 Apr 2022 22:53 WIB</p>
		    <br>
		    <h2><a href="https://www.cnnindonesia.com/nasional/20220412213533-12-783976/polisi-dalami-motif-pengeroyokan-ade-armando">Polisi Dalami Motif Pengeroyokan Ade Armando</a></h2>
		    <img src="ade.jpeg" alt="" height="200px" width="200px">
		    <p>Selasa, 12 Apr 2022 19:23 WIB</p>
		    <br>
		    <h2><a href="https://www.cnnindonesia.com/ekonomi/20220412124953-92-783660/tolak-blt-buruh-desak-pemerintah-gelontorkan-subsidi-minyak-goreng">Tolak BLT, Buruh Desak Pemerintah Gelontorkan Subsidi Minyak Goreng</a></h2>
		    <img src="wartawan.jpeg" alt="" height="200px" width="200px">
		    <p>Selasa, 12 Apr 2022 19:23 WIB</p>
            </ol>
    
        </div> -->
@endsection

@section('tengah')
<div class="tengah">
    <div class="ngak">
    <br>
		<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// primary validate function
	function validate($str) {
		return trim(htmlspecialchars($str));
	}

	if (empty($_POST['name'])) {
		$nameError = 'Name should be filled';
	} else {
		$name = validate($_POST['name']);
		if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) {
			$nameError = 'Name can only contain letters, numbers and white spaces';
		}
	}

	if (empty($_POST['email'])) {
		$emailError = 'Tolong masukan email anda';
	} else {
		$email = validate($_POST['email']);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailError = 'Invalid Email';
		}
	}

	if (empty($_POST['nim'])) {
		$nimError = 'nim cannot be empty';
	} else {
		$nim = validate($_POST['nim']);
		if (strlen($nim) < 12) {
			$nimError = 'panjang sampai 12 karakter';
		}
	}

	// see shorthand conditionals chapter

	$deskripsi = !empty($_POST['deskripsi']) ? validate($_POST['deskripsi']) : "";

	if (empty($_POST['gender'])) {
		$genderError = 'Tolong masukan gender anda';
	} else {
		$gender = $_POST['gender'];
	}

  if (empty($_POST['hobi'])) {
		$hobiError = 'Tolong masukan hobi anda';
	} else {
		$hobi = $_POST['hobi'];
	}

	$remember = !empty($_POST['remember']) ? filter_var($_POST['remember'], FILTER_VALIDATE_BOOLEAN) : ""; 

	if (empty($nameError) && empty($emailError) && empty($nimError) && empty($genderError)) {
		// great form filling
		
		echo "<br>
			Name: $name <br>
			Email: $email <br>
			nim: $nim <br>
			hobi: $hobi <br>
			deskripsi: $deskripsi <br>
			Gender: $gender <br>
			Remember Me: $remember
		";
		exit(); // terminates the script
	} 


}

?>
<table rules="rows">
<form method="POST" action="">
  <tr>
	Name:
	<input type="text" name="name" value="<?php if (isset($name)) echo $name ?>"> 
	<span class="error"><?php if (isset($nameError)) echo $nameError ?></span><br>
 </tr>
 <br>
 <tr>
	nim: 
	<input type="nim" name="nim"> 
	<span class="error"><?php if (isset($nimError)) echo $nimError ?></span><br>
 </tr>
 <br>
 <tr>
  Email: 
	<input type="text" name="email" value="<?php if (isset($email)) echo $email ?>"> 
	<span class="error"><?php if (isset($emailError)) echo $emailError ?></span><br>
 </tr>
 <br>
 <tr>
	Tanggal Lahir: 
	<input type="date" name="tgl" value="<?php if (isset($tgl)) echo $tgl ?>"><br>
</tr>
<br>
	<tr>
	Jenis Kelamin: 
		laki-laki
		<input type="radio" name="gender" value="laki-laki" <?php if (isset($gender) && $gender === "laki-laki") echo "checked" ?>> 
		perempuan
		<input type="radio" name="gender" value="perempuan" <?php if (isset($gender) && $gender === "perempuan") echo "checked" ?>>
	<span class="error"><?php if (isset($genderError)) echo $genderError ?></span> <br>
</tr>
<br>
<tr>
	HOBI: 
		hobi 1
		<input type="checkbox" name="hobi" value="hobi 1" <?php if (isset($hobi) && $hobi === "hobi 1") echo "checked" ?>> 
		hobi 2
		<input type="checkbox" name="hobi" value="hobi 2" <?php if (isset($hobi) && $hobi === "hobi 2") echo "checked" ?>>
    hobi 3
		<input type="checkbox" name="hobi" value="hobi 3" <?php if (isset($hobi) && $hobi === "hobi 3") echo "checked" ?>>
	<span class="error"><?php if (isset($hobiError)) echo $hobiError ?></span> <br>
</tr>
<br>
<tr>
  Deskripsi: 
	<textarea name="deskripsi"><?php if (isset($deskripsi)) echo $deskripsi ?></textarea> <br>
</tr>
  </table>
	Remember Me: 
	<input type="checkbox" name="remember">
	<input type="submit" name="submit">
</form>
		</div>
		

	</div>
@endsection

@section('footer')
<footer>
            <p class="isifooter">
            <marquee>TNI AL berhasil menangkap dua kapal asing berbendera Malaysia, membawa jutaan ton Palm Acid Oil (PAO) ilegal, di perairan Bengkalis, Riau, Minggu (10/4). Ilustrasi (ANTARA FOTO/Fakhri Hermansyah)</marquee>
            </p>
        </footer>
    
@endsection