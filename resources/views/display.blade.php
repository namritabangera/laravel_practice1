<h1>Welcome {{$name }}</h1>

<h2>Skill set:</h2>
<ul>
@foreach ($arr as $ar)
    <li>{{ $ar }}</li>
@endforeach
</ul>