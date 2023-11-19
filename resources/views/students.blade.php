<h1>{{$heading}}</h1>

{{-- @if(count ($students) ===0)
<p>No Students lecture found</p>
@endif --}}


@unless(count($students) == 0)

@foreach ($students as $student)
<a href="/students/{{$student['id']}}"> <h2>{{$student['title']}}</h2>
    <p>{{$student['description']}}</p>
    <iframe width="560" height="315" src={{$student['video']}} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <img src={{$student['image']}} alt=""></a>

@endforeach
@else 
<p>No Listing Found</p>
@endunless