<x-main>
    <x-slot name="header">
        {{ $recipe->name }}
    </x-slot>

    <div class="flex items-center justify-end">
        <i class="fa-regular fa-pen-to-square fa-xl"></i>
    </div>

    <img src="{{ asset('assets/' . $recipe->image_path) }}" alt="Recipe image">

    <p>{{ $recipe->notes }}</p>
    <x-ingredients-checkboxes :recipe='$recipe'></x-ingredients-checkboxes>
</x-main>