@extends('clients_view.app')

@section('content')
    <a href="{{ route('clients.create') }}" class="btn btn-primary mt-4 mb-4">Ajouter un client</a>
    <a href="{{ route('logout') }}" class="btn btn-primary ml-4">Se deconnecter</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif

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
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Etes vous sur de vouloir supprimer le client ?')">Supprimer</button>
                        </form>
                </tr>
            @endforeach

        </tbody>

    </table>
@endsection
