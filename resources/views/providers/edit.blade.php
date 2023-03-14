<x-layout>

    <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Edit a Provider
        </h2>
        <p class="mb-4">Edit: {{$provider->name}}</p>
    </header>
    
    <form method="POST" action="/providers/{{$provider->id}}">
        @csrf
        @method('PUT')
    
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2"
                >Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name" value="{{$provider->name}}"
            />
            @error('name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
        </div>
    
        <div class="mb-6">
            <label
                for="url"
                class="inline-block text-lg mb-2"
            >
            URL
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="url"
                value="{{$provider->url}}"
            />
            @error('url')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
        </div>
 
    

    
        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Update
            </button>
    
            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
    </x-card>
    </x-layout> 