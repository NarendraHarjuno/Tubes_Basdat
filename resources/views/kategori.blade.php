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
		<h2 class="header">MENU MAKANAN</h2>
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
    <h2>Berita Terkini</h2>
		<p>klik tombol pencarian</p>
		
		<div class="dropdown">
		  <button onclick="myFunction()" class="dropbtn">pencarian</button>
		  <div id="myDropdown" class="dropdown-content">
			<input type="text" placeholder="pencarian" id="myInput" onkeyup="filterFunction()">
			<a href="https://www.kompas.com/">kompas</a>
			<a href="https://www.cnnindonesia.com/">CNN Indonesia</a>
			<a href="https://news.detik.com/">news detik</a>
			<a href="https://www.tempo.co/">tempo</a>
			<a href="https://www.antaranews.com/">antara news</a>
			<a href="https://www.merdeka.com/">merdeka</a>
			<a href="https://www.cnbcindonesia.com/news">cnbcindonesia</a>
		  </div>
		</div>
		
		<script>
		/* When the user clicks on the button,
		toggle between hiding and showing the dropdown content */
		function myFunction() {
		  document.getElementById("myDropdown").classList.toggle("show");
		}
		
		function filterFunction() {
		  var input, filter, ul, li, a, i;
		  input = document.getElementById("myInput");
		  filter = input.value.toUpperCase();
		  div = document.getElementById("myDropdown");
		  a = div.getElementsByTagName("a");
		  for (i = 0; i < a.length; i++) {
			txtValue = a[i].textContent || a[i].innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
			  a[i].style.display = "";
			} else {
			  a[i].style.display = "none";
			}
		  }
		}
		</script>
    </div>
    </div>
    <div class="pagination">
  <a href="#">&laquo;</a>
  <a href="index.html" class="active">1</a>
  <a href="page1.html">2</a>
  <a href="page2.html">3</a>
  <a href="page3.html">4</a>
  <a href="page4.html">5</a>
  <a href="#">&raquo;</a>
</div>
		</div>
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