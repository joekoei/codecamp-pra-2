<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="md:text-center">Nieuw boek aanmaken</h1>
                    <form action="{{route('admin.books.create.method')}}" method='post' class="md:m-4">
                        @csrf
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Naam van het boek
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                       class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full
                                     py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                       id="inline-full-name" type="text" name='name'>
                            </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Pagina's
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full
                                     py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                    id="inline-full-name" type="text" name="page">
                            </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Auteurs naam
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                       class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full
                                     py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                       id="inline-full-name" type="text" name="auteur">
                            </div>
                        </div>

                        @if(Auth::user()->rol === 'sales' || Auth::user()->rol === 'beheerder')
                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Prijs van het boek
                                    </label>
                                </div>
                                <div class="md:w-2/3">
                                    <input
                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full
                                     py-2 px-4 text-gray-700 leading-tight focus:outline-none"
                                        id="inline-full-name" type="text" name="price">
                                </div>
                            </div>
                        @endif

                        @if(Auth::user()->rol === 'content' || Auth::user()->rol === 'beheerder')
                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Beschrijving van het boek
                                    </label>
                                </div>
                                <div class="md:w-2/3">
                                <textarea
                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full
                                     py-2 px-4 text-gray-700 leading-tight focus:outline-none"
                                    id="inline-full-name" name="desc"></textarea>
                                </div>
                            </div>
                        @endif

                        <div class="md:flex  md:justify-end mb-6">
                            <div>
                                <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="Maak dit boek aan">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
