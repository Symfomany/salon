<h3>Hello {{ $user->firstname }} {{ $user->firstname }}</h3>

 <p>Email: {{ $register->email }}</p>
 <p>Phone: {{  $register->phone; }} </p>
<p>Employé en tant que {{ $register->fonction }} Entreprise: {{ $register->compagny }} ( {{ $register->siren }})</p>
<p> Coopérativbe choisi: {{ $register->cooperative }} </p>
@foreach($register->accords as $accord)
        {{ $accord }}
@endforach