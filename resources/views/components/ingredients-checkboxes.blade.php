<div class="block mt-3">
    <span class="text-gray-700 font-bold">{{ __('recipes.show.ingredientsTitle')}}</span>
    <div class="mt-2">
        @foreach ($recipe->ingredients as $ingredient)
            <div>
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox">
                    <span class="ml-2">
                        {{ $ingredient->quantity }} {{ $ingredient->unit_measure }} {{ $ingredient->name }}
                    </span>
                </label>
            </div>
        @endforeach
    </div>
    <div class="inline-flex mt-3">
        <x-button class="mr-2 check-all">{{ __('recipes.show.selectAllBtn') }}</x-button>
        <x-button class="mr-2 uncheck-all">{{ __('recipes.show.unselectAllBtn') }}</x-button>
        <x-button>{{ __('recipes.show.addToList') }}</x-button>
    </div>
</div>

<script>
    $('.check-all').on('click', function () {
        $('.form-checkbox').each(function () {
            $(this).prop('checked', true);
        });
    });

    $('.uncheck-all').on('click', function () {
        $('.form-checkbox').each(function () {
            $(this).prop('checked', false);
        });
    });
</script>