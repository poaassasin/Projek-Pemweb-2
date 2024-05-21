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
    <nav class="w-full bg-neutral-50">
        <div class="container mx-auto px-4  lg:px-20 py-3 flex items-center justify-between">
            <img src="<?php echo e(asset('assets/logo.png')); ?>" class="lg:w-1/5 w-2/5" alt="logo">
            <ul class="lg:flex hidden  gap-8 text-xl font-bold text-[#C391F7]">
                <a>Home</a>
                <a>Course</a>
                <a>Logout</a>
            </ul>
        </div>
    </nav>

    <section class="container mx-auto lg:px-20 px-4 py-10">
        <h3 class="text-2xl font-bold text-[#C084FC]">KATEGORI > UI UX Design > Pengantar UI UX Design</h3>
        <h1 class="font-bold text-4xl">Pengantar UI UX Design</h1>
        <hr class="mt-5">
        <div>
            
        </div>
        
        <h1 class="font-bold text-4xl">Pengantar UI UX Design</h1>
        <p class="text-gray-500 mt-2">Selesaikan tugas berikut agar kamu bisa lanjut ke materi selanjutnya..</p>
        <small>Kerjakan tugas berikut berdasarkan materi yang sudah dijelaskan sebelumnya. Upload jawaban yang ada dengan format file pdf. Selamat mengerjakan!!!</small>
        <h1 class="font-bold text-2xl">Studi Kasus: Pengembangan Website E-Commerce</h1>
        <div>
            
        </div>
        <h1 class="font-bold text-2xl mb-5">Upload Jawaban</h1>
        <form action="">
            <div class="relative  border-4 p-8 rouned border-[#A855F7]">
                <label for="file-upload" class="  w-full border-4 h-96 flex flex-col justify-center items-center rounded border-[#A855F7] lg:text-2xl text-gray-500 font-bold border-dashed cursor-pointer">
                    <img draggable="false" src="<?php echo e(asset('assets/upload.png')); ?>" class="lg:w-1/5 w-2/5" alt="logo">
                    Upload Tugas Kamu Disini!
                </label>
                <input id="file-upload" class="hidden" type="file" multiple>
            </div>
        </form>
       
    </section>

  

    <footer class="w-full border-t-8 border-[#D8B4FE] py-5 lg:py-20">
        <div class="container mx-auto lg:px-20 px-4 flex lg:flex-row flex-col justify-between">
            <div class="lg:w-1/5"> 
                <img src="<?php echo e(asset('assets/logo.png')); ?>" class="w-full" alt="logo">
            </div>
            <div class="flex flex-col gap-1 lg:gap-2">
                <h4 class="font-bold text-2xl">
                    Product
                </h4>
                <p class="text-sm lg:text-base text-gray-500">Course</p>
                <p class="text-sm lg:text-base text-gray-500">Testimonies</p>
                <p class="text-sm lg:text-base text-gray-500">Case studies</p>
                <p class="text-sm lg:text-base text-gray-500">Reviews</p>
                <p class="text-sm lg:text-base text-gray-500">Updates</p>
            </div>
            <div class="flex flex-col gap-1 lg:gap-2">
                <h4 class="font-bold text-2xl">
                    Company
                </h4>
                <p class="text-sm lg:text-base text-gray-500">About</p>
                <p class="text-sm lg:text-base text-gray-500">Contact Us</p>
                <p class="text-sm lg:text-base text-gray-500">Careers</p>
                <p class="text-sm lg:text-base text-gray-500">Culture</p>
                <p class="text-sm lg:text-base text-gray-500">Blog</p>
            </div>
            <div class="flex flex-col gap-1 lg:gap-2">
                <h4 class="font-bold text-2xl">
                    Support
                </h4>
                <p class="text-sm lg:text-base text-gray-500">Getting started</p>
                <p class="text-sm lg:text-base text-gray-500">Help center</p>
                <p class="text-sm lg:text-base text-gray-500">Server status</p>
                <p class="text-sm lg:text-base text-gray-500">Report a bug</p>
                <p class="text-sm lg:text-base text-gray-500">Chat support</p>
            </div>
            <div class="flex flex-col gap-1 lg:gap-2">
                <h4 class="font-bold text-2xl">
                    Contacts us
                </h4>
                <p class="text-sm lg:text-base text-gray-500">edutech@company.com</p>
                <p class="text-sm lg:text-base text-gray-500">+62-812-3456-5892</p>
                <p class="text-sm lg:text-base text-gray-500">Malang, Indonesia</p>
            </div>

        </div>
        <p class="text-sm lg:text-base mt-10 text-gray-500 text-center">Copyright © 2024 EduTechHub. All rights reserved.</p>
        

    </footer>
  
</body>

</html>
<?php /**PATH E:\FREELANCE JOKI\Joki Azke\Projek-Pemweb-2\resources\views/EDUTECH/detailMateri.blade.php ENDPATH**/ ?>