<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Tag') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('tags.index') }}"
                    class="px-4 py-2 text-white bg-indigo-500 hover:bg-indigo-600 rounded">
                    Back
                </a>
            </div>
            <div class="max-w-md mx-auto bg-gray-100 px-6 pt-1 pb-6 mt-12 rounded">
                <form class="space-y-5" method="POST" action="{{ route('tags.update', $tag->id) }}">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="title" class="text-xl">Title</label>
                        <input id="title" type="text" name="title"
                            class="block w-full py-3 px-3 mt-2 
                            text-gray-800 appearance-none 
                            border-2 border-gray-100 
                            focus:text-gray-500 focus:outline-none focus:border-gray-200 rounded-md"
                            value="{{ $tag->title }}" />
                        @error('title')
                            <span class="text-sm text-red-400">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit"
                        class="w-full py-3 mt-10 bg-indigo-500 hover:bg-indigo-600 rounded-md font-medium text-white uppercase focus:outline-none hover:shadow-none">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>