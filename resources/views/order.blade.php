<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Top Up</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#151515]">
    <script>
        // JavaScript function to open URL in a new tab
        function openWhatsApp(url, nomer) {
            if (url) {
                window.open(url, '_blank');
                url = null;
                window.location.href = "{{ route('order.show',"${nomer}") }}";
            } else {
                console.error('URL WhatsApp tidak tersedia');
            }
        }

        // Call the function when the page loads
        window.onload = function() {
            var url = "{{ $url ?? '' }}"; // Jika $url tidak ada, beri nilai default ''
            var nomer = "{{ $nomer }}";
            openWhatsApp(url, nomer);
        }
    </script>
    <x-header>

    </x-header>
    <main>
        <section class="container mx-auto flex justify-center">
                <img src="{{ asset('images/banner-top-up.jpg') }}" alt="img-banner-top-up" class="rounded-lg max-w-4xl">
        </section>

        <section class="container mx-auto my-10">
            <div class="bg-slate-200 px-12 py-10 rounded-lg w-full">
                <div class="flex items-center gap-4">
                    <div class="px-4 py-2 flex items-center rounded-lg justify-center bg-[#151515]">
                        <p class="text-white">1</p>
                    </div>
                    <h3 class="font-semibold text-xl">Masukan Data Akun Kamu</h3>
                </div>

                <form action="{{ route('orders.store') }}" class="my-6" method="POST">
                    @csrf
                        <div class="grid grid-cols-2 w-full">
                        <div class="flex flex-col">
                            <label for="id_acc" class="font-semibold mb-2 text-lg">ID Akun</label>
                            <input type="text" name="id_acc" id="id_acc" class="w-full rounded-md px-3 py-2">
                        </div>
                        <div class="flex flex-col ml-3">
                            <label for="id_server" class="font-semibold mb-2 text-lg">Server Kamu</label>
                            <input type="text" name="id_server" id="id_server" class="w-full rounded-md px-3 py-2">
                        </div>
                        
                    </div>
                
                    <p class="text-sm italic mt-4">Untuk menemukan ID & Server akun Anda, klik avatar Anda di pojok kiri atas layar dan buka tab Info Umum. Contoh: 12345678 (9864), maka ID adalah 12345678 dan Server adalah 9864</p>
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
                    @if(Auth::check())
                        @if(Auth::user()->isAdmin())
                        <div class="">
                            <div class="">
                                <button class="px-4 py-2 font-semibold rounded-md bg-amber-300 hover:bg-amber-500"><a href="{{ route('items.create', $nomer) }}">Kelola Data Item</a></button>
                            </div>
                        </div>
                        @endif
                    @endif
                </div>

                <div class="my-6">
                    <p class="font-semibold text-lg mb-2">Spesial Item</p>
                    <div class="grid grid-cols-3 gap-6">
                        @foreach ( $game as $item)
                            @if ($item->info == 'Special Item')
                                <div class="">
                                    <label for="{{ $loop->iteration }}Weekly" class="cursor-pointer">
                                        <input type="radio" value="{{ $item->id }}" class="peer sr-only" id="{{ $loop->iteration }}Weekly" name="id_item"/>
                                        <div class=" max-w-xl p-5 bg-white rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                                            <div class="flex items-center justify-between">
                                                <div class="flex flex-col">
                                                    <p class="font-semibold text-lg">
                                                        @if ($item->value != 0 )
                                                            {{ $item->value }}
                                                        @endif
                                                        {{ $item->title }}
                                                    </p>
                                                    <p class="text-sm">Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                                                </div>
                                                <img src="{{ asset('images/cycling.png') }}" alt="icon-diamond" class="w-12">
                                            </div>
                                        </div>
                                        
                                    </label>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="my-6">
                    <p class="font-semibold text-lg mb-2">Top Up</p>
                    <div class="grid grid-cols-3 gap-6">
                        @foreach ( $game as $item)
                            @if ($item->info == 'Top Up')
                                <div class="">
                                    <label for="{{ $loop->iteration }}diamond" class="cursor-pointer">
                                        <input type="radio" value="{{ $item->id }}" class="peer sr-only" id="{{ $loop->iteration }}diamond" name="id_item"/>
                                        <div class=" max-w-xl p-5 bg-white rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                                            <div class="flex items-center justify-between">
                                                <div class="flex flex-col">
                                                    <p class="font-semibold text-lg">
                                                        {{ $item->value + $item->value_up }} 
                                                        ( {{ $item->value }} + {{ $item->value_up }} )
                                                        {{ $item->title }}
                                                    </p>
                                                    <p class="text-sm">Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                                                </div>
                                                <img src="{{ asset('images/diamond.png') }}" alt="icon-diamond" class="w-12">
                                            </div>
                                        </div>
                                        
                                    </label>
                                </div>
                            @endif
                        @endforeach
                        <input type="hidden" name="id_user" value="{{ auth()->id() }}">
                    </div>
                </div>

                <div class="my-6">
                <p class="font-semibold text-lg mb-2">Metode Pembayaran</p>
                <div class="flex flex-row gap-4">
                    <label for="shopee" class="cursor-pointer">
                        <input type="radio" class="peer sr-only" id="shopee" value="shopee" name="pay"/>
                        <div class="py-2 px-8 bg-transparent rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                            <img src="{{ asset('images/shopeepay-logo.png') }}" alt="icon-shopeepay" class="w-16">
                            
                        </div>
                    </label>
                    <label for="bankMandiri" class="cursor-pointer">
                        <input type="radio" class="peer sr-only" id="bankMandiri" value="bankMandiri" name="pay"/>
                        <div class="py-2 px-8 bg-transparent rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                            <img src="{{ asset('images/Bank_Mandiri.png') }}" alt="icon-bankMandiri" class="w-16">
                            
                        </div>
                    </label>
                    <label for="linkAja" class="cursor-pointer">
                        <input type="radio" class="peer sr-only" id="linkAja" value="linkAja" name="pay"/>
                        <div class="py-2 px-8 bg-transparent rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                            <img src="{{ asset('images/link-aja.png') }}" alt="icon-linkAja" class="w-16">
                            
                        </div>
                    </label>
                    <label for="dana" class="cursor-pointer">
                        <input type="radio" class="peer sr-only" id="dana" value="dana" name="pay"/>
                        <div class="py-2 px-8 bg-transparent rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                        <img src="{{ asset('images/Logo_dana.png') }}" alt="icon-dana" class="w-16">
                            
                        </div>
                    </label>
                    <label for="ovo" class="cursor-pointer">
                        <input type="radio" class="peer sr-only" id="ovo" value="ovo" name="pay"/>
                        <div class="py-2 px-8 bg-transparent rounded-md hover:shadow ring-2 ring-transparent peer-checked:text-amber-300 peer-checked:ring-amber-200 peer-checked:ring-offset-2">
                        <img src="{{ asset('images/Logo_ovo.png') }}" alt="icon-ovo" class="w-16">
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
                        @if(Auth::check())
                            @if(Auth::user()->isAdmin())
                            <div class="">
                                <div class="">
                                    
                                </div>
                            </div>
                            @else
                            <button type="submit" class="px-3 py-2 font-semibold rounded-md bg-amber-300 hover:bg-amber-500 text-xl"> Order</button>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <p class="mt-2 text-white italic text-sm">Orderan Di Proses di Whatsapp jika sudah mengklik Order, pastikan segera melakukan pembayaran sesuai metode pembayaran yang dipilih maka baru akan di proses pesanan</p>
        </section>
    </form>

    </main>

    <!-- footer -->
    <x-footer>

    </x-footer>
    <!-- end footer -->
</body>
</html>