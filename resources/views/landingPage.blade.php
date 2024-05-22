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
    <header class="bg-transparent top-0 left-0 w-full">
        <nav class="container mx-auto p-4 flex items-center justify-between z-10 text-white">
            <!-- logo -->
            <div>
                <img src="images/Logo.png" alt="ini logo" class="rounded-full w-14">
            </div>

            <!-- nav item -->
            <div class="flex items-center gap-2 ">
                <ul>
                    <li class="">
                        <a href="" class="flex items-center gap-2 mx-5 py-2">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                        </svg>
                    </span>
                    Daftar Layanan
                    </a></li>
                </ul>
                <ul>
                    <li class="">
                        <a href="" class="flex items-center gap-2 mx-5 py-2">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                        </svg>
                    </span>
                    Dukungan Pelanggan
                    </a>
                </li>
                </ul>
                <ul>
                    <li class="">
                        <a href="" class="flex items-center gap-2 mx-5 py-2">
                        <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gem" viewBox="0 0 16 16">
                        <path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6zm11.386 3.785-1.806-2.41-.776 2.413zm-3.633.004.961-2.989H4.186l.963 2.995zM5.47 5.495 8 13.366l2.532-7.876zm-1.371-.999-.78-2.422-1.818 2.425zM1.499 5.5l5.113 6.817-2.192-6.82zm7.889 6.817 5.123-6.83-2.928.002z"/>
                        </svg>
                    </span>
                    Membership
                    </a>
                </li>
                </ul>
            </div>

            <!-- login or regis -->
            <div class="flex items-center gap-2">
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                </svg>
                </span>

                <a href="">Masuk/Daftar</a>
            </div>
        </nav>
    </header>

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
            <h4 class="text-white font-semibold text-xl mb-4">Games</h4>
            <div class="grid grid-cols-4 gap-6">
                <div class="card rounded-md shadow-md shadow-slate-700 relative overflow-hidden">
                    <img src="images/mobileLegend.jpg" alt="img-mobileLegend" class="h-full w-full object-cover">
                    <div class="card-body w-full h-full top-0 -right-full absolute bg-[#1f3d4738] backdrop-blur-xl flex justify-center flex-col items-center ">
                        <img src="images/Logo.png" alt="img-logo" class="w-12 rounded-full mb-4">
                        <h1 class="text-white font-normal text-sm">Mobile Legend</h1>
                    </div>
                </div>
                <div class="card rounded-md shadow-md shadow-slate-700 relative overflow-hidden">
                    <img src="images/pubg.jpg" alt="img-pubg" class="h-full w-full object-cover">
                    <div class="card-body w-full h-full top-0 -right-full absolute bg-[#1f3d4738] backdrop-blur-xl flex justify-center flex-col items-center ">
                        <img src="images/Logo.png" alt="img-logo" class="w-12 rounded-full mb-4">
                        <h1 class="text-white font-normal text-sm">PUBG Mobile</h1>
                    </div>
                </div>
                <div class="card rounded-md shadow-md shadow-slate-700 relative overflow-hidden">
                    <img src="images/freefire.jpg" alt="img-freefire" class="h-full w-full object-cover">
                    <div class="card-body w-full h-full top-0 -right-full absolute bg-[#1f3d4738] backdrop-blur-xl flex justify-center flex-col items-center ">
                        <img src="images/Logo.png" alt="img-logo" class="w-12 rounded-full mb-4">
                        <h1 class="text-white font-normal text-sm">Free Fire</h1>
                    </div>
                </div>
                <div class="card rounded-md shadow-md shadow-slate-700 relative overflow-hidden">
                    <img src="images/valorant.jpg" alt="img-valorant" class="h-full w-full object-cover">
                    <div class="card-body w-full h-full top-0 -right-full absolute bg-[#1f3d4738] backdrop-blur-xl flex justify-center flex-col items-center ">
                        <img src="images/Logo.png" alt="img-logo" class="w-12 rounded-full mb-4">
                        <h1 class="text-white font-normal text-sm">Valorant</h1>
                    </div>
                </div>
                <div class="card rounded-md shadow-md shadow-slate-700 relative overflow-hidden">
                    <img src="images/genshin.jpg" alt="img-genshin" class="h-full w-full object-cover">
                    <div class="card-body w-full h-full top-0 -right-full absolute bg-[#1f3d4738] backdrop-blur-xl flex justify-center flex-col items-center ">
                        <img src="images/Logo.png" alt="img-logo" class="w-12 rounded-full mb-4">
                        <h1 class="text-white font-normal text-sm">Genshin Impact</h1>
                    </div>
                </div>
                <div class="card rounded-md shadow-md shadow-slate-700 relative overflow-hidden">
                    <img src="images/tower.jpg" alt="img-tower" class="h-full w-full object-cover">
                    <div class="card-body w-full h-full top-0 -right-full absolute bg-[#1f3d4738] backdrop-blur-xl flex justify-center flex-col items-center ">
                        <img src="images/Logo.png" alt="img-logo" class="w-12 rounded-full mb-4">
                        <h1 class="text-white font-normal text-sm">Tower of Fantasy</h1>
                    </div>
                </div>
                <div class="card rounded-md shadow-md shadow-slate-700 relative overflow-hidden">
                    <img src="images/arena.jpeg" alt="img-arena" class="h-full w-full object-cover">
                    <div class="card-body w-full h-full top-0 -right-full absolute bg-[#1f3d4738] backdrop-blur-xl flex justify-center flex-col items-center ">
                        <img src="images/Logo.png" alt="img-logo" class="w-12 rounded-full mb-4">
                        <h1 class="text-white font-normal text-sm">Arena Brekout</h1>
                    </div>
                </div>
                <div class="card rounded-md shadow-md shadow-slate-700 relative overflow-hidden">
                    <img src="images/aov.jpg" alt="img-aov" class="h-full w-full object-cover">
                    <div class="card-body w-full h-full top-0 -right-full absolute bg-[#1f3d4738] backdrop-blur-xl flex justify-center flex-col items-center ">
                        <img src="images/Logo.png" alt="img-logo" class="w-12 rounded-full mb-4">
                        <h1 class="text-white font-normal text-sm">Arena of Valor</h1>
                    </div>
                </div>
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
    <footer class="container mx-auto mt-16 ">
        <div class="flex py-16 justify-between">
            <div class="w-6/12 flex flex-col">
                    <div class="flex items-center gap-2 mb-8">
                        <img src="images/logo.png" alt="img-logo" class="rounded-full w-12 mr-4">
                        <p class="text-base text-white">Top-Up game termurah hanya di Jester Diamond. Proses Cepat, 100% legal, Data customer aman, dan pastinya dijamin murah banget !</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <img src="images/shopeepay-logo.png" alt="" class="w-16">
                        <img src="images/Bank_Mandiri.png" alt="" class="w-16">
                        <img src="images/link-aja.png" alt="" class="w-16">
                        <img src="images/Logo_dana.png" alt="" class="w-16">
                        <img src="images/Logo_ovo.png" alt="" class="w-16">
                    </div>
            </div>
            <div class="w-4/12 flex flex-col">
                <div class="mb-4">
                    <h4 class="font-semibold text-white mb-5 text-xl">Social Media</h4>
                    <div class="flex flex-row items-center">
                    <div class="flex items-center gap-2 mr-3">
                            <img src="images/icon-ig.svg" alt="icon-ig" class="w-6">
                            <a href="" class="text-white">@jesterdiamond</a>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="images/icon-wa.svg" alt="icon-wa" class="w-6">
                            <a href="" class="text-white">0878-1579-7525</a>
                        </div>
                    </div>
                </div>  
                
                <div class="mb-3">
                    <h4 class="font-semibold text-white mb-2 text-xl">Peta Situs</h4>
                    <div class="flex flex-row">
                        <p><a href="#" class="text-sm text-white mr-4">Beranda</a></p>
                        <p><a href="#" class="text-sm text-white">Daftar Layanan</a></p>
                    </div>
                </div>

                <div class="">
                    <h4 class="font-semibold text-white mb-2 text-xl">Dukungan Pelanggan</h4>
                    <div class="flex flex-row">
                        <p><a href="#" class="text-sm text-white mr-4">Admin 24 Jam</a></p>
                        <p><a href="#" class="text-sm text-white">Membership</a></p>
                    </div>
                </div>

            </div>
                </div>
            
            <hr class="text-white">
            <div class="flex flex-row py-4">
                <p class="text-white text-sm"> <span class="mr-2">©</span> 2024 Jester Diamond. Semua Hak Cipta</p>
                <p class="text-white text-sm ml-9">Syarat dan Ketentuan Pengguna</p>
            </div>
    </footer>
    <!-- end footer -->

</body>
</html>