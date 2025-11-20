<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/cadastrar" method="post">
                        @csrf
                        <div class="mt-4">
                            <x-input-label for="linha" :value="__('Texto curto (até 50 caracteres)')" />
                            <x-text-input id="linha" class="block mt-1 w-full" type="text" name="linha" :value="old('linha')" maxlength="50" required autofocus autocomplete="linha" />
                            <x-input-error :messages="$errors->get('linha')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="data" :value="__('Data')" />
                            <x-text-input id="data" class="block mt-1 w-full" type="date" name="data" :value="old('data')" maxlength="500" required autofocus autocomplete="data" />
                            <x-input-error :messages="$errors->get('data')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="booleano" :value="__('Booleano')" />
                            <input id="booleanoTrue" type="radio" name="booleano" value="1"  {{ old('booleano') == '1' ? 'checked' : '' }} />Verdadeiro
                            <input id="booleanoFalse" type="radio" name="booleano" value="0" {{ old('booleano') == '0' ? 'checked' : '' }}/>Falso
                            <x-input-error :messages="$errors->get('booleano')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="decimal" :value="__('Decimal')" />
                            <x-text-input id="decimal" class="block mt-1 w-full" type="text" name="decimal" :value="old('decimal')" step="0.01" min='0' max='999999.99' required autocomplete="decimal" />
                            <x-input-error :messages="$errors->get('decimal')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="inteiro" :value="__('Inteiro')" />
                            <x-text-input id="inteiro" class="block mt-1 w-full" type="number" name="inteiro" :value="old('inteiro')" maxlength="500" required autofocus autocomplete="inteiro" />
                            <x-input-error :messages="$errors->get('inteiro')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Cadastrar') }}
                            </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
