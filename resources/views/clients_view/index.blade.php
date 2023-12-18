@extends('clients_view.app')

@section('content')
    <a href="{{ route('createClient') }}" class="btn btn-primary mt-4 mb-4">Ajouter un client</a>

    <table class="table">
        <thead>
            <tr>
                <th>Prenom et Nom</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Adresse</th>
                <th>Date Livraison prevu</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->fullName }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->address }}</td>
                    <td>{{ $client->date }}</td>
                    <td>
                        @if ($client->status == 0)
                            <span class="badge bg-danger">Non Livré</span>
                        @elseif ($client->status == 1)
                            <span class="badge bg-success">Livré</span>
                        @endif
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Modifier</a>
                        <a href="#" class="btn btn-sm btn-danger">Supprimer</a>
                </tr>
            @endforeach

        </tbody>

    </table>
@endsection
