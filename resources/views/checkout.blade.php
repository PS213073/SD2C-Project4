<x-app-layout>
    <x-slot name="header">
        <p class=" text-1xl font-semibold text-xl text-gray-800">
            {{ __('Ordernumber: 2394939') }}
</p>
    </x-slot>
            <main class="my-7">
              <div class="container  mx-auto">
                  <div class="flex justify-center my-6">
                      <div class="flex flex-col w-full p-8 text-green-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                        @if ($message = Session::get('success'))
                            <div class="p-4 mb-3 bg-green-400 rounded">
                                <p class="text-green-800">{{ $message }}</p>
                            </div>
                        @endif
                          <h3 class="text-3xl font-bold">Uitchecken</h3>
                          <h1 class=" text-red-600 text-2xl font-bold">Bedankt voor uw bestelling bij StonksPizza!:)</h1>

                            <img class="img_pizza h-[200px] w-[200px]" src="https://www.panarottis.com/media/2005/untitled-design-6-3.png?anchor=center&mode=crop&width=637&height=639" />


                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                  <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                      <table class="min-w-full">
                                        <thead class="border-b">
                                          <tr>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                              Naam
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                              Aantal
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                             Prijs
                                            </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          
                                       
                           
                               @foreach ($cartItems as $item)
                              <tr>
                                <td>
                                    <p class="mb-2 text-purple-600 font-bold">{{ $item->name }}</p>
                                </td>

                               
                                <td class="justify-center mt-6 md:justify-end md:flex">
                                  <div class="h-10 w-28">
                                    <div class="relative flex flex-row w-full h-8">
                                    <p>x &nbsp;</p>
                                    <p class="mb-2 text-purple-600 font-bold">{{ $item->quantity }}</p>
                                    </div>
                                  </div>
                                </td>

                                <td class="hidden text-right md:table-cell">
                                  <span class="text-sm font-medium lg:text-base">
                                    €{{ $item->price }}
                                  </span>
                                </td>
                                
                                </form>
                                  
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                               
                            </tbody>
                          </table>
                          <div class="relative right-[80%] left-0 top-7 text-lg font-bold">
                           Totaal:<strong> € {{ Cart::getTotal() }}</strong>
                          </div>
                          <div class="flex mt-10">
                          <div>
                        </div>
                        </div>
                      </div>
                    </div>
              </div>
          </main>
          
  </x-app-layout>