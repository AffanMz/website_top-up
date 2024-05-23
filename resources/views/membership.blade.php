<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#151515]">
    <x-header>

    </x-header>

    <!-- main -->
    <main>
        <section class="container mx-auto flex justify-center">
            <img src="images/banner1e.jpg" alt="img-banner" class="rounded-lg max-w-4xl">
        </section>

        <section class="container mx-auto">
            <form action="#">
                <!-- membership -->
                <div class="">
                    <h3 class="text-white text-2xl font-semibold my-6">Pilih Tipe Membership</h3>

                    <div class="grid grid-cols-3 gap-6">
                        <label for="silver" class="cursor-pointer">
                            <input type="radio" name="membership" id="silver" value="silver" class="peer sr-only">
                            <div class="rounded-lg shadow-lg relative overflow-hidden hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2 peer-checked:scale-105 hover:duration-200 hover:transition-all hover:ease-in-out hover:shadow-amber-300 hover:scale-105">
                                <img src="images/silver.jpg" alt="img-silver" class="h-full w-full object-cover rounded-md">
                                <div class="w-full h-full right-0 bottom-0 absolute flex flex-col justify-end items-center -pb-2">
                                    <h1 class="text-white font-semibold text-sm">Member Silver</h1>
                                </div>
                            </div>
                        </label>

                        <label for="gold" class="cursor-pointer">
                            <input type="radio" name="membership" id="gold" value="gold" class="peer sr-only">
                            <div class="rounded-lg shadow-lg relative overflow-hidden hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2 peer-checked:scale-105 hover:duration-200 hover:transition-all hover:ease-in-out hover:shadow-amber-300 hover:scale-105">
                                <img src="images/silver.jpg" alt="img-silver" class="h-full w-full object-cover rounded-md">
                                <div class="w-full h-full right-0 bottom-0 absolute flex flex-col justify-end items-center -pb-2">
                                    <h1 class="text-white font-semibold text-sm">Member Gold</h1>
                                </div>
                            </div>
                        </label>

                        <label for="pro" class="cursor-pointer">
                            <input type="radio" name="membership" id="pro" value="pro" class="peer sr-only">
                            <div class="rounded-lg shadow-lg relative overflow-hidden hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2 peer-checked:scale-105 hover:duration-200 hover:transition-all hover:ease-in-out hover:shadow-amber-300 hover:scale-105">
                                <img src="images/silver.jpg" alt="img-silver" class="h-full w-full object-cover rounded-md">
                                <div class="w-full h-full right-0 bottom-0 absolute flex flex-col justify-end items-center -pb-2">
                                    <h1 class="text-white font-semibold text-sm">Member Pro</h1>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <!-- end membership -->

                <!-- metode pembayaran -->
                <div class="">
                    <h3 class="text-white text-2xl font-semibold my-8">Metode Pembayaran</h3>
                    <div class="bg-slate-200 px-12 py-14 rounded-lg w-full">
                        <div class="flex flex-row gap-6 items-center">
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
                <!-- end metode pembayaran -->

                <div class="">
                    <p class="text-white text-base font-semibold my-8">Order Membership sama seperti order biasa yaitu melalui Whatsapp, melakukan pembayaran baru akan diproses</p>

                    <div class="my-8">
                    <button
                        type="submit"                        
                        class="font-semibold block w-full bg-amber-300 text-2xl p-4 rounded-md duration-200 ease-in-out transition hover:bg-amber-200"
                    >
                        Pesan Membership
                    </button>
                    </div>
                </div>
            </form>
        </section>
    </main>
    <!-- end main -->

    <!-- footer -->
    <x-footer>

    </x-footer>
    <!-- end footer -->

    
</body>
</html>