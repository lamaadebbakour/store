<x-layout>
    <center>
    <section class="py-8 max-w-md mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Publish New Post
        </h1>

        <div class="border border-gray-200 p-6 rounded-xl">
            <form method="POST" action="/admin" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
           for="price"
    >
    Price
    </label>
    <textarea class="border border-gray-400 p-2 w-full"
              name="Price"
              
              
    ></textarea>

    </div>

<br><br>
<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
           for=" prodact "
    >
        prodact 
    </label>
    <input class="border border-gray-400 p-2 w-full"
           type="file"
           name="image_path "
           
          
    >
    
</div>
<br><br><br>

       <button type="submit"
      class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
                    Submit
                </button>

            </form>
        </div>
    </section></center>
</x-layout>
