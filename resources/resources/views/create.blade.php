<x-layout>
    <center>
        <br><br><br>
    <section class="py-8 max-w-md mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Publish New Prodact
        </h1><br><br>

        <div class="border border-gray-200 p-6 rounded-xl">
            <form method="POST" action="/admin" enctype="multipart/form-data">
                @csrf


                <x-input name="price" />
<br><br>

                <x-input name="image_path" type="file" />

<br><br>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="category_id"
                    >
                        Category
                    </label>

                    <select name="category_id" id="category_id">

                        @foreach(\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}
                            >{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>

            
<br><br><br>
                <button type="submit"
                        class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
                    Submit
                </button>

            </form>
        </div>
    </section>
    </center>
</x-layout>
