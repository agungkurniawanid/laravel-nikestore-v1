<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>

<body>
    <div class="_container grid grid-cols-1 grid-flow-col items-center w-[60%] bg-[#F5F5F5] p-2 gap-4 rounded-[10px]">
        <div class="flex gap-2 items-center w-full">
            <div class="_logo_search"><i class="fa-solid fa-magnifying-glass"></i></div>
            <div class="_input w-full">
                <form action="" method="GET" class="w-full">
                    <input class="w-full font-Poppins font-normal bg-transparent focus:outline-none" type="text" name="search" required
                        placeholder="Search Product">
                </form>
            </div>
        </div>
        <div class="_filter w-full flex items-center gap-2">
            <div class="_vertical_divider w-1 h-6 bg-black rounded-[10px]"></div>
            <div class="_logo_tune"><i class="fa-solid fa-filter"></i></div>
        </div>
    </div>
</body>

</html>
