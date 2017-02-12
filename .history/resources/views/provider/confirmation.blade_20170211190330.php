<h3>Hello {{ $user->firstname }} {{ $user->firstname }</h3>


 <p>Email: {{ $register->email }}</p>
<p>Employé en tant que {{ $register->fonction }} Entreprise: {{ $register->compagny }} ( {{ $register->siren }})</p>

        $register->fonction = $request->fonction;
        $register->phone = $request->phone;
        $register->cooperative = $request->cooperative;
        
        
$register->accords = $request->accords;