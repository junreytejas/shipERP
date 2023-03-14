<x-layout>
    @include('partials._hero')    
    {{-- @include('partials._search') --}}
    
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        

        
        @unless (count($providers) == 0)
        
        @foreach($providers as $provider) 
        <x-provider-card :provider="$provider"/>
        
        @endforeach
        
        @else
        <p>no provider found</p>
        
        @endunless
    </div>
    
    <div class="mt-6 p-4">
        {{$providers->links()}}
    </div>
</x-layout>
