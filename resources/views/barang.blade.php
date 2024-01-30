<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="../assets/ico/nike.ico">
    <link rel="stylesheet" href="css/scrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>

    <style>
        @keyframes slideInFromLeft {
            0% {
                transform: translateX(-25%);
                opacity: 0;
                visibility: hidden;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
                visibility: visible;
            }
        }

        .slideInFromLeft {
            animation: slideInFromLeft 1s ease-out;
        }
    </style>
</head>

<body>
    <div class="w-full grid grid-cols-2 h-screen">
        <p class="absolute z-10 left-6 top-6"><a href="/"><i class="fa-solid text-white cursor-pointer text-[24px] fa-angle-left"></a></i></p>
        <div class="relative">
            <div class="w-2/3 rounded-detail-brg h-full bg-red-500 absolute z-[-1]"></div>
            <img src="{{ asset($data['gambar']) }}" alt="" class="slideInFromLeft object-cover">
        </div>
        <div class="p-14 w-full">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-black text-3xl font-bold font-Poppins">{{ $data['nama'] }}</h1>
                    <h2 class="text-gray-400 font-Poppins font-bold text-[20px]">{{ $data['perusahaan'] }}</h2>
                    <div class="flex items-center gap-1">
                        <i class="text-yellow-400 fa-solid text-[20px] fa-star"></i>
                        <p class="font-semibold text-black font-Poppins">{{ $data['rating'] }}</p>
                    </div>
                </div>
                <div>
                    <i class="fa-solid fa-heart text-[24px] bg-[#F5F5F5] p-2 rounded-full text-red-500"></i>
                </div>
            </div>
            <p class="mt-6 font-semibold text-black font-Poppins text-[16px]">Deskripsi : </p>
            <p class="font-normal text-black font-Poppins text-[14px]">{{ $data['deskripsi'] }}</p>
            <div class="flex mt-6 items-center gap-3">
                <p class="font-semibold text-black font-Poppins text-[16px]">Size : </p>
                <p>
                    @foreach ($data['ukuran'] as $item)
                        <span
                            class="ont-semibold text-black font-Poppins text-[16px] bg-[#F5F5F5] p-2 rounded-[10px]">{{ $item }}</span>
                    @endforeach
                </p>
            </div>
            <div class="flex mt-6 items-center gap-3">
                <p class="font-semibold text-black font-Poppins text-[16px]">Warna : </p>
                <p class="font-semibold text-black font-Poppins text-[16px]">{{ $data["warna"] }}</p>
            </div>
            <p class="mt-6 mb-2 font-bold text-black font-Poppins text-[24px]">{{ $data["harga"] }}</p>
            <hr>
            <div class="mt-6 flex justify-between items-center w-full">
                <button class="cursor-pointer text-[14px] font-Poppins bg-red-500 text-white p-3 rounded-[10px]">Beli Sekarang</button>
                <i class="text-[24px] fa-solid fa-share-nodes"></i>
            </div>
        </div>
    </div>
</body>

</html>
