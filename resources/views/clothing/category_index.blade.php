<x-layout>


    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <h1 class="text-center text-4xl">No Posts Yet. Please Check Back Later.</h1>
        @endif

        @foreach($images as $image)
        <img src={{$image->image_path}} width=200 hight=100 />

@endforeach
    </main>
</x-layout>