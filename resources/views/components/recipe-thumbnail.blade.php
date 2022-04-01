<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <img class="w-full" src="{{ asset($recipe->image_path) }}" alt="Recipe preview">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $recipe->name }}</div>
        <p class="text-gray-700 text-base">
            {{ $recipe->notes ?? '' }}
        </p>
    </div>
</div>