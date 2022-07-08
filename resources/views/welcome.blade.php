@extends('layouts.modul5')

@section('header')
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title> Menu Makanan </title>
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
		<h2 class="header">Menu Makanan</h2>
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
@endsection


@section('kanan')
<div class="warp">
        <!--bagian menu-->
        <nav class="menu">
            <ul>
                <li class="active">
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="profil.html">Profil</a>
                </li>
                <li>
                    <a href="kategori.html">kategori</a>
                </li>
                <li>
                    <a href="kalkulator.html">kalkulator</a>
                </li>
                <li>
                    <a href="movie.html">Movie</a>
                </li>
                <li>
                    <a href="http://localhost/naren-064/index%20(2).php">Login</a>
                </li>
				
                
                
            </ul>
        </nav>
    
     <!--akhir bagian menu-->

     <!--bagian sidebar website-->
     <aside class="sidebar">
        <div class="widget">
            <div>
                <img class="widget-pict" src="image/cekersidebar1.jpg" alt="pict" width="100%">
            </div>

            <h2>Info</h2>
            <p>Inilah 5 Berita makanan pedas viral di Indonesia</p>
            <a href="#" class="faq-selengkapnya">In Full -></a>

        </div>
        <div class="widget">
            <div>
                <img class="widget-pict" src="image/lombapedassidebar2.jpg" alt="pict" width="100%">
            </div>

            <h2>Info</h2>
            <p>Jutaan orang berlomba-lomba melakukan lomba makan pedas</p>
            <a href="#" class="faq-selengkapnya">In full -></a>

        </div>

     </aside>
	 <div class="blog">
      <div class="conteudo">
            <div class="post-info">
                Updated, <b>15 Maret 2011</b>
            </div>
            <img src="image/menublog1.jpg">
            <h1> Klepon viral </h1>
            <hr>
            <p>
                Siapa yang ga tau Klepon? Sweet Couple yang memang asli orang Indonesia pasti sudah tidak asing lagi dengan Klepon.
                Klepon merupakan salah satu kue jajanan tradisional Indonesia yang digemari banyak orang.
                Rasanya yang manis membuat siapapun terbuai oleh kelezatan Klepon. Akhir-akhir ini, Klepon sempat viral karena ulah postingan pihak tertentu di media sosial yang menganggap Klepon tidak Islami dan ternyata hoax.
                Nah daripada makan hoax, mendingan kita makan Klepon. Yuk simak ulasan lengkap tentang resep Klepon berikut ini!
            </p>
            <a href="#" class="continue-lendo">In Full -></a>

            
                
    
                <img src="image/ote-oteblog2.jpg">
                <h1> Bakwan Sayur (ote-ote) </h1>
                <hr>
                <p>
                    Bakwan sayur renyah dan gurih mungkin adalah salah satu jenis gorengan yang punya banyak sebutan di tiap-tiap daerah. 
                    Kalau kamu yang berada di tanah Sunda mengenalnya dengan sebutan bala-bala, sementara di daerah lain ada yang menyebutnya dengan ote-ote 
                    (Surabaya, Malang, Blitar), badak (Pekalongan, Semarang), weci atau heci (Madiun, Lumajang), makau (Manado), dan pia-pia (Blora, Pati). Kalau di daerah kamu, 
                    adakah sebutan yang berbeda untuk resep bakwan sayuran?
                </p>
                <a href="#" class="continue-lendo">In Full -></a>
        </div>
     <!--akhir bagian konten Blog-->
   </div>
   
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

@section('ngak')
<div class="ngak">
@foreach ($news as $newss)
<?php if($newss->is_published == 1){?>
		<div class="ngak">
			<h1>{{ $newss->title }}</h1>
			<p> {{ $newss->created_at }}</p>
			<img class="gambartengah" src="{{ asset('img/uploads/') }}/{{ $newss->picture }}"width="50px" height="50px">
			<h3> {{ $newss->content }} </h3>
		</div>
        <?php } ?>
@endforeach
</div>
@endsection
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
@endsection

@section('footer')
<footer>
            <p class="isifooter">
            <marquee>Indonesia memiliki varian makanan pedas cukup banyak. Melimpahnya cabai sebagai komoditas lokal menjadikan hidangan Indonesia kaya akan bumbu pedas. 
				Menurut survei oleh Licorice, 93,6% orang Indonesia menyukai makanan pedas. Hanya 6,4% yang tidak terlalu menyukai makanan pedas.
					Artikel ini telah tayang di Katadata.co.id dengan judul "10 Makanan Pedas Khas Indonesia untuk Disantap"</marquee>
            </p>
        </footer>

@endsection