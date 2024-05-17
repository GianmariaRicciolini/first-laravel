<h1>Books list</h1>

{{-- metodo 1 --}}

@if ($titles)
    <ul>
        @foreach ($titles as $title)
            <li>{{$titles}}</li>
        @endforeach
    </ul>
@else
    <h2>Non ci sono libri</h2>
@endif

{{-- metodo 2 --}}

@forelse ($titles as $title)
  <div>{{$titles}}</div>
@empty
  <h2>Non ci sono libri</h2>
@endforelse
