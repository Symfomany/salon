<h3>Hello {{ $user->firstname }} {{ $user->firstname }}</h3>

 <p>Email: <b>{{ $user->email }}</b></p>
 <p>Phone:  <b>{{  $user->phone }}</b> </p>
<p>Employé en tant que <i>{{ $user->fonction }}</i> Entreprise:  <b>{{ $user->compagny }} </b> 
<i>({{ $user->siren }})</i></p>
<p> Coopérativbe choisi: {{ $user->cooperative }} </p>

<ul>
    @foreach($user->accords as $key => $accord)
        <li>{{ $key }} : {{ $accord }} </li>
    @endforeach
</ul>