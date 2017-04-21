@extends('ninestarts.main')
@section('content')
<div class="container">
	<div class="col-lg-offset-0.5 row col-lg-10.5 ac-songs-page">
		<table class="table table-bordered table-hover">
			<tbody>
				<th>SI</th>
				<th>Lang</th>
				<th>Movie</th>
				<th>song</th>
				<th>Release Date</th>
				<th>#</th>
			</tbody>
			
			@foreach ($songs as $k => $song)
			<tr>
				<td>{{ $song->id }}</td>
				<td>{{ $song->lang }}</td>
				<td>{{ $song->movie }}</td>
				<td>{{ $song->song }}</td>
				<td>{{ date("d-m-Y", $song->release_date) }}</td>
				<td>
					<audio controls id="player">
						<source src="{{$song->audio}}">
						<source src="{{ $song->audio }}">
						Your browser does not support the audio tag.
					</audio>
					
					<button class="ac-button-play" onclick="document.getElementById('player').play()"><i class="fa fa-play"></i></button>
					<button class="ac-button-pause" style="display: none" onclick="document.getElementById('player').pause()"><i class="fa fa-pause"></i></button>
					<button onclick="document.getElementById('player').volume += 0.1"><i class="fa fa-volume-up"></i></button>
					<button onclick="document.getElementById('player').volume -= 0.1"><i class="fa fa-volume-down"></i></button>
				</div>
			</td>
		</tr>
		@endforeach
	</table>
</div>
</div>
<div align="center">{{ $songs->links() }}</div>
@endsection