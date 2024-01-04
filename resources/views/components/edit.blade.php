<div class="p-8">
    <div class="flex items-center gap-2 text-gray-500">
        <i class="fa-solid fa-arrow-left text-sm"></i>
        <a href="{{ route($toRoute.".index") }}" class="">Retour</a>
    </div>
    <h2 class="text-3xl my-10">Edit {{$content}}</h2>

    <form action="{{ route($toRoute.".update", $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-[3fr_1fr] gap-6">
        <div>
            <div class="mb-4">

                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" class="block border-[1px] border-solid border-gray-500 rounded w-full mt-4 py-1 px-2 outline-none" value="{{$item->titre}}">
           @error('titre')
           <div class="text-red-600">{{$message}}</div>
           @enderror
        </div>
               
            <div class="mb-4">
                <label for="description">Description</label>
                <textarea rows="8" name="description" id="description" class="block border-[1px] border-solid border-gray-500 rounded w-full mt-4 py-1 px-2 outline-none">{{$item->details}}</textarea>
            @error('description')
           <div class="text-red-600">{{$message}}</div>
           @enderror
            </div>

            <div>    
                <label for="file">Media</label>
                <div class="relative border-2 border-dashed border-gray-500 py-20 mt-4">
                    <div class="text-center">
                        <i class="fa-solid fa-arrow-up-from-bracket"></i>
                        <h6>Upload Files</h6>
                    </div>
                    <input type="file" name="image" id="file" class="absolute w-full h-full top-0 opacity-0">    
                </div>
                @error('image')
                    <div class="text-red-600">{{$message}}</div>
                    @enderror
            </div>
        </div>

        <div>
            {{$slot}}
        </div>

        </div>   
         <div class="mt-6 flex w-3/12 gap-2">
            <button class="bg-[#499352] py-1 flex-1 text-white rounded font-medium">Save</button>
            <a href="{{ route($toRoute.".index") }}"class="border-[1px] text-center border-solid border-black py-1 flex-1 rounded">Cancel</a>
         </div>
    </form>
</div>