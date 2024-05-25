<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Games</title>
    @vite('resources/css/app.css');
</head>
<body class="bg-[#151515]">

    <x-header>

    </x-header>

    <main>
        <div class="flex px-10 my-8">
            <div class="w-2/3 ps-5 pe-10">
                <div class="flex">
                    <button class="px-4 py-2 font-semibold rounded-md mb-3 bg-amber-300 hover:bg-amber-500"><a href="{{ route('games.create') }}">&laquo;  Kembali</a></button>
                    {{-- <p class="text-yellow-200 ml-10 italic pt-2">User yang ditambahkan menggunakan form disamping akan memiliki role admin.</p> --}}
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
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Picture
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ( $games as $data)
                                <tr class="odd:bg-white odd:dark:bg-[#151515] even:bg-gray-50 even:dark:bg-[#151515] border-b dark:border-white">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $loop->iteration; }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $data->title; }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <img width="50px"  src="{{ asset('storage/images/'. $data->picture) }}" alt="">
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('games.edit',$data->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <form action="{{ route('games.destroy',$data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id_game" value="{{ $id }}">
                                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach --}}
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="w-1/3 px-5">
                <form method="POST" action="{{ route('games.update',$cari->id) }}" enctype="multipart/form-data"">
                    @csrf
                    @method('PUT')
                    <h3 class="text-white font-semibold text-2xl mb-1">Update game</h3>

                    <div class="flex flex-col">
                        <label for="title" class="font-semibold my-8 text-2xl text-white">Title</label>
                        <input type="text" placeholder="Input title" name="title" id="title" class="w-full rounded-md px-3 py-3 italic" value="{{ $cari->title }}" required/>
                    </div>
                    <div class="flex flex-col">
                        <label for="picture" class="font-semibold my-8 text-2xl text-white">Picture</label>
                        <input type="file" placeholder="Input your picture" name="picture" id="picture" class="w-full rounded-md px-3 py-3 italic"/>
                    </div>    

                    {{-- <input type="hidden" name="role" value="{{ request()->is('/users.edit.{id}') ? 'admin' : 'admin' }}"> --}}
    
                    <div class="my-12">
                        <button
                            type="submit"
                            class="font-semibold text-xl block w-full bg-amber-300 p-3 rounded-md duration-200 ease-in-out transition hover:bg-amber-200"
                        >
                            Update Game
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <x-footer>

    </x-footer>

{{-- <section class="flex justify-center items-center h-screen">
    <div class="border rounded-md border-white w-6/12 ">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg py-10 bg-black">
            <form class="max-w-sm mx-auto" method="POST" action="{{ route('games.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" id="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @old('title') }}" placeholder="Input Title" required />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Picture</label>
                    <input type="file" id="picture" name="picture" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ @old('picture') }}" placeholder="Input Value" required />
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
            </form>
        </div>
    </div>
</section> --}}


</body>
</html>