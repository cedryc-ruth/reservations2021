@extends('layouts.app')

@section('title', 'Fiche d\'un type')

@section('content')
    <!-- You can now combine a row and column if you just need a 12 column row -->
    <div class="row columns">
      <nav aria-label="You are here:" role="navigation">
        <ul class="breadcrumbs">
          <li><a href="#">Home</a></li>
          <li><a href="#">Features</a></li>
          <li class="disabled">Gene Splicing</li>
          <li>
            <span class="show-for-sr">Current: </span> Cloning
          </li>
        </ul>
      </nav>
    </div>

    <div class="row">
      <div class="medium-6 large-5 columns">
        <h3>{{ $type->id }} {{ $type->type }}</h3>

        <nav><a href="{{ route('type.index') }}">Retour à la liste</a></nav>
    </div>

    <div class="column row">
      <hr>
      <div class="tabs-content" data-tabs-content="example-tabs">
        <div class="tabs-panel is-active" id="panel1">
          <h4>Artists</h4>

          <div class="media-object stack-for-small">
            <div class="media-object-section">
              <img class="thumbnail" width="100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqwUDPbz_uO2-W0y64NT36oArX9c4u9ORIwu5ierr9-YC3v_ag7IvJNMi3Hn4BVKr42Gw&usqp=CAU">
            </div>
            <div class="media-object-section">
              <h5>Artist firstname + lastname</h5>
            </div>
          </div>

        </div>
      </div>
    </div>
@endsection

