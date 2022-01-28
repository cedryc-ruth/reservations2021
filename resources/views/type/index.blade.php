@extends('layouts.app')

@section('title','Liste des types')

@section('content')
<div class="row small-up-2 large-up-4">
    @foreach ($types as $type)
        <div class="column">
            <h5>{{ $type->id }} {{ $type->type }}</h5>
            <a href="{{ route('type.show', $type->id) }}" class="button expanded">Show</a>
        </div>
    @endforeach
</div>
@endsection


