<x-layout>
@include('partials._hero')
@include('partials._search')

<div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 pt-6 gap-8">

@unless (count($listings) == 0)

@foreach($listings as $listing)
    <x-listing-card :listing="$listing" />
@endforeach

@else
<p>No Listings Found</p>

@endunless

</div>

<div class="mt-6 p-4">
    {{$listings->links()}}
</div>
</x-layout>

    

