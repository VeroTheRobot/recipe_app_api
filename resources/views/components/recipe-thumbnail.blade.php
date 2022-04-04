<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <div class="flex items-center justify-end lg:pt-6 pr-2">
        <form method="POST" action="{{ route('recipes.delete', $recipe->id) }}">
            @method('DELETE')
            @csrf
            <button type="submit"><i class="fa-solid fa-xmark"></i></button>
        </form>
    </div>

    <a href="{{ route('recipes.show', $recipe->id) }}">
        <img class="w-full" src="{{ asset('assets/' . $recipe->image_path) }}" alt="Recipe preview">
        <div class="px-6 py-4">
            <h5 class="text-gray-900 font-medium mb-2">{{ $recipe->name }}</h5>
        </div>
    </a>
</div>