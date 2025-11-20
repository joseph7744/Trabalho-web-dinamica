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
                            <x-input-label for="titulo" :value="__('Título da música')" />
                            <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')" maxlength="50" required autofocus autocomplete="titulo" />
                            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="artista" :value="__('Artista/Banda')" />
                            <x-text-input id="artista" class="block mt-1 w-full" type="text" name="artista" :value="old('artista')" maxlength="50" required autofocus autocomplete="artista" />
                            <x-input-error :messages="$errors->get('artista')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="genero" :value="__('Gênero Musical')" />
                            <x-text-input id="genero" class="block mt-1 w-full" type="text" name="genero" :value="old('genero')" maxlength="50" required autofocus autocomplete="genero" />
                            <x-input-error :messages="$errors->get('genero')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="ano_criacao" :value="__('Ano de Criação')" />
                            <x-text-input id="ano_criacao" class="block mt-1 w-full" type="date" name="ano_criacao" :value="old('ano_criacao')" maxlength="500" required autofocus autocomplete="ano_criacao" />
                            <x-input-error :messages="$errors->get('ano_criacao')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="duracao" :value="__('Duração da música')" />
                            <x-text-input id="duracao" class="block mt-1 w-full" type="text" name="duracao" :value="old('duracao')" maxlength="50" required autofocus autocomplete="duracao" />
                            <x-input-error :messages="$errors->get('duracao')" class="mt-2" />
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
