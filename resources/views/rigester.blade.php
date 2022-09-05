<x-layout>
    <center>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form method="POST" action="/register" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label 
                           for="name"
                    >
                        Name
                    </label>
                    <input style="width: 300px;"
                           type="text"
                           name="name"
                           id="name"
                           value="{{ old('name') }}"
                    >
                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div> <br><br>
                

                <div class="mb-6">
                    <label for="email"> Email</label>
                    
                    <input style="width: 300px;"
                           type="text"
                           name="email"
                           id="email"
                           value="{{ old('email') }}"
                           required
                    >
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
<br><br>
                <div class="mb-6">
                    <label for="password">Password</label>
                          
                    <input style="width: 300px;"
                           type="password"
                           name="password"
                           id="password"
                           required
                    >
                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
<br><br><br>
                <div class="mb-6">
                    <button type="submit"
                    >
                        Submit
                    </button>
                </div>


            </form>
        </main>
    </section></center>
</x-layout>
