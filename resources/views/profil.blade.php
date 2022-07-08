@extends('layouts.modul5')

@section('header')
<header>
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
        </header>
@endsection

@section('kiri')
<div class="kiri">
            <h2 style="color: rgb(29, 163, 240)" align="center">Anime yang sering di tonton</h2>
            <ul>
                <li>Classroom of the elite</li>
                <li>Drifter</li>
                <li>Tokyo revengers</li>
                <li>One Punch Man</li>
                <li>Dan lain lain</li>
            </ul>
        </div>
@endsection

@section('kanan')
<div class="kanan">
            <h3 style="color: rgb(29, 163, 240)" align="center"> Game yang sering di main</h3>
            <ol type="1">
                <li>Counter Strike : Global Offensive</li>
                <li>PUBG PC dan PUBG MOBILE</li>
                <li>Valorant</li>
                <dl>Inti nya berbau FPS SKUYY MABAR HAYUKSSS</dl>
            </ol>
    
        </div>
@endsection

@section('tengah')
<div class="tengah">
<div class="ngak">
@foreach ($author as $authors)
			<td>{{ $authors->name }}</td>
			<img class="gambartengah" src="{{ asset('img/uploads/') }}/{{ $authors->picture }}"width="50px" height="50px">
			<h3> {{ $authors->address }} </h3>
		</div>
	</div>
@endforeach
@endsection

@section('footer')
<footer>
            <p class="isifooter">
                <marquee>
                KAPAN SELESAI PRAKTIKUM INI TOLONG !!!
                </marquee>
            </p>
        </footer>
    
@endsection