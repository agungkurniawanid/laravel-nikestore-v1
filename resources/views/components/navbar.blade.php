<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="fixed z-10 flex w-full justify-between items-center px-[30px] pr-[30px] bg-white  text-[#19191B]">
        <div class="_logo flex gap-1 items-center cursor-pointer" onclick="onclickHandlerLogo()">
            <img src="assets/images/nike.png" alt="" class="w-[70px] h-[70px]">
            <h1 class="font-Poppins text-3xl font-bold italic select-none">NIKE</h1>
        </div>
        @include('components.search')
        <div class="_menu">
            <ul class="flex">
                <li><a href="/"
                        class="{{ ($title == "Home Product") ? 'bg-blue-700 text-white' : '' }} p-[15px] hover:bg-blue-700 text-[16px] hover:text-white rounded-[10px]  font-Poppins">Home</a>
                </li>
                <li><a href=""
                        class="{{ $title == "Product" ? 'bg-blue-700 text-white' : '' }} p-[15px] hover:bg-blue-700 text-[16px] hover:text-white rounded-[10px]  font-Poppins">About</a>
                </li>
                <li><a href=""
                        class="p-[15px] hover:bg-blue-700 text-[16px] hover:text-white rounded-[10px]  font-Poppins">Product</a>
                </li>
            </ul>
        </div>
    </nav>
    <script>
        const onclickHandlerLogo = () => {
            window.location.href = '/menu';
        }
    </script>
</body>

</html>
