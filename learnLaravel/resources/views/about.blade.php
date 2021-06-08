<!-- 
    foor loop
    foreach loop
    for else loop
    whiel loop
-->

@for ($i = 0; $i <= 10; $i++)
    <h2>The number is {{ $i }}</h2>
@endfor

@foreach ($name as $item)
    <h2>My name is {{ $item }}</h2>
@endforeach

@forelse ($name as $item)
    <h2>The name is {{ $item }}</h2>
@empty
    <h2>There are no names</h2>
@endforelse

{{ $i = 0 }}

@while ($i < 10)
    <h2>{{ $i }}</h2>
    {{ $i++ }}
@endwhile