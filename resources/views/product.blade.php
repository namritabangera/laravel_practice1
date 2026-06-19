<h1>Product Display</h1>
<ol>
@foreach($prod as $p)
<li>
<a href="/getdetails/{{ $p->id }}"> <h2>{{$p->name}}</h2> </a>

</li>
@endforeach
</ol>