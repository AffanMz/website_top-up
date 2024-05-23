<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Users</title>
    @vite('resources/css/app.css');
</head>
<body class="bg-[#151515]">
    <x-header>

    </x-header>

    <main>
        <section class="container mx-auto">
            <form action="#">
                <h3 class="text-white font-semibold text-2xl my-8">Pilihan Item</h3>
                <div class="w-full grid grid-cols-2 gap-3">
                    <div class="">
                        <label for="spesial_item" class="cursor-pointer">
                            <input type="radio" name="item" id="spesial_item" value="spesial_item" class="peer sr-only"/>
                                <div class="max-w-xl flex items-center justify-center p-5 bg-white rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                                    <p class="font-semibold text-lg">Spesial Item</p>
                                </div>
                        </label>
                    </div>
                    <div class="">
                        <label for="top_up" class="cursor-pointer">
                            <input type="radio" name="item" id="top_up" value="top_up" class="peer sr-only"/>
                                <div class="max-w-xl flex items-center justify-center p-5 bg-white rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                                    <p class="font-semibold text-lg">Top Up</p>
                                </div>
                        </label>
                    </div>
                </div>

                <div class="flex flex-col">
                    <label for="nominal_diamond" class="font-semibold my-8 text-2xl text-white">Judul / Nominal Diamond</label>
                    <input type="number" placeholder="50" name="nominal_diamond" id="nominal_diamond" class="w-full rounded-md px-3 py-3 italic"/>
                </div>

                <div class="flex flex-col">
                    <label for="harga_nominal" class="font-semibold my-8 text-2xl text-white">Harga Nominal</label>
                    <input type="number" placeholder="Rp.20.000" name="harga_nominal" id="harga_nominal" class="w-full rounded-md px-3 py-3 italic"/>
                </div>

                <div class="my-12">
                    <button
                        type="submit"
                        class="font-semibold text-xl block w-full bg-amber-300 p-3 rounded-md duration-200 ease-in-out transition hover:bg-amber-200"
                    >
                        Tambah List
                    </button>
                </div>
            </form>

        </section>
        <!-- <section class="flex justify-center items-center h-screen">
    </main>


    <div class="border rounded-md border-white w-6/12 ">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg py-10 bg-black">
            <form class="max-w-sm mx-auto" method="POST" action="{{ route('items.store') }}">
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