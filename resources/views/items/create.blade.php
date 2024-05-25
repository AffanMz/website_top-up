<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Items</title>
    @vite('resources/css/app.css');
</head>
<body class="bg-[#151515]">
    <x-header>

    </x-header>

    <main>
        <div class="flex px-10 my-8">
            <div class="w-1/2 px-10">
                <button class="px-4 py-2 font-semibold rounded-md mb-3 bg-amber-300 hover:bg-amber-500"><a href="{{ route('order.show', $id) }}">&laquo;  Kembali</a></button>
                <div class="rounded-md">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-white dark:text-white">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-white dark:text-[#151515]">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Value
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        price
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $items as $data)
                                <tr class="odd:bg-white odd:dark:bg-[#151515] even:bg-gray-50 even:dark:bg-[#151515] border-b dark:border-white">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $loop->iteration }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $data->title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $data->value }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $data->price }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('items.edit',$data->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <form action="{{ route('items.destroy',$data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id_game" value="{{ $id }}">
                                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="w-1/2 px-10">
                <form method="POST" action="{{ route('items.store') }}">
                    @csrf
                    <h3 class="text-white font-semibold text-2xl mb-3">Pilihan Item</h3>
                    <div class="w-full grid grid-cols-2 gap-3">
                        <div class="">
                            <label for="spesial_item" class="cursor-pointer">
                                <input type="radio" name="info" id="spesial_item" value="Special Item" class="peer sr-only" required {{ request()->is('/items.edit.{id}') && $item->info == 'Special Item' ? 'checked' : '' }} />
                                    <div class="max-w-xl flex items-center justify-center p-5 bg-white rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                                        <p class="font-semibold text-lg">Spesial Item</p>
                                    </div>
                            </label>
                        </div>
                        <div class="">
                            <label for="top_up" class="cursor-pointer">
                                <input type="radio" name="info" id="top_up" value="Top Up" class="peer sr-only" {{ request()->is('/items.edit.{id}') && $item->info == 'Top Up' ? 'checked' : '' }}/>
                                    <div class="max-w-xl flex items-center justify-center p-5 bg-white rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                                        <p class="font-semibold text-lg">Top Up</p>
                                    </div>
                            </label>
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <label for="title" class="font-semibold my-8 text-2xl text-white">Judul</label>
                        <input type="text" placeholder="Diamond / Special Weekly" name="title" id="title" class="w-full rounded-md px-3 py-3 italic" value="{{ request()->is('/items.edit.{id}') ? $item->title : @old('title') }}" required/>
                    </div>
    
                    <div class="flex flex-col">
                        <label for="value" class="font-semibold my-8 text-2xl text-white">Jumlah Diamond / Combo</label>
                        <input type="number" placeholder="5 / 10/ 50 (Diamond)  |  2x / 3x (Combo Weekly)" name="value" id="value" value="{{ request()->is('/items.edit.{id}') ? $item->value : @old('value') }}" class="w-full rounded-md px-3 py-3 italic" min="0" required/>
                    </div>

                    <div class="flex flex-col">
                        <label for="value_up" class="font-semibold my-8 text-2xl text-white">Tambahan Diamond</label>
                        <input type="number" placeholder="2 / 5 (Diamond Bonus)  |  Isi '0' jika Special Item" name="value_up" id="value_up" class="w-full rounded-md px-3 py-3 italic" value="{{ request()->is('/items.edit.{id}') ? $item->value_up : @old('value_up') }}" min="0" required/>
                    </div>
    
                    <div class="flex flex-col">
                        <label for="price" class="font-semibold my-8 text-2xl text-white">Harga Nominal</label>
                        <input type="number" placeholder="Rp.20.000" name="price" id="price" class="w-full rounded-md px-3 py-3 italic" min="0" value="{{ request()->is('/items.edit.{id}') ? $item->price : @old('price') }}" required/>
                    </div>

                    <input type="hidden" name="id_game" value="{{ request()->is('/items.edit.{id}') ? $item->id_game : $id }}">
    
                    <div class="my-12">
                        <button
                            type="submit"
                            class="font-semibold text-xl block w-full bg-amber-300 p-3 rounded-md duration-200 ease-in-out transition hover:bg-amber-200"
                        >
                            Tambah Item
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- <section class="flex justify-center items-center h-screen">


    <div class="border rounded-md border-white w-6/12 ">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg py-10 bg-black">
            <form class="max-w-sm mx-auto" method="POST" action="">
                @csrf
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" id="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @old('title') }}" placeholder="Input Title" required />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Value</label>
                    <input type="number" id="value" name="value" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @old('value') }}" placeholder="Input Value" required />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Value Up</label>
                    <input type="number" id="value_up" name="value_up" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @old('value_up') }}" placeholder="Input Value Up" required />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Information</label>
                    <input type="text" id="info" name="info" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @old('info') }}" placeholder="Input Information" required />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="number" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @old('info') }}" placeholder="Input Price" required />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Game</label>
                    <input type="number" id="game" name="game" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @old('info') }}" placeholder="Input Information" required />
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
            </form>
        </div>
    </div>
</section> -->

    <!-- footer -->
    <x-footer>

    </x-footer>
    <!-- end footer -->
</body>
</html>