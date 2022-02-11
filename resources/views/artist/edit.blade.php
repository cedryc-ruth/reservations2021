@extends('layouts.app')

@section('title', 'Formulaire de modification d\'un artiste')

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
        <img class="thumbnail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqwUDPbz_uO2-W0y64NT36oArX9c4u9ORIwu5ierr9-YC3v_ag7IvJNMi3Hn4BVKr42Gw&usqp=CAU">
      </div>
      <div class="medium-6 large-5 columns">
          <form class="form-horizontal" action="{{ route('artist.update', $artist->id) }}" method="post">
            @csrf
            @method('PUT')
            <fieldset>
              <legend>Modifier l'artiste</legend>

              <div class="form-group">
                <label class="col-md-4 control-label" for="firstname">Firstname</label>  
                <div class="col-md-5">
                <input id="firstname" name="firstname" type="text" placeholder="The firstname" class="form-control input-md" required=""
                @if(old('firstname'))
                  value="{{ old('firstname') }}" 
                @else
                  value="{{ $artist->firstname }}" 
                @endif
                class="@error('firstname') is-invalid @enderror">
                
                @error('firstname')
                <span class="help-block">{{ $message }}</span>  
                @enderror
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="lastname">Lastname</label>  
                <div class="col-md-5">
                <input id="lastname" name="lastname" type="text" placeholder="The lastname" class="form-control input-md" required=""
                @if(old('lastname'))
                  value="{{ old('lastname') }}" 
                @else
                  value="{{ $artist->firstname }}" 
                @endif
	              class="@error('lastname') is-invalid @enderror">
                
                @error('lastname')
                <span class="help-block">{{ $message }}</span>
                @enderror
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="btUpdate"></label>
                <div class="col-md-4">
                  <button id="btUpdate" name="btUpdate" class="btn btn-danger">Update</button>
                </div>
                <a href="{{ route('artist.show',$artist->id) }}">Annuler</a>
              </div>
            </fieldset>
          </form>

      <!--
        <h3>{{ $artist->firstname }} {{ $artist->lastname }}</h3>
        <p>Bio</p>
        <ul>
        @foreach($artist->types as $artisteType)
          <li>{{ $artisteType->type }}</li>
        @endforeach
        </ul>

        <div class="small secondary expanded button-group">
            <a class="button" href="#">Facebook</a>
            <a class="button" href="#">Instagram</a>
          </div>
        </div>
      -->
        <nav><a href="{{ route('artist.index') }}">Retour à la liste</a></nav>
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

