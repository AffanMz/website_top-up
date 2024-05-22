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

        <!-- section membership -->
        <section class="container mx-auto">
            <h3 class="text-white text-2xl font-semibold my-6">Pilih Tipe Membership</h3>

            <div class="grid grid-cols-3 gap-6">
                <div class="rounded-lg shadow-lg relative overflow-hidden hover:cursor-pointer hover:duration-200 hover:transition-all hover:ease-in-out hover:shadow-slate-700 hover:scale-105">
                    <img src="images/silver.jpg" alt="img-silver" class="h-full w-full object-cover rounded-md">
                    <div class="w-full h-full right-0 bottom-0 absolute flex flex-col justify-end items-center -pb-2">
                        <h1 class="text-white font-semibold text-sm">Member Silver</h1>
                    </div>
                </div>

                <div class="rounded-lg shadow-lg relative overflow-hidden hover:cursor-pointer hover:duration-200 hover:transition-all hover:ease-in-out hover:shadow-slate-700 hover:scale-105">
                    <img src="images/silver.jpg" alt="img-silver" class="h-full w-full object-cover rounded-md">
                    <div class="w-full h-full right-0 bottom-0 absolute flex flex-col justify-end items-center -pb-2">
                        <h1 class="text-white font-semibold text-sm">Member Gold</h1>
                    </div>
                </div>

                <div class="rounded-lg shadow-lg relative overflow-hidden hover:cursor-pointer hover:duration-200 hover:transition-all hover:ease-in-out hover:shadow-slate-700 hover:scale-105">
                    <img src="images/silver.jpg" alt="img-silver" class="h-full w-full object-cover rounded-md">
                    <div class="w-full h-full right-0 bottom-0 absolute flex flex-col justify-end items-center -pb-2">
                        <h1 class="text-white font-semibold text-sm">Member Pro</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section membership -->

        <!-- section metode pembayaran -->
        <section class="container mx-auto">
            <h3 class="text-white text-2xl font-semibold my-8">Metode Pembayaran</h3>
            <div class="bg-slate-500 px-12 py-14 rounded-lg w-full">
                <div class="flex flex-row gap-6 items-center">
                    <img src="images/shopeepay-logo.png" alt="icon-shopeepay" class="w-16">
                    <img src="images/Bank_Mandiri.png" alt="icon-bankMandiri" class="w-16">
                    <img src="images/link-aja.png" alt="icon-linkAja" class="w-16">
                    <img src="images/Logo_dana.png" alt="icon-dana" class="w-16">
                    <img src="images/Logo_ovo.png" alt="icon-ovo" class="w-16">
                </div>
            </div>
        </section>
        <!-- end section metode pembayaran -->

        <section class="container mx-auto">
             <p class="text-white text-base font-semibold my-8">Order Membership sama seperti order biasa yaitu melalui Whatsapp, melakukan pembayaran baru akan diproses</p>

             <div class="my-8">
              <button
                type="button"
                id="btn_masuk"
                name="btn_masuk"
                class="font-semibold block w-full bg-amber-300 text-2xl p-4 rounded-md duration-200 ease-in-out transition hover:bg-amber-200"
              >
                Pesan Membership
              </button>
            </div>
        </section>
    </main>
    <!-- end main -->

    <!-- footer -->
    <x-footer>

    </x-footer>
    <!-- end footer -->

    
</body>
</html>