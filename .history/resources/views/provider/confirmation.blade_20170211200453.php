<h3>Hello {{ $user->firstname }} {{ $user->firstname }}</h3>

 <p>Email: <b><a>{{ $user->email }}</a></b></p>
 <p>Phone:  <b><a>{{ $user->phone }}</a></b></p>
<p>Employé en tant que <i>{{ $user->fonction }}</i> Entreprise:  <b>{{ $user->compagny }} </b> 
<i>(Siren: {{ $user->siren }})</i></p>
<p>Les accords pour la coopérative <b>{{ $user->cooperative }}</b> sont: </p>
<ul>
    @foreach($user->accords as $key => $accord)
        <li @if($accord == "subscribed") style="color:#A2BC55;" @else style="color: #149A86;" @endif>{{ $key }} : <b> @if($accord == "subscribed") Souhaite être inscrit @else Dejà inscrit  @endif </b></li>
    @endforeach
</ul>