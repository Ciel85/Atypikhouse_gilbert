@extends('layouts.admin')
@section('content')
<div class="admin-user-profil">   
    <div class="container list-category">
        <div class="panel panel-default">
            <div class="panel-heading">Détails de la réservation</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="card h-100">
                                <img class="img-responsive img_house" src="{{ asset('img/houses/'.$reservation->house->photo) }}"></a>
                                <div class="card-body">
                                    <h4 class="title card-title text-center">
                                        {{$reservation->house->title}}
                                    </h4>
                                    <h3 class="price">Total payé: {{$reservation->total}}€ pour {{$reservation->nb_personnes}} personnes</h3>
                                    <p>Type de bien : {{$reservation->house->category->category}}</p>
                                    @foreach($reservation->house->valuecatproprietes as $valuecatpropriete)
                                        @if($valuecatpropriete->value == 0)
                                        @else
                                            <p>{{$valuecatpropriete->propriete->propriete}}: {{$valuecatpropriete->value}}</p> 
                                        @endif                                 
                                    @endforeach
                                    <p><i class="fas fa-calendar"></i> Du: <?php \Date::setLocale('fr'); $startdate = Date::parse($reservation->start_date)->format('l j F Y'); echo($startdate);?> </p>
                                        <p><i class="fas fa-calendar"></i> au:  <?php \Date::setLocale('fr'); $enddate = Date::parse($reservation->end_date)->format('l j F Y'); echo($enddate);?></p>
                                    <p class="card-text">{{$reservation->house->description}}</p>
                                    <p>Annulation gratuite !</p>
                                    <p> Adresse: {{$reservation->house->adresse}}</p>
                                    <p>Téléphone de l'annonceur : {{$reservation->house->telephone}}</p>
                                    <p>Adresse mail de l'annonceur : {{$reservation->user->email}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/calendar.js') }}"></script>
@endsection