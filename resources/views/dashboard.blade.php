<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-center ">
                    <section>
                        <h1 class="text-4xl text-green-500">
                            Short your link
                        </h1>
                        @if(session('success_message'))
                            {!! session('success_message')!!}
                        @endif
                        <form method="POST" action="{{ route('short.url') }}">
                            @csrf
                            <input class="border border-grey-300 rounded-lg dark:bg-gray-600" type="text" name="original_url" />
                            @error('original_url')
                                <span class="text-danger"> {{$message}}</span>
                            @enderror
                            <button class="m-2 px-6 py-2 bg-green-500 hover:bg-green-700 rounded-lg" type="submit" >save</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
