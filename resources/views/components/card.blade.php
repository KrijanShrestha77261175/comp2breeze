{{-- by default use this class is used but will also add any other classes we use 
    by adding whatever attribute we need --}}

<div {{$attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6'])}}>
    {{$slot}}
</div>