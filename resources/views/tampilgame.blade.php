@extends('layout.app')

		@section('title','CRUD Game')

		@section('judul')
			Detail List Game
		@endsection

		@section('konten')
			<p>
				<label for="name">Nama Game</label>
				<input type="text" name="name" value="{{$game->name}}" readonly>
			</p>
			<p>
				<label for="developer">Developer</label>
				<input type="text" name="developer" value="{{$game->developer}}" readonly>
			</p>
			<p>
				<label for="release_year">Rilis Tahun</label>
				<input type="text" name="release_year" value="{{$game->release_year}}" readonly>
			</p>
			<p>
				<input type="button" value="Kembali" onclick="location.href='/'">
			</p>
		@endsection
