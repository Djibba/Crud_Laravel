@extends('clients_view.app')

@section('content')
    <h2>Modification des données du client</h2>

    <form action="{{ route('storeUpdateClient', $client->id) }}" method="post">
        @csrf

        @if (!empty($client))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="fullName" class="form-label">Prenom et Nom</label>
            <input type="text" name="fullName" value="{{ old('fullName', $client->fullName) }}" class="form-control" id="fullName" aria-describedby="nameHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email"value="{{ old('email', $client->email) }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telephone</label>
            <input type="text" name="phone" value="{{ old('phone', $client->phone) }}" class="form-control" id="phone" aria-describedby="phoneHelp">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Adresse</label>
            <input type="text" name="address" value="{{ old('address', $client->address) }}" class="form-control" id="address" aria-describedby="addHelp">
        </div>
        <div class="mb-3">
            <label for="dateLivraison" class="form-label">Date de livraison prevu</label>
            <input type="date" name="date" value="{{ old('date', $client->date) }}" class="form-control" id="dateLivraison">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" name="status" {{ !empty($client) &&  $client->status ? 'checked' : ""}} class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Livré ?</label>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
@endsection
