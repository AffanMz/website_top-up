<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Top Up</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#151515]">
    <x-header>

    </x-header>

    <main>
        <section class="container mx-auto flex justify-center">
                <img src="images/banner-top-up.jpg" alt="img-banner-top-up" class="rounded-lg max-w-4xl">
        </section>

        <section class="container mx-auto my-10">
            <div class="bg-slate-200 px-12 py-10 rounded-lg w-full">
                <div class="flex items-center gap-4">
                    <div class="px-4 py-2 flex items-center rounded-lg justify-center bg-[#151515]">
                        <p class="text-white">1</p>
                    </div>
                    <h3 class="font-semibold text-xl">Masukan Data Akun Kamu</h3>
                </div>

                <form action="#" class="my-6">
                        <div class="grid grid-cols-2 w-full">
                        <div class="flex flex-col">
                            <label for="idAkun" class="font-semibold mb-2 text-lg">ID Akun</label>
                            <input type="text" name="idAkun" id="idAkun" class="w-full rounded-md px-3 py-2">
                        </div>
                        <div class="flex flex-col ml-3">
                            <label for="idAkun" class="font-semibold mb-2 text-lg">Server Kamu</label>
                            <input type="text" name="idAkun" id="idAkun" class="w-full rounded-md px-3 py-2">
                        </div>
                    </div>
                    </form>
                    <p class="text-sm italic">Untuk menemukan ID & Server akun Anda, klik avatar Anda di pojok kiri atas layar dan buka tab Info Umum. Contoh: 12345678 (9864), maka ID adalah 12345678 dan Server adalah 9864</p>
            </div>
        </section>

        <section class="container mx-auto my-10">
            <div class="bg-slate-200 px-12 py-10 rounded-lg w-full">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="px-4 py-2 flex items-center rounded-lg justify-center bg-[#151515]">
                            <p class="text-white">2</p>
                        </div>
                        <h3 class="font-semibold text-xl">Pilih Nominal Diamond</h3>
                    </div>
                    <div class="">
                        <button class="px-4 py-2 font-semibold rounded-md bg-amber-300"><a href="#">Tambah</a></button>
                        <button class="px-4 py-2 font-semibold rounded-md bg-amber-300"><a href="#">Edit</a></button>
                        <button class="px-4 py-2 font-semibold rounded-md bg-amber-300"><a href="#">Delete</a></button>
                    </div>
                </div>

                <div class="my-6">
                    <p class="font-semibold text-lg mb-2">Spesial Item</p>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="">
                            <label for="1Weekly" class="cursor-pointer">
                                <input type="radio" value="1Weekly" class="peer sr-only" id="1Weekly" name="weekly"/>
                                <div class=" max-w-xl p-5 bg-white rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                                    <div class="flex items-center justify-between">
                                        <div class="flex flex-col">
                                            <p class="font-semibold text-lg">weekly Diamond Pass</p>
                                            <p class="text-sm">Rp.1.494</p>
                                        </div>
                                        <img src="images/cycling.png" alt="icon-diamond" class="w-12">
                                    </div>
                                </div>
                                
                            </label>
                            </div>
                            <div class="">
                            <label for="2Weekly" class="cursor-pointer">
                                <input type="radio" class="peer sr-only" id="2Weekly" name="weekly" value="2Weekly">
                                <div class=" max-w-xl p-5 bg-white rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                                    <div class="flex items-center justify-between">
                                        <div class="flex flex-col">
                                            <p class="font-semibold text-lg">2x weekly diamond</p>
                                            <p class="text-sm">Rp.1.494</p>
                                        </div>
                                        <img src="images/cycling.png" alt="icon-diamond" class="w-12">
                                    </div>
                                </div>
                            </label>
                            </div>

                            <div class="">
                            <label for="3Weekly" class="cursor-pointer">
                                <input type="radio" class="peer sr-only" id="3Weekly" name="weekly">
                                <div class=" max-w-xl p-5 bg-white rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                                    <div class="flex items-center justify-between">
                                        <div class="flex flex-col">
                                            <mond class="font-semibold text-lg">3x Weekly Diamond</p>
                                            <p class="text-sm">Rp.1.494</p>
                                        </div>
                                        <img src="images/cycling.png" alt="icon-diamond" class="w-12">
                                    </div>
                                </div>
                            </label>
                            </div>
                        
                    </div>
                </div>

                <div class="my-6">
                    <p class="font-semibold text-lg mb-2">Top Up</p>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="">
                            <label for="5Diamond" class="cursor-pointer">
                                <input type="radio" value="5Diamond" class="peer sr-only" id="5Diamond" name="diamond"/>
                                <div class=" max-w-xl p-5 bg-white rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                                    <div class="flex items-center justify-between">
                                        <div class="flex flex-col">
                                            <p class="font-semibold text-lg">5(5+0) Diamonds</p>
                                            <p class="text-sm">Rp.1.494</p>
                                        </div>
                                        <img src="images/diamond.png" alt="icon-diamond" class="w-12">
                                    </div>
                                </div>
                                
                            </label>
                            </div>
                            <div class="">
                            <label for="10Diamond" class="cursor-pointer">
                                <input type="radio" class="peer sr-only" id="10Diamond" name="diamond">
                                <div class=" max-w-xl p-5 bg-white rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                                    <div class="flex items-center justify-between">
                                        <div class="flex flex-col">
                                            <p class="font-semibold text-lg">5(5+0) Diamonds</p>
                                            <p class="text-sm">Rp.1.494</p>
                                        </div>
                                        <img src="images/diamond.png" alt="icon-diamond" class="w-12">
                                    </div>
                                </div>
                            </label>
                            </div>

                            <div class="">
                            <label for="15Diamond" class="cursor-pointer">
                                <input type="radio" class="peer sr-only" id="15Diamond" name="diamond">
                                <div class=" max-w-xl p-5 bg-white rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                                    <div class="flex items-center justify-between">
                                        <div class="flex flex-col">
                                            <p class="font-semibold text-lg">5(5+0) Diamonds</p>
                                            <p class="text-sm">Rp.1.494</p>
                                        </div>
                                        <img src="images/diamond.png" alt="icon-diamond" class="w-12">
                                    </div>
                                </div>
                            </label>
                            </div>
                        
                    </div>
                </div>

                <div class="my-6">
                <p class="font-semibold text-lg mb-2">Metode Pembayaran</p>
                <div class="flex flex-row gap-4">
                    <label for="shopee" class="cursor-pointer">
                        <input type="radio" class="peer sr-only" id="shopee" value="shopee" name="pay"/>
                        <div class="py-2 px-8 bg-transparent rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                            <img src="images/shopeepay-logo.png" alt="icon-shopeepay" class="w-16">
                            
                        </div>
                    </label>
                    <label for="bankMandiri" class="cursor-pointer">
                        <input type="radio" class="peer sr-only" id="bankMandiri" value="bankMandiri" name="pay"/>
                        <div class="py-2 px-8 bg-transparent rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                            <img src="images/Bank_Mandiri.png" alt="icon-bankMandiri" class="w-16">
                            
                        </div>
                    </label>
                    <label for="linkAja" class="cursor-pointer">
                        <input type="radio" class="peer sr-only" id="linkAja" value="linkAja" name="pay"/>
                        <div class="py-2 px-8 bg-transparent rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                            <img src="images/link-aja.png" alt="icon-linkAja" class="w-16">
                            
                        </div>
                    </label>
                    <label for="dana" class="cursor-pointer">
                        <input type="radio" class="peer sr-only" id="dana" value="dana" name="pay"/>
                        <div class="py-2 px-8 bg-transparent rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                        <img src="images/Logo_dana.png" alt="icon-dana" class="w-16">
                            
                        </div>
                    </label>
                    <label for="ovo" class="cursor-pointer">
                        <input type="radio" class="peer sr-only" id="ovo" value="ovo" name="pay"/>
                        <div class="py-2 px-8 bg-transparent rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                        <img src="images/Logo_ovo.png" alt="icon-ovo" class="w-16">
                        </div>
                    </label>
                </div>
                </div>
            </div>
        </section>

        <section class="container mx-auto">
            <div class="bg-slate-200 px-12 py-10 rounded-lg w-full">
            <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4 w-[85%]">
                        <div class="px-4 py-2 flex items-center rounded-lg justify-center bg-[#151515]">
                            <p class="text-white">3</p>
                        </div>
                        <h3 class="font-semibold text-base">Cek pesanan ada terlebih dahulu pastikan data, orderan dan metode pembayaran sudah dipilih dengan di klik</h3>
                    </div>
                    <div class="">
                        <button class="px-3 py-2 font-semibold rounded-md bg-amber-300 text-xl"><a href="#">Order</a></button>
                        
                    </div>
                </div>
            </div>
            <p class="mt-2 text-white italic text-sm">Orderan Di Proses di Whatsapp jika sudah mengklik Order, pastikan segera melakukan pembayaran sesuai metode pembayaran yang dipilih maka baru akan di proses pesanan</p>
        </section>

    </main>

    <!-- footer -->
    <x-footer>

    </x-footer>
    <!-- end footer -->
</body>
</html>