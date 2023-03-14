@props(['provider'])

<x-card>
    <a href="/providers/{{$provider->id}}">
    <div class="flex">
        {{-- <img
        class="hidden w-48 mr-6 md:block"
        src="{{ $provider->logo ? asset('storage/' . $provider->logo) : asset('/images/no-image.png')}}"
        alt=""
        /> --}}
        <div>
            <h3 class="text-2xl font-bold">
                {{$provider->name}}
            </h3>
            <div class="text-sm mb-4">
                <p>{{$provider->url}}</p>
            </div>
        </div>
    </div>
</a>
</x-card>