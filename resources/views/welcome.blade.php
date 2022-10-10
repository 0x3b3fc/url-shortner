<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-center bg-white border-b border-gray-200">
                    <section>
                        <h1 class="text-4xl text-blue-800">Short Your Link</h1>
                        @if (session('success_message'))
                            {!! session('success_message') !!}
                        @endif
                        <form action="{{ route('short.url') }}" method="POST">
                            @csrf
                            <label for="original">
                                <input class="border border-gray-300 rounded-lg" type="url" name="orginal_url"
                                    id="original" placeholder="Put Your Link Here!"><br>
                                @error('orginal_url')
                                    <span class="text-red m-2 p-2">{{ $message }}</span>
                                @enderror
                                <button class="m-2 px-6 py-2 bg-red-500 hover:bg-red-700 rounded-lg"
                                    type="submit">Short Link</button>
                            </label>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
