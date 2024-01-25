<x-app-layout>
    <div class="w-1/2 mx-auto">
        <!-- Título -->
        <div>
            <x-input-label for="titulo" :value="'Título del libro'" />
            <x-text-input id="titulo" class="block mt-1 w-full"
                type="text" name="titulo" :value="$libro->titulo" required
                readonly autofocus autocomplete="titulo" />
        </div>

        <!-- Autor -->
        <div class="mt-4">
            <x-input-label for="autor" :value="'Autor del libro'" />
            <x-text-input id="autor" class="block mt-1 w-full"
                type="text" name="autor" :value="$libro->autor" required
                readonly autofocus autocomplete="autor" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('libros.index') }}">
                <x-secondary-button class="ms-4">
                    Volver
                </x-primary-button>
            </a>
        </div>
    </div>
</x-app-layout>
