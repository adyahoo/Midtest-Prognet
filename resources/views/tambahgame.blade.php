@extends('layout.app')

		@section('title','CRUD Game')

		@section('judul')
			Tambah List Game
		@endsection

		@section('konten')
			<form action="{{route('game.store')}}" method="POST">
				@csrf
				<p>
					<label for="name">Nama Game</label>
					<input type="text" name="name" id="name">
				</p>
				<p>
					<label for="developer">Developer</label>
					<input type="text" name="developer" id="developer">
				</p>
				<p>
					<label for="release_year">Rilis Tahun</label>
					<input type="text" name="release_year" id="release_year">
				</p>
				<p>
					<input type="submit" value="Simpan">
					<input type="button" value="kembali" onclick="location.href='/'">
				</p>
			</form>
		@endsection	