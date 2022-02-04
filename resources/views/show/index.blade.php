@extends('layouts.app')

@section('title','Liste des spectacles')

@section('content')
<div class="row small-up-2 large-up-4">
    @foreach ($shows as $show)
        <div class="column">
            <a href="{{ route('show.show', $show->id) }}" title="Show">
                <img class="thumbnail" src="{{ $show->poster_url }}" width="200">
            </a>
            <h5>{{ $show->title }}</h5>
            <p>{{ $show->price }}</p>
            <a href="{{ route('show.show', $show->id) }}" class="button expanded">Show</a>
        </div>
    @endforeach
</div>
@endsection


