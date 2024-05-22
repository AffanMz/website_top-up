<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jester Diamond</title>
    @vite('resources/css/app.css')

    <!-- alpine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.10/dist/cdn.min.js"></script>
</head>
<body class="bg-[#151515]">
    <x-header>

    </x-header>

    <!-- main -->
    <main>
        <!-- caurosel -->
        <section class="container mx-auto">
            <div class="max-w-4xl mx-auto relative" x-data="{
                activeSlide: 1,
                slides: [
                    {id:1, body: 'images/banner1e.jpg'},
                    {id:2, body: 'images/banner2.jpg'},
                    {id:3, body: 'images/banner3e.jpg'},
                    {id:4, body: 'images/banner4.png'},
                    ],
                    loop(){
                        setInterval(() => {this.activeSlide = this.activeSlide === 4 ? 1 : this.activeSlide + 1}, 2000)
                    }
            }"
            x-init = "loop"
            >
            <!-- data di loop -->
            <template x-for="slide in slides" :key="slide.id">
                <div class="h-88 flex items-center max-w-3xl mx-auto text-white rounded-lg" x-show="activeSlide === slide.id">
                    <div class="">
                        <img :src="slide.body" alt="">
                    </div>
                </div>
            </template>

            <!-- btn back/next -->
            <div class="absolute flex inset-0">
                <div class="flex items-center justify-start w-1/2 ">
                    <button x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#fff" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                        </svg>
                    </button>
                </div>
                <div class="flex items-center justify-end w-1/2">
                    <button x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#fff" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- btn bottom -->
            <div class="absolute ml-96 flex justify-center items-center px-4 mt-2">
                <template x-for="slide in slides" :key="slide.id">
                    <button class="flex-1 rounded-full w-2 h-2 p-1 mx-1 overflow-hidden transition-colors duration-200 ease-out" :class="{
                        'bg-white' : activeSlide === slide.id,
                        'bg-slate-700' : activeSlide !== slide.id
                    }" x-on:click="activeSlide = slide.id"></button>
                </template>
            </div>
            </div>
        </section>
        <!-- end caurosel -->

        <!-- section game -->
        <section class="container mx-auto my-10">
            <div class="flex items-center justify-between mb-6">
                <h4 class="text-white font-semibold text-xl">Games</h4>
                @if(Auth::check())
                    @if(Auth::user()->isAdmin())
                    <div class="">
                        <a href="{{ route('gamespage') }}" class="px-3 py-2 font-semibold mb-5 bg-yellow-500 hover:bg-yellow-600 rounded-md ">Kelola Data Game</a>
                        <a href="{{ route('orderspage') }}" class="px-3 py-2 font-semibold mb-5 bg-green-500 hover:bg-green-600 rounded-md ">Kelola Data Order</a>
                    </div>
                    @endif

                @endif
            </div>
            <div class="grid grid-cols-4 gap-6">
                @foreach ($games as $game)
                <div class="card rounded-md shadow-md shadow-slate-700 relative overflow-hidden">
                    <img src="{{ asset('storage/images/' . $game->picture) }}" alt="{{$game->picture}}" class="h-full w-full object-cover">
                    <a href="#">
                        <div class="card-body w-full h-full top-0 -right-full absolute bg-[#1f3d4738] backdrop-blur-xl flex justify-center flex-col items-center ">
                            <img src="images/Logo.png" alt="img-logo" class="w-12 rounded-full mb-4">
                            <h1 class="text-white font-normal text-sm">{{ $game->title }}</h1>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </section>
        <!-- end section game -->    
        
        <!-- section voucher -->
        <section class="container mx-auto my-10">
            <h4 class="text-white font-semibold text-xl mb-4">Voucher</h4>
            <div class="grid grid-cols-4 gap-6">
                <div class="card rounded-md shadow-md shadow-slate-700 relative overflow-hidden">
                        <img src="images/voucher-dana.jpg" alt="img-voucher-dana" class="h-full w-full object-cover">
                        <div class="card-body w-full h-full top-0 -right-full absolute bg-[#1f3d4738] backdrop-blur-xl flex justify-center flex-col items-center ">
                            <h1 class="text-white font-normal text-xl">Dana</h1>
                            <p class="text-amber-300 font-normal text-sm">Voucher</p>
                        </div>
                </div>
                <div class="card rounded-md shadow-md shadow-slate-700 relative overflow-hidden">
                        <img src="images/voucher-gopay.jpg" alt="img-voucher-gopay" class="h-full w-full object-cover">
                        <div class="card-body w-full h-full top-0 -right-full absolute bg-[#1f3d4738] backdrop-blur-xl flex justify-center flex-col items-center ">
                            <h1 class="text-white font-normal text-xl">Gopay</h1>
                            <p class="text-amber-300 font-normal text-sm">Voucher</p>
                        </div>
                </div>
                <div class="card rounded-md shadow-md shadow-slate-700 relative overflow-hidden">
                        <img src="images/voucher-shopee.png" alt="img-voucher-shopee" class="h-full w-full object-cover">
                        <div class="card-body w-full h-full top-0 -right-full absolute bg-[#1f3d4738] backdrop-blur-xl flex justify-center flex-col items-center ">
                            <h1 class="text-white font-normal text-xl">Shopee</h1>
                            <p class="text-amber-300 font-normal text-sm">Voucher</p>
                        </div>
                </div>
            </div>
        </section>
        <!-- end section voucher -->
    </main>
    <!-- end main -->

    <!-- footer -->
    <x-footer>

    </x-footer>
    <!-- end footer -->

</body>
</html>