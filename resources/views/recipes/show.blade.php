<x-main>
    <x-slot name="header">
        {{ $recipe->name }}
    </x-slot>

    <img src="{{ asset('assets/' . $recipe->image_path) }}" alt="Recipe image">

    <p>{{ $recipe->notes }}</p>
    <x-ingredients-checkboxes :recipe='$recipe'></x-ingredients-checkboxes>
</x-main>