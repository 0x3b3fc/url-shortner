<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h4>
            <a href="{{ url('/') }}" class="mt-6 pt-2">Short New Link</a>
        </h4>
    </x-slot>


    <div class="max-w-6xl mx-auto mt-8 text-center justify-self-center">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 justify-self-center">
            <h4>
                @if (session('success_message'))
                    {!! session('success_message') !!}
                @endif
            </h4>
            <table class="table-auto">
                <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                            Id</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                            Original Link</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                            Short Link</th>

                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr></tr>
                    @foreach ($links as $link)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $link->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $link->orginal_url }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ url($link->short_url) }}" target="_blank">{{ url($link->short_url) }}</a>
                            </td>
                        </tr>
                    @endforeach

                    <!-- More items... -->
                </tbody>
            </table>
        </div>
    </div>


</x-app-layout>
