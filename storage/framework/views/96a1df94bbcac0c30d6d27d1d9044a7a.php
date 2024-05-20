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
        <h3 class="text-2xl font-bold text-[#C084FC]">Kategori>UI UX Design</h3>
        <h1 class="font-bold text-4xl">UI UX Design</h1>
        <p class="text-gray-500 text-lg mt-2">9500+ pengguna EduTech telah mempelajari course ini</p>
        <p class="text-gray-500 mt-2">Description: Course ini adalah kursus yang dirancang untuk mengajarkan konsep dasar dan praktik terbaik dalam desain antarmuka pengguna (UI) dan pengalaman pengguna (UX). Dalam kursus ini, peserta akan mempelajari prinsip-prinsip desain yang efektif untuk menciptakan pengalaman pengguna yang memikat dan fungsional.</p>
        <div class="grid  grid-rows-1 py-10 gap-5">
            
            <div class="w-full aspect-[8/2] bg-neutral-50 overflow-hidden shadow-xl rounded-2xl  text-neutral-50 flex  justify-end ">
                <div class="h-full bg-image w-full bg-[#C084FC]"> 

                </div>
                <div class="flex flex-col gap-2 justify-center p-4 lg:p-6">
                    <h3 class="font-bold text-2xl text-gray-700">Materi 1</h3>
                    <h3 class="font-bold text-2xl text-gray-700">Pengantarr UI UX Design</h3>
                    <p class=" text-base line-clamp-4 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>

                </div>
            </div>
            
            
            <div class="w-full aspect-[8/2] bg-neutral-50 overflow-hidden shadow-xl rounded-2xl  text-neutral-50 flex  justify-end ">
                <div class="h-full bg-image w-full bg-[#C084FC]"> 

                </div>
                <div class="flex flex-col gap-2 justify-center p-4 lg:p-6">
                    <h3 class="font-bold text-2xl text-gray-700">Materi 1</h3>
                    <h3 class="font-bold text-2xl text-gray-700">Pengantarr UI UX Design</h3>
                    <p class=" text-base line-clamp-4 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>

                </div>
            </div>
            
            
            <div class="w-full aspect-[8/2] bg-neutral-50 overflow-hidden shadow-xl rounded-2xl  text-neutral-50 flex  justify-end ">
                <div class="h-full bg-image w-full bg-[#C084FC]"> 

                </div>
                <div class="flex flex-col gap-2 justify-center p-4 lg:p-6">
                    <h3 class="font-bold text-2xl text-gray-700">Materi 1</h3>
                    <h3 class="font-bold text-2xl text-gray-700">Pengantarr UI UX Design</h3>
                    <p class=" text-base line-clamp-4 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>

                </div>
            </div>
            
            
            <div class="w-full aspect-[8/2] bg-neutral-50 overflow-hidden shadow-xl rounded-2xl  text-neutral-50 flex  justify-end ">
                <div class="h-full bg-image w-full bg-[#C084FC]"> 

                </div>
                <div class="flex flex-col gap-2 justify-center p-4 lg:p-6">
                    <h3 class="font-bold text-2xl text-gray-700">Materi 1</h3>
                    <h3 class="font-bold text-2xl text-gray-700">Pengantarr UI UX Design</h3>
                    <p class=" text-base line-clamp-4 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>

                </div>
            </div>
            
            
            <div class="w-full aspect-[8/2] bg-neutral-50 overflow-hidden shadow-xl rounded-2xl  text-neutral-50 flex  justify-end ">
                <div class="h-full bg-image w-full bg-[#C084FC]"> 

                </div>
                <div class="flex flex-col gap-2 justify-center p-4 lg:p-6">
                    <h3 class="font-bold text-2xl text-gray-700">Materi 1</h3>
                    <h3 class="font-bold text-2xl text-gray-700">Pengantarr UI UX Design</h3>
                    <p class=" text-base line-clamp-4 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>

                </div>
            </div>
            
            
            <div class="w-full aspect-[8/2] bg-neutral-50 overflow-hidden shadow-xl rounded-2xl  text-neutral-50 flex  justify-end ">
                <div class="h-full bg-image w-full bg-[#C084FC]"> 

                </div>
                <div class="flex flex-col gap-2 justify-center p-4 lg:p-6">
                    <h3 class="font-bold text-2xl text-gray-700">Materi 1</h3>
                    <h3 class="font-bold text-2xl text-gray-700">Pengantarr UI UX Design</h3>
                    <p class=" text-base line-clamp-4 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>

                </div>
            </div>
            
         
        </div>
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
<?php /**PATH E:\FREELANCE JOKI\Joki Azke\Projek-Pemweb-2\resources\views/EDUTECH/listMateri.blade.php ENDPATH**/ ?>