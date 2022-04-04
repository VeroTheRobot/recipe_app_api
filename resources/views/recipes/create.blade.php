<x-main>
    <x-slot name="header">
        {{ __('recipes.create.title') }}
    </x-slot>

    <x-errors :errors="$errors"></x-errors>

    <div class="px-6">
        <form method="POST" action="{{ route('recipes.store') }}">
            @csrf
            <div>
                <x-label for="name" :value="__('recipes.create.nameLabel')"></x-label>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                         autofocus></x-input>
            </div>
            <div class="mt-4">
                <x-label for="notes" :value="__('recipes.create.notesLabel')"></x-label>
                <x-input id="notes" class="block mt-1 w-full" type="text" name="notes" :value="old('notes')"
                         autofocus></x-input>
            </div>

            <div class="ingredients-section mt-8">
                <h3 class="mb-4">{{ __('recipes.create.ingredients.ingredientsLabel') }}</h3>
                <div id="ingredient-inputs" class="grid grid-cols-4 gap-4">
                    <div class="w-full mb-6 md:mb-0 mr-2 col-span-2">
                        <x-label for="ingredient-name-input"
                                 :value="__('recipes.create.ingredients.nameLabel')"></x-label>
                        <x-input id="ingredient-name-input" class="block mt-1 w-full" type="text"
                                 name="ingredients[0][name]"
                                 autofocus></x-input>
                    </div>
                    <div class="w-full mb-6 md:mb-0">
                        <x-label for="ingredient-quantity-input"
                                 :value="__('recipes.create.ingredients.quantityLabel')"></x-label>
                        <x-input id="ingredient-quantity-input" class="block mt-1 w-full" type="text"
                                 name="ingredients[0][quantity]" autofocus></x-input>
                    </div>
                    <div class="w-full mb-6 md:mb-0">
                        <x-label for="unit-measure-select"
                                 :value="__('recipes.create.ingredients.unitMeasureLabel')"></x-label>
                        <div class="relative">
                            <select class="block mt-1 p-2 appearance-none w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    id="unit-measure-select"
                                    name="ingredients[0][unit_measure]">
                                @foreach (\App\Models\Ingredient::$UNIT_MEASURES as $unit)
                                    <option>{{ $unit }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div id="add-ingredient-btn"
                     class="mt-4 flex items-center justify-end">
                    <i class="fa-solid fa-circle-plus"></i>
                </div>
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('recipes.save') }}
                </x-button>
            </div>
        </form>
    </div>
</x-main>

<script>
    const addIngredientInput = () => {
        console.log('click');
        $('#ingredient-inputs').last().clone().find('input select').each(function (input) {
            input.name = input.name.replace(/\d+/, function (n) {
                return n++
            });

            input.value = "";
        }).appendTo('.ingredients-section');
    }
</script>