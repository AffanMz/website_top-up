<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#151515]">
    <section class="flex justify-center items-center h-screen">
        <div class="border rounded-md border-white w-6/12">
        <div class="p-6">
          <img
            src="images/Logo.png"
            alt="img-logo"
            class="rounded-full w-12 mb-5"
          />
          @if ($errors->any())
              <div class="rounded-full ps-3 py-2 mb-2 bg-red-500 align-middle">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <h1 class="font-bold text-3xl text-white">Daftar Akun</h1>
          <p class="text-white text-sm">
            Daftarkan akun kamu sekarang juga
          </p>

          <form action="{{ route('regis') }}" class="mt-3" method="POST">
            @csrf
            <div class="my-3">
              <input
                type="email"
                id="email"
                name="email"
                required
                placeholder="Email Akun Anda"
                class="w-full rounded-md px-3 py-2 text-sm italic"
              />
            </div>
            <div class="my-3">
              <input
                type="text"
                id="name"
                name="name"
                required
                placeholder="Nama Panggilan Anda"
                class="w-full rounded-md px-3 py-2 text-sm italic"
              />
            </div>
            <input type="hidden" name="role" value="user">
            <div class="my-3">
                <input
                  type="phone"
                  id="phone"
                  name="phone"
                  required
                  placeholder="Nomor Whatsapp Anda"
                  class="w-full rounded-md px-3 py-2 text-sm italic"
                />
              </div>
            <div class="my-3 flex items-center justify-between relative">
              <input
                type="password"
                id="password"
                name="password"
                required
                placeholder="Password Akun Anda"
                class="w-full rounded-md px-3 py-2 text-sm italic"
              />
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-eye-slash absolute right-4 cursor-pointer"
                viewBox="0 0 16 16"
              >
                <path
                  d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"
                />
                <path
                  d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"
                />
                <path
                  d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z"
                />
              </svg>
            </div>

            <div class="my-8">
              <button
                type="submit"
                id="btn_masuk"
                name="btn_masuk"
                class="font-semibold block w-full bg-amber-300 p-2 rounded-md duration-200 ease-in-out transition hover:bg-amber-200"
              >
                Daftar
              </button>
            </div>
          </form>
          <p class="text-white text-sm">Sudah Punya Akun?</p>
          <div class="mt-3">
            <a
              href="{{ route('login') }}"
              class="font-semibold block text-center w-full bg-transparent border-amber-300 border text-white p-2 rounded-md duration-200 ease-in-out transition hover:bg-amber-300 hover:text-black"
            >
            Login
            </a>
          </div>
        </div>
        </div>
    </section>
</body>
</html>