  <x-app-layout>
  

    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800">
        {{ __('Your Items') }}
      </h2>
    </x-slot>
    <main class="my-8">
      <div class="container px-6 mx-auto">
        <div class="flex justify-center my-6">
          <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
            @if ($message = Session::get('success'))
            <div class="p-4 mb-3 bg-green-400 rounded">
              <p class="text-green-800">{{ $message }}</p>
            </div>
            @endif
            <h3 class="text-3xl font-bold">Winkelmaandje</h3>
            <div class="flex-1">
              <table class="w-full text-sm lg:text-base" cellspacing="0">
                <thead>
                  <tr class="h-12 uppercase">
                    <th class="hidden md:table-cell"></th>
                    <th class="text-left">Naam</th>
                    <th class="ml-32">
                      Hoeveelheid
                    </th>
                    <th class="hidden text-right md:table-cell"> Subtotaal </th>
                    <th class="hidden text-right md:table-cell"> Verwijder </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($cartItems as $item)
                  <tr>
  
                    <td class="hidden pb-4 md:table-cell">
                      <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                    </td>
  
                    <td>
                      <p class="mb-2 text-purple-600 font-bold">{{ $item->name }}</p>
                    </td>
                    <td class="justify-center mt-6 md:justify-end md:flex">
                      <div class="h-10 w-28">
                        <div class="relative flex flex-row w-full h-8">
  
                          <form action="{{ route('cart.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id}}">
                            <input type="number" readonly name="quantity" min="1" value="{{ $item->quantity }}"
                              class="w-14 text-center h-6 text-gray-800 outline-none rounded border-blue-600" />
                            {{-- <button
                              class="px-4 mt-1 py-1.5 text-sm rounded shadow text-violet-100 bg-violet-500">Update</button>
                            --}}
                          </form>
                        </div>
                      </div>
                    </td>
                    <td class="hidden text-right md:table-cell">
                      <span class="text-sm font-medium lg:text-base">
                        €{{ $item->price }}
                      </span>
                    </td>
                    <td class="hidden text-right md:table-cell">
                      <form action="{{ route('cart.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <button class="px-4 py-2 text-white bg-red-600 shadow rounded-full">x</button>
                      </form>
  
                    </td>
                  </tr>
                  @endforeach
  
                </tbody>
              </table>
              <div class="relative right-0 left-[80%] top-7 text-lg font-bold">
  
                Total:<strong> € {{ Cart::getTotal() }}</strong>
              </div>
  
              <div class="flex mt-10">
                <div>
                  <form action="{{ route('products.list') }}" method="GET">
                    @csrf
                    <button class="px-6 py-2 mr-2 text-sm  rounded shadow text-red-100 bg-green-500">Verder
                      winkelen</button>
                  </form>
                </div>
  
                <div>
                  <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    <button class="px-6 py-2 mr-52 text-sm  rounded shadow text-red-100 bg-red-500">Winkelmaandje Leeg Maken</button>
                  </form>
                </div>
                <div>
                  <form  method="GET">
                    @csrf
                    <button class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500">Uitchecken</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  
  </x-app-layout>


  


 
