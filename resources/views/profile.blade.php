<h1>Welcome {{$name}} </h1>
{{--using foreach for looping through array --}}

<h2>Your Products List:</h2>
<ul>
@foreach($products as $prod)
<li>{{$prod}}</li>
@endforeach

</ul>