<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Users</title>
    @vite('resources/css/app.css');
</head>
<body class="bg-[#151515]">
    <x-header>

    </x-header>

    <main>
        <div class="flex px-10 my-8">
            <div class="w-2/3 ps-5 pe-10">
                <div class="flex">
                    <button class="px-4 py-2 font-semibold rounded-md mb-3 bg-amber-300 hover:bg-amber-500"><a href="{{ route('landingPage') }}">&laquo;  Kembali</a></button>
                    <p class="text-yellow-200 ml-10 italic pt-2">User yang ditambahkan menggunakan form disamping akan memiliki role admin.</p>
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
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Phone
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        action
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
                                        {{ $data->name; }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $data->phone; }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $data->email; }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('users.edit',$data->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <form action="{{ route('users.destroy',$data->id) }}" method="POST">
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
            <div class="w-1/3 px-5">
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <h3 class="text-white font-semibold text-2xl mb-1">Tambah User</h3>

                    <div class="flex flex-col">
                        <label for="name" class="font-semibold my-8 text-2xl text-white">Name</label>
                        <input type="text" placeholder="Input your name" name="name" id="name" class="w-full rounded-md px-3 py-3 italic" value="{{ request()->is('/users.edit.{id}') ? $item->title : @old('name') }}" required/>
                    </div>
                    <div class="flex flex-col">
                        <label for="phone" class="font-semibold my-8 text-2xl text-white">Phone</label>
                        <input type="text" placeholder="Input your phone number" name="phone" id="phone" class="w-full rounded-md px-3 py-3 italic" value="{{ request()->is('/users.edit.{id}') ? $item->title : @old('name') }}" required/>
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="font-semibold my-8 text-2xl text-white">Email</label>
                        <input type="email" placeholder="Input your Email" name="email" id="email" class="w-full rounded-md px-3 py-3 italic" value="{{ request()->is('/users.edit.{id}') ? $item->title : @old('name') }}" required/>
                    </div>
                    <div class="flex flex-col">
                        <label for="password" class="font-semibold my-8 text-2xl text-white">Password</label>
                        <input type="password" placeholder="Input your Password" name="password" id="password" class="w-full rounded-md px-3 py-3 italic" value="{{ request()->is('/users.edit.{id}') ? $item->title : @old('name') }}" required/>
                    </div>
    

                    <input type="hidden" name="role" value="{{ request()->is('/users.edit.{id}') ? 'admin' : 'admin' }}">
    
                    <div class="my-12">
                        <button
                            type="submit"
                            class="font-semibold text-xl block w-full bg-amber-300 p-3 rounded-md duration-200 ease-in-out transition hover:bg-amber-200"
                        >
                            Tambah Admin
                        </button>
                    </div>
                </form>
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