<!-- submenu of the useful informations -->
<ul id="submenuInfo" class="dropdown-content">
    <li><a href="#!">GÉNÉRALITÉS</a></li>
    <li><a href="#!">PARCOURS</a></li>
    <li><a href="#!">TARIFS/HORAIRE</a></li>
    <li><a href="#!">ACCÈS/PLAN</a></li>
    <li><a href="#!">LOGEMENTS</a></li>
    <li><a href="#!">CONTACT</a></li>
</ul>
<!-- submenu of the useful informations for mobile -->
<ul id="submenuInfoMob" class="dropdown-content">
    <li><a href="#!">GÉNÉRALITÉS</a></li>
    <li><a href="#!">PARCOURS</a></li>
    <li><a href="#!">TARIFS/HORAIRE</a></li>
    <li><a href="#!">ACCÈS/PLAN</a></li>
    <li><a href="#!">LOGEMENTS</a></li>
    <li><a href="#!">CONTACT</a></li>
</ul>
<!-- submenu of the account -->
<ul id="submenuAccount" class="dropdown-content">
    @client
    <li><a href="#!">MES TESTS</a></li>
    <li><a href="{{route('velo.index')}}">TROUVER UN VÉLO</a></li>
    @endclient
    @user
    <li><a href="{{route('user.show',Session::get('user.id'))}}">MES PARAMÈTRES</a></li>
    @enduser

</ul>
<!-- submenu of the account for mobile -->
<ul id="submenuAccountMob" class="dropdown-content">
    @client
    <li><a href="#!">MES TESTS</a></li>
    <li><a href="{{route('velo.index')}}">TROUVER UN VÉLO</a></li>
    @endclient
    @user
    <li><a href="{{route('user.show',Session::get('user.id'))}}">MES PARAMÈTRES</a></li>
    @enduser

</ul>
<!-- menu on mobile -->
<ul class="sidenav" id="mobile">
    <li class="right"><a class="sidenav-close"><i class="material-icons">close</i></a></li>
    <li><a href="{{route('index')}}">BIKE TEST GRYON</a></li>
    @client
    <li><a href="{{route('pass.show',Session::get('client.id'))}}">MON PASS</a></li>
    @endclient
    @user
    <li><a class="dropdown-triggerAccount" href="#!" data-target="submenuAccountMob">MON COMPTE</a></li>
    @enduser
    <li><a class="dropdown-trigger" href="#!" data-target="submenuInfoMob">INFOS PRATIQUES</a></li>
    <li><a href="{{ route('produit.index') }}">MODÈLES DE VÉLOS</a></li>
    <li><a href="#!">NEWS</a></li>
    <li class="left"><a href="#!">FR</a></li>
    <li class="center-align"><a href="#!">DE</a></li>
    @user
    <li> <a class="btn-small" href="{{ route('pass.create') }}">RÉSERVER SON PASS</a> </li>
    @else
    <li> <a class="btn-small" href="{{ route('compte.login') }}">RÉSERVER SON PASS</a> </li>
    @enduser
    @user
    <li><a href="{{ route('compte.deconnect') }}" class="btn-small">SE DÉCONNECTER</a></li>
    @else
    <li><a href="{{ route('compte.login') }}" class="btn-small ">SE CONNECTER</a></li>
    @enduser
</ul>
<!-- menu on browser -->
<nav>
    <div class="nav-wrapper container navBar">
        <a href="#" data-target="mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>

        <a href="{{route('index')}}" class="brand-logo left"><img src="/img/logoBlanc.png" alt="Logo du Bike Test Gryon"></a>
        
        <ul class="right hide-on-med-and-down">
            @client
            <li><a href="{{route('pass.show',Session::get('client.id'))}}">MON PASS</a></li>
            @endclient
            @user
            <li><a class="dropdown-triggerAccount" href="!#" data-target="submenuAccount">MON COMPTE</a></li>
            @enduser
            <li><a class="dropdown-trigger" href="#!" data-target="submenuInfo">INFOS PRATIQUES</a></li>
            <li><a href="{{route('produit.index')}}">MODÈLES DE VÉLOS</a></li>
            <li><a href="#!">NEWS</a></li>
            <li class="left"><a href="#!">FR</a></li>
            <li class="center-align"><a href="#!">DE</a></li>
            @user
            <li> <a class="btn-small" href="{{ route('pass.create') }}">RÉSERVER SON PASS</a> </li>
            @else
            <li> <a class="btn-small" href="{{ route('compte.login') }}">RÉSERVER SON PASS</a> </li>
            @enduser
            @user
            <li><a href="{{ route('compte.deconnect') }}" class="btn-small">SE DÉCONNECTER</a></li>
            @else
            <li><a href="{{ route('compte.login') }}" class="btn-small ">SE CONNECTER</a></li>
            @enduser

        </ul>
    </div>
</nav>
