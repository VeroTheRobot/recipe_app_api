<x-main>
    <x-slot name="header">
        {{ __('recipes.index.title') }}
    </x-slot>

    <a class="mb-2" href="{{ route('recipes.create') }}">
        {{ __('recipes.create.title') }}
    </a>

    @foreach ($recipes as $recipe)
        <a href="{{ route('recipes.show', $recipe->id) }}">
            <x-recipe-thumbnail :recipe='$recipe'></x-recipe-thumbnail>
        </a>
    @endforeach
</x-main>