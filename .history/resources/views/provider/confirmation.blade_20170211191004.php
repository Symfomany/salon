<h3>Hello {{ $user->firstname }} {{ $user->firstname }}</h3>

 <p>Email: {{ $user->email }}</p>
 <p>Phone: {{  $user->phone }} </p>
<p>Employé en tant que {{ $user->fonction }} Entreprise: {{ $user->compagny }} ( {{ $user->siren }})</p>
<p> Coopérativbe choisi: {{ $user->cooperative }} </p>

<ul>
    @foreach($user->accords as $accord)
        <li>{{ $loop->index }} : {{ $accord }} </li>
    @endforeach
</ul>