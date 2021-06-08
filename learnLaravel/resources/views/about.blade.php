<!-- 
    Comparing multiple possible conditions
    Multiple values that may require the same code
-->

@switch($name)
    @case('Fadjar')
        <h2>Name is Fadjar!</h2>
        @break
    @case('Udin')
        <h2>Name is Udin!</h2>
        @break
    @case('Michael')
        <h2>Name is Michael!</h2>
        @break
    @default
        <h2>No match found</h2>
@endswitch