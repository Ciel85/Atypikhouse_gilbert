@extends('layouts.admin')
@section('content')
<!-- Icon Cards-->

<div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Liste des utilisateurs</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nom / Prénom</th>
              <th>Compte activé</th>
              <th> Compte</th>
              <th>Profil</th>
              <th>Annonces</th>
              <th>Réservations</th>
              <th>Historiques</th>
              <th> Messages</th>
            </tr>
          </thead>
          @foreach($users as $user)
            <tbody>
                <tr>
                    <td>{{$user->nom}} {{$user->prenom}}</td>
                    <td>{{$user->statut}}</td>
                    @if($user->statut ==  1)
                        <td><a href="{{ route('admin.disable_user', $user->id) }}" class="delete-user btn btn-danger">Désactiver le compte</a></td>
                    @else
                        <td><a href="{{ route('admin.activate_user', $user->id) }}" class="btn btn-success">Activer le compte</a></td>
                    @endif
                    <td><a href="{{action('AdminController@profilUser', $user['id'])}}" class="btn btn-primary">Profil</a></td>
                    <td><a href="{{action('AdminController@listannonces', $user['id'])}}" class="btn btn-success">Annonces</a></td>
                    <td><a href="{{action('AdminController@listreservations', $user['id'])}}" class="btn btn-info">Réservations</a></td>
                    <td><a href="{{action('AdminController@listhistoriques', $user['id'])}}" class="btn btn-info">Historiques</a></td>
                    <td><a href="{{action('AdminController@messages', $user['id'])}}" class="btn btn-info">Notifications</a></td>
                </tr>
            </tbody>
            @endforeach
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
</div>
</div>
@endsection