<h1>Student List from Controller</h1>
<ul>
@foreach ($students as $stud )
 <li>{{ $stud }}</li>
    
@endforeach
</ul>