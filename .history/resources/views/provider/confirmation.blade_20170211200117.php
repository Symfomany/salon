<h3>Hello {{ $user->firstname }} {{ $user->firstname }}</h3>

 <p>Email: <b>{{ $user->email }}</b></p>
 <p>Phone:  <b>{{  $user->phone }}</b> </p>
<p>Employé en tant que <i>{{ $user->fonction }}</i> Entreprise:  <b>{{ $user->compagny }} </b> 
<i>({{ $user->siren }})</i></p>
<p>Les accords pour la coopérative <b>{{ $user->cooperative }}</b> sont: </p>
<ul>
    @foreach($user->accords as $key => $accord)
        <li @if($accord == "subscribed") style="color:green;" @else style="color:sky;" @endif>{{ $key }} : <b> @if($accord == "subscribed") Souhaite être inscrit @else Dejà inscrit  @endif </b></li>
    @endforeach
</ul>