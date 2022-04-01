<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('recipes.index.title') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($recipes as $recipe)
                        <a href="{{ route('recipes.show', $recipe->id) }}">
                            <x-recipe-thumbnail :recipe='$recipe'></x-recipe-thumbnail>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>