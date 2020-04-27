
@extends('layout.app')

		@section('title','CRUD Game')

		@section('judul')
			Daftar List Game
		@endsection

		@section('konten')
			<input type="button" value="Tambah Game Baru" onclick="location.href='/game/create'">
			<br>
			@if($all_games->isEmpty())
				Belum ada data ...
			@else
			<table>
				<tr>
					<th>No</th>
					<th>Nama Game</th>
					<th>Developer</th>
					<th>Tahun Release</th>
				</tr>
				@foreach($all_games as $game)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$game->name}}</td>
						<td>{{$game->developer}}</td>
						<td>{{$game->release_year}}</td>
						
						<td>
							<span>
								<input type="button" value="Edit" onclick="location.href='{{route('game.edit',$game->id)}}'">
								<form style="display:inline-block;" action="{{route('game.destroy',$game->id)}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='{{route('game.show',$game->id)}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection
