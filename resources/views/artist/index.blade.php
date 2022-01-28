@extends('layouts.app')

@section('title','Liste des artistes')

@section('content')
<div class="row small-up-2 large-up-4">
    @foreach ($artists as $artist)
        <div class="column">
            <a href="{{ route('artist.show', $artist->id) }}" title="Show">
                <img class="thumbnail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqwUDPbz_uO2-W0y64NT36oArX9c4u9ORIwu5ierr9-YC3v_ag7IvJNMi3Hn4BVKr42Gw&usqp=CAU">
            </a>
            <h5>{{ $artist->firstname }} {{ $artist->lastname }}</h5>
            <p>email@sull.com</p>
            <a href="{{ route('artist.show', $artist->id) }}" class="button expanded">Show</a>
        </div>
    @endforeach

    <script>
        const artists = <?php echo json_encode($artists) ?>;

        console.log(artists.pop());
    </script>
</div>
@endsection


