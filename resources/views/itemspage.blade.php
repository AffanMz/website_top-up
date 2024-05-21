<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Users</title>
    @vite('resources/css/app.css');
</head>
<body>
<section class="flex justify-center items-center h-screen">
    <div class="border rounded-md border-white w-12/12">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <a href="{{ route('items.create') }}" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">Tambah</a>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                            Value_Up
                        </th>
                        <th scope="col" class="px-6 py-3">
                            info
                        </th>
                        <th scope="col" class="px-6 py-3">
                            price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            games
                        </th>
                        <th scope="col" class="px-6 py-3">
                            action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $items as $data)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
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
                            {{ $data->value_up }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->info }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->price }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->id_game }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('items.edit',$data->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('items.destroy',$data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="font-medium text-red-600 dark:text-red-500 hover:underline">hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</section>


</body>
</html>