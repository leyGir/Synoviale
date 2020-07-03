@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
<div class="paramClient container">

    <h2>MES PARAMÈTRES</h2>
    <h3>MES COORDONNÉES</h3>
<table>
    <tr><td>Nom</td><td>{{Session::get('user.person.name')}}</td></tr>
    <tr><td>Prénom</td><td>{{Session::get('user.person.firstname')}}</td></tr>
    <tr><td>Email</td><td>{{Session::get('user.person.email')}}</td></tr>
    <tr><td>Tél.</td><td>{{Session::get('user.person.phoneNumber1')}}</td></tr>
    <tr><td>Rue</td><td>{{Session::get('user.person.address.street1')}}</td></tr>
    <tr><td>N° de rue</td><td>{{Session::get('user.person.address.streetNumber')}}</td></tr>
    <tr><td>Localité</td><td>{{Session::get('user.person.address.city.name')}}</td></tr>
    <tr><td>NPA</td><td>{{Session::get('user.person.address.city.postalCode')}}</td></tr>
    <tr><td>Canton</td><td>{{Session::get('user.person.address.city.canton')}}</td></tr>
    <tr><td>Pays</td><td>{{Session::get('user.person.address.city.country.name')}}</td></tr>
</table>

<br>
<a href="" class="btn center-align">Modifier</a><br><br>
<a href="#sure" class="btn center-align modal-trigger">Supprimer mon compte</a>

</div>



<div id="sure" class="modal">
    <div class="modal-content">
      <h5>Suppression des données</h5>
      <h6>Êtes-vous sûr.e?</h6>
      <p class="red-text"><i>Vos données sont sauvegardées pour les entreprises.</i></p>
    </div>
    <div class="modal-footer">
      <form method="POST" action="">
              @csrf
              @method('DELETE')
              <input type="submit" value="Oui" class="modal-close btn-flat"></input>
              <a href="" class="modal-close btn-flat">Non</a>
      </form>

    </div>
  </div>
@endsection
