<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product List') }}
        </h2>
    </x-slot>
    <div class="container px-12 py-8 mx-auto">
        <h3 class="text-2xl font-bold text-purple-700">Our Product</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
            <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                <img src="{{ url($product->image) }}" alt="" class="w-full max-h-60">
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                    <span>€</span>
                    <span id="Product-{{ $product->id }}" class="mt-2 text-gray-500">{{ $product->price }}</span>
                </br>  <select onchange="updatePrice('Product-{{ $product->id }}', value, '{{ $product->price }} ')"
                        name="size" class="w-56 mb-2 rounded">
                        <option value="medium">Medium</option>
                        <option value="small">Small</option>
                        <option value="large">Large</option>
                    </select>
                    <form  method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">Add To Cart</button>
                    </form>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
<script type="text/javascript">
    // Price calculation with size
    function updatePrice(id, value, price) {
        let newprice = 0.0;
        if (value == 'medium') {
            newprice = price
        } else if (value == 'large') {
            newprice = price * 1.2

        } else 
        {
            newprice = price * 0.8

        }
        document.getElementById(id).innerHTML = newprice.toFixed(2)
        document.getElementById("F"+id).value = newprice.toFixed(2)
    }

</script>