@extends('clients_view.app')

@section('content')
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
            <tr>
                <td>Djibril Ba</td>
                <td>djibba@exemple.com</td>
                <td>77 777 77 77</td>
                <td>Keur Massar</td>
                <td>12/12/2021</td>
                <td>
                    <span class="badge bg-success">Livré</span>
                </td>
                <td>
                    <a href="#" class="btn btn-sm btn-primary">Modifier</a>
                    <a href="#" class="btn btn-sm btn-danger">Supprimer</a>
            </tr>
        </tbody>

    </table>

@endsection
