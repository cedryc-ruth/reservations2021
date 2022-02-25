@extends('layouts.app')

@section('title','Liste des artistes')

@section('header')
<p>Voici la liste de <strong>nos talents</strong>. N'hésitez pas à aller les voir sur scène.</p>
@endsection

@section('content')
<div class="row small-up-2 large-up-4">
    @foreach ($artists as $artist)
        <article class="@php echo 'style'.rand(1,6) @endphp">
            <span class="image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqwUDPbz_uO2-W0y64NT36oArX9c4u9ORIwu5ierr9-YC3v_ag7IvJNMi3Hn4BVKr42Gw&usqp=CAU" alt="" />
            </span>
            <a href="generic.html">
                <h2>{{ $artist->firstname }} {{ $artist->lastname }}</h2>
                <div class="content">
                    <p>email@sull.com</p>
                    <a href="{{ route('artist.show', $artist->id) }}" class="button expanded">Show</a>
                </div>
            </a>
        </article>
    @endforeach

    <script>
        const artists = <?php echo json_encode($artists) ?>;

        console.log(artists.pop());
    </script>
</div>
@endsection


