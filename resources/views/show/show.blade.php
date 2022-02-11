@extends('layouts.app')

@section('title', 'Fiche d\'un spectacle')

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
      <div class="medium-6 columns">
        <img class="thumbnail" src="{{ $show->poster_url }}">
      </div>
      <div class="medium-6 large-5 columns">
        <h3>{{ $show->title }}</h3>
        <p>{{ $show->description }}</p>
        <ul>
        @foreach($show->artistTypes as $artistType)
          <li>{{ $artistType->artist->firstname }} {{ $artistType->artist->lastname }} ({{ $artistType->type->type }})</li>
        @endforeach
        </ul>
      </div>

        <nav><a href="{{ route('show.index') }}">Retour à la liste</a></nav>
    </div>

    <div class="column row">
      <hr>
      <div class="tabs-content" data-tabs-content="example-tabs">
        <div class="tabs-panel is-active" id="panel1">
          <h4>Shows</h4>

          <div class="media-object stack-for-small">
            <div class="media-object-section">
              <img class="thumbnail" width="100" src="https://www.dvdfr.com/images/dvd/covers/200x280/8a47126fa07f2e693fe323aa96e87788/63736/old-ayiti.0.jpg">
            </div>
            <div class="media-object-section">
              <h5>Show title</h5>
              <p>Show description</p>
            </div>
          </div>

        </div>
      </div>
    </div>
@endsection

