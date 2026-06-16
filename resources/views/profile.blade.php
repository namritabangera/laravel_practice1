<h1>Welcome {{$name}} </h1>
{{--using foreach for looping through array --}}

<h2>Your Products List:</h2>
<ul>
@foreach($products as $prod)
<li>{{$prod}}</li>
@endforeach
</ul>

{{-- Conditional stmts --}}
@if ($age>18)
<h2>You are an adult</h2>
@else
<h2>You are still a minor</h2>
    
@endif
