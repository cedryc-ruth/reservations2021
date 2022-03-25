@extends('layouts.app')

@section('title','Liste des représentations')

@section('content')
<div class="">
    @foreach ($representations as $representation)
        <div>
            {{ $representation->id }} - {{ $representation->when }}
            <form action="{{ route('reservation.checkout',$representation->id) }}" method="get">
                @csrf
                <label>Nombre de places :</label>
                <input type="number" name="places" min="1" value="1">
                <button>[Réserver]</button>
            </form>
        </div>
    @endforeach
</div>
@endsection