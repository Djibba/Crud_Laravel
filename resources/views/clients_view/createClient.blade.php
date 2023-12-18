@extends('clients_view.app')

@section('content')
    <h2>Creation du client</h2>

    <form action="{{ route('storeClient') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="fullName" class="form-label">Prenom et Nom</label>
            <input type="text" name="fullName" class="form-control" id="fullName" aria-describedby="nameHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telephone</label>
            <input type="text" name="phone" class="form-control" id="phone" aria-describedby="phoneHelp">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Adresse</label>
            <input type="text" name="address" class="form-control" id="address" aria-describedby="addHelp">
        </div>
        <div class="mb-3">
            <label for="dateLivraison" class="form-label">Date de livraison prevu</label>
            <input type="date" name="date" class="form-control" id="dateLivraison">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Livré ?</label>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
