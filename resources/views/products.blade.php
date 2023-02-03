<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stonks Pizzas') }}
        </h2>
    </x-slot>
    <div class="container px-12 py-8 mx-auto">
        <h3 class="text-2xl font-bold">Onze Pizzas</h3>
        <div class="h-1 bg-blue-800 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
            <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                <img src="{{ url($product->image) }}" alt="" class="w-full max-h-60">
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                    <span></span>
                    <span id="Product-{{ $product->id }}" class="mt-2 text-gray-500">€{{ $product->price }}</span>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->image }}"  name="image">
                        <input id="FProduct-{{ $product->id }}"  type="hidden" value="{{ $product->price }}" name="price">
                        <select onchange="updatePrice('Product-{{ $product->id }}', value, '{{ $product->price }} ')" name="size" id="" class="w-56 mb-2">
                            <option value="medium">Medium</option>
                            <option  value="small">Small</option>
                            <option value="large">Large</option>
                        </select>
                        <input type="number" value="1" min="1" name="quantity" class="w-16 rounded-lg px-3">

                        <label for="toppings">Extra Toppings:</label></br>
                        @foreach ($toppings as $topping )
                        <input onchange="updatePriceTopping('Product-{{ $product->id }}', checked)" type="checkbox" value="{{ $topping->id }}"><label> 
                            {{ $topping->name }} €{{ $topping->price }}</label></br>
                        @endforeach

                    </br> <button class="px-[40px] py-[10px] text-white text-sm bg-blue-800 rounded">Add To Cart</button>
                    </form>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
