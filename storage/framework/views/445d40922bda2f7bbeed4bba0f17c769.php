<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .bg-image {
            background-image: url("http://localhost:8000/assets/authbg.png");
            background-size: cover;


        }
    </style>

</head>

<body class="font-[Poppins]">
    <div class="h-screen w-full flex">
        <div class="lg:w-1/2 w-1/4 bg-image bg-[#C084FC]  h-full flex flex-col justify-center items-center">
            <img draggable="false" src="<?php echo e(asset('assets/authImage.png')); ?>" class="w-3/5 aspect-auto" alt="">
            <img draggable="false" src="<?php echo e(asset('assets/logo.png')); ?>" class="w-2/5 aspect-auto" alt="">

        </div>
        <div class="lg:w-1/2 w-3/4 flex flex-col gap-3 lg:p-10 p-4 justify-center">
            <h1 class="lg:text-6xl md:text-4xl sm:text-2xl font-bold">Hey, Hello! 🙋</h1>
            <p class="text-lg  text-gray-300 font-regular">Masukkan E-Mail dan Password kamu untuk mengakses Edutech</p>
            <form action="" class="flex flex-col gap-3">
                <div class="flex flex-col">
                    <label class="text-xl font-bold" for="">E-mail</label>
                    <input class="text-base focus:ring-[##C084FC] border-gray-300 rounded-lg py-2 px-2" type="email"
                        placeholder="Masukkkan email kamu">
                </div>
                <div class="flex flex-col">
                    <label class="text-xl font-bold" for="">Password</label>
                    <input class="text-base focus:ring-[##C084FC] border-gray-300 rounded-lg py-2 px-2" type="password"
                        placeholder="Masukkkan password kamu">

                </div>
                <button class="bg-gradient-to-b text-slate-50 from-[#C084FC] text-base lg:text-xl w-full rounded-lg p-2 font-semibold to-[#D8B4FE]">Login</button>

            </form>
        </div>


    </div>
</body>

</html>
<?php /**PATH E:\FREELANCE JOKI\Joki Azke\Projek-Pemweb-2\resources\views/EDUTECH/login.blade.php ENDPATH**/ ?>