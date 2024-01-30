<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <style>
        @keyframes slideInFromLeft {
            0% {
                transform: translateY(25%);
                opacity: 0;
                visibility: hidden;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }
        }

        .animate-slide-in-from-left {
            animation: slideInFromLeft 1s ease-out;
        }
    </style>
</head>

<body>
    @foreach ($data as $item)
        <div
            class="_wrapper-card relative mt-[150px] w-[400px] h-[400px] rounded-[20px] cursor-pointer hover:shadow-sebelas bg-white">
            <div class="_icon_love absolute top-4 left-4"><i class="fa-regular fa-heart text-[20px]"></i></div>
            <div class="_product h-[50%] rounded-[20px]">
                <img src="{{ $item["gambar"] }}"
                    class="absolute top-[-120px] object-cover animate-slide-in-from-left">
            </div>
            <div class="flex flex-col w-full h-[50%]">
                <div class="_info p-4 w-full text-center">
                    <h1 class="text-2xl text-black font-Poppins font-bold">{{ $item["nama"] }}</h1>
                    <p class="text-[16px] text-black font-Poppins">{{ $item["deskripsi"] }}</p>
                </div>
                <div class="_price_det flex justify-center w-full items-center right-4 p-4">
                    <button
                        class="p-[10px] w-1/2 bg-blue-700 font-bold text-white text-[12px] font-Poppins rounded-[5px]"><a href="/product/{{ $item["nama"] }}">Rp.
                        {{ $item["harga"] }} - Detail</a></button>
                </div>
            </div>
        </div>
    @endforeach
</body>

</html>
