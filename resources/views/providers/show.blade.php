<x-layout>

    <a href="/" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10 bg-black">
            <div class="flex flex-col items-center justify-center text-center">
                
                <h3 class="text-2xl mb-2">{{$provider->name}}</h3>
    

                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    {{-- {{$provider->url}} --}}
                    <button 
                    id="show-image-btn" 
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    value="{{$provider->id}}"
                    >
                    Show Image
                    </button>
                    <img id="show-image">
                </div>
            </div>
        </x-card>
    
        <x-card class="mt-4 p-2 flex space-x-6">
        <a href="/providers/{{$provider->id}}/edit">
            <i class="fa-solid fa-pencil"></i>Edit
        </a>
    
        <form method="POST" action="/providers/{{$provider->id}}">
        @csrf   
        @method('DELETE')
        
        <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
        </form>
        </x-card>
    </div>
    
    </x-layout> 


    <script>
    $(document).ready(function() {
    $('#show-image-btn').click(function() {
        $(this).html('loading..');
        
        var url = '/image/' + $(this).val();

        $.ajax({
            type: 'GET',
            url: url,
            success: function(response) {
                $('#show-image').attr('src', response.image_url);
                $('#show-image-btn').hide();
            }
        });

    });
});</script>