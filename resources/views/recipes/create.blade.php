<x-main>
    <x-slot name="header">
        {{ __('recipes.create.title') }}
    </x-slot>

    <div class="px-6">
        <form method="POST" action="{{ route('recipes.store') }}">
            <div>
                <x-label for="name" :value="__('recipes.create.nameLabel')"></x-label>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus></x-input>
            </div>
            <div class="mt-4">
                <x-label for="notes" :value="__('recipes.create.notesLabel')"></x-label>
                <x-input id="notes" class="block mt-1 w-full" type="text" name="notes" required
                         autofocus></x-input>
            </div>
            <div class="mt-6">
                <h3 class="mb-2">{{ __('recipes.create.ingredients.ingredientsLabel') }}</h3>
                <div id="ingredient-inputs" class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full px-3 mb-6 md:mb-0 mr-2">
                        <x-label for="ingredient-name-input"
                                 :value="__('recipes.create.ingredients.nameLabel')"></x-label>
                        <x-input id="ingredient-name-input" class="block mt-1 w-full" type="text" name="name" required
                                 autofocus></x-input>
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0 mr-2">
                        <x-label for="ingredient-quantity-input"
                                 :value="__('recipes.create.ingredients.quantityLabel')"></x-label>
                        <x-input id="ingredient-quantity-input" class="block mt-1 w-full" type="text" name="quantity"
                                 required
                                 autofocus></x-input>
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="unit-measure-select">
                            {{ __('recipes.create.ingredients.unitMeasureLabel') }}
                        </label>
                        <div class="relative">
                            <select class="block appearance-none w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    id="unit-measure-select">
                                <option>cups</option>
                                <option>oz</option>
                                <option>tbsp</option>
                            </select>
                        </div>
                    </div>
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