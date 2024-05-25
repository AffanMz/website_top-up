<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Orders</title>
    @vite('resources/css/app.css');
</head>
<body class="bg-[#151515]">
    <x-header>

    </x-header>

    <main>
        <div class="flex px-10 my-8">
            <div class="w-full ps-5 pe-10">
                <div class="flex">
                    <button class="px-4 py-2 font-semibold rounded-md mb-3 bg-amber-300 hover:bg-amber-500"><a href="{{ route('landingPage') }}">&laquo;  Kembali</a></button>
                    <p class="text-yellow-200 ml-10 italic pt-2">Tidak bisa menambahkan dan mengedit data order, anda harus order seperti biasa.</p>
                </div>
                <div class="rounded-md">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-white dark:text-white">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-white dark:text-[#151515]">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ID Accont
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ID Server
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama User
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        WhatsApp
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Item
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Harga
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $users as $data)
                                <tr class="odd:bg-white odd:dark:bg-[#151515] even:bg-gray-50 even:dark:bg-[#151515] border-b dark:border-white">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $loop->iteration; }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $data->id_acc; }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $data->id_server; }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $data->user->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $data->user->phone }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $data->item->title }} | {{ ($data->item->value + $data->item->value_up) }}
                                    </td>
                                    <td class="px-6 py-4">
                                        Rp. {{ $data->item->price }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('orders.destroy',$data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            {{-- <input type="hidden" name="id_game" value="{{ $id }}"> --}}
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
        </div>
    </main>

    <x-footer>

    </x-footer>







{{-- <section class="flex justify-center users-center h-screen">
    <div class="border rounded-md border-white w-6/12 ">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg py-10 bg-black">
            <form class="max-w-sm mx-auto" method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Number Phone</label>
                <input type="text" id="text" name="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @old('number') }}" placeholder="masukkan Nomer Hp" required />
                @error('number')
                    <span>{{ $message }}</span>
                @enderror
                </div>
                <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                @error('number')
                    <span>{{ $message }}</span>
                @enderror
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
            </form>
        </div>
    </div>
</section> --}}


</body>
</html>