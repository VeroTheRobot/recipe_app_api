<x-main>
    <x-slot name="header">
        {{ __('recipes.index.title') }}
    </x-slot>

    <a class="mb-2 pt-2 flex items-center justify-end" href="{{ route('recipes.create') }}">
        <i class="fa-solid fa-circle-plus fa-xl"></i>
    </a>

    <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-4 p-6">
        @foreach ($recipes as $recipe)
            <x-recipe-thumbnail :recipe='$recipe'></x-recipe-thumbnail>
        @endforeach
    </div>
</x-main>