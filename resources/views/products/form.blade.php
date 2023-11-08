<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ $action }}" method="POST">
                        @csrf
                        @isset($method)
                            @method($method)
                            @endif
                            <div class="mb-4">
                                <label for="Nombre"
                                    class="block text-gray-700 text-sm font-bold mb-2">{{ __('Nombre') }}</label>
                                <input type="text" name="Nombre" id="Nombre"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    value="{{ old('name', $product->name) }}">
                                @error('Nombre')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="Descripcion"
                                    class="block text-gray-700 text-sm font-bold mb-2">{{ __('Descripcion') }}</label>
                                <input type="text" name="Descripcion" id="Descripcion"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    value="{{ old('description', $product->description) }}">
                                @error('Descripcion')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="Cantidad"
                                    class="block text-gray-700 text-sm font-bold mb-2">{{ __('Cantidad') }}</label>
                                <input type="text" name="Cantidad" id="Cantidad"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    value="{{ old('quantity', $product->quantity) }}">
                                @error('Cantidad')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="Precio"
                                    class="block text-gray-700 text-sm font-bold mb-2">{{ __('Precio') }}</label>
                                <input type="text" name="Precio" id="Precio"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    value="{{ old('price', $product->price) }}">
                                @error('Precio')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="category_id" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Categoría') }}</label>
                                <select name="category_id" id="category_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>                            
                            <div class="flex justify-end">
                                <a href="{{ route('products.index') }}"
                                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">{{ __('Cancelar') }}</a>
                                <button type="submit"
                                    class="bg-indigo-500 hover:bg-indigo-700 text-dark font-bold py-2 px-4 rounded ml-2">{{ $buttonText }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
