@extends('layout.app')

		@section('title','CRUD Game')

		@section('judul')
			Edit List Game
		@endsection

		@section('konten')
			<form action="{{route('game.update',$game->id)}}" method="POST">
				@csrf
				@method('PUT')
				<p>
					<label for="name">Nama Game</label>
					<input type="text" name="name" value="{{$game->name}}">
				</p>
				<p>
					<label for="developer">Developer</label>
					<input type="text" name="developer" value="{{$game->developer}}">
				</p>
				<p>
					<label for="release_year">Rilis Tahun</label>
					<input type="text" name="release_year" value="{{$game->release_year}}">
				</p>
				<p>
					<input type="submit" value="Simpan">
				</p>
			</form>
		@endsection
