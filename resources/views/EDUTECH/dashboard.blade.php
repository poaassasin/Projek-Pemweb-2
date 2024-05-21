<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/app.css')
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
            <img src="{{ asset('assets/logo.png') }}" class="lg:w-1/5 w-2/5" alt="logo">
            <ul class="lg:flex hidden  gap-8 text-xl font-bold text-[#C391F7]">
                <a>Home</a>
                <a>Course</a>
                <a>Logout</a>
            </ul>
        </div>
    </nav>

    <section class="bg-image bg-[#C084FC] lg:h-[75vh] ">
        <main class="container mx-auto flex lg:flex-row relative py-5  flex-col-reverse items-center h-full lg:px-20 px-4">
            <div class="flex flex-col gap-6 ">

                <h1 class="font-bold text-2xl lg:text-5xl">Selamat Datang di Edutech</h1>
                <p class="text-neutral-50 text-sm lg:text-xl lg:w-3/4">Belajar mengenai teknologi dengan tutorial yang mudah hanya di Edutech!</p>
                <button class="bg-[#A855F7] px-3 py-2  text-neutral-50 text-sm lg:text-xl w-fit rounded-lg active:scale-95 duration-200 ease-in-out">Mulai Belajar</button>
            </div>
            <img draggable="false" src="{{ asset('assets/dashboardImg.png') }}" class="lg:w-3/6 lg:absolute bottom-0 lg:translate-y-1/4 right-0 aspect-auto" alt="">
        </main>
    </section>


    <section class="container mx-auto lg:px-20 px-4 py-10">
        <h3 class="text-2xl font-bold text-[#C084FC]">Kategori</h3>
        <h1 class="font-bold text-4xl">Mau Belajar Apa Hari Ini?</h1>
        <p class="text-gray-500">Pengalaman dari beberapa orang yang sudah Belajar menggunakan Edutech</p>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-rows-1 py-10 gap-5">
            {{-- card --}}
            <div class="w-full aspect-[16/11] bg-gradient-to-t from-[#D8B4FE] to-[#C084FC] rounded-2xl p-6 text-neutral-50 flex flex-col justify-end">
                <h3 class="font-bold text-2xl">UI UX Design</h3>
                <p class=" text-sm line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>
            </div>
            {{-- card --}}
            {{-- card --}}
            <div class="w-full aspect-[16/11] bg-gradient-to-t from-[#D8B4FE] to-[#C084FC] rounded-2xl p-6 text-neutral-50 flex flex-col justify-end">
                <h3 class="font-bold text-2xl">UI UX Design</h3>
                <p class=" text-sm line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>
            </div>
            {{-- card --}}
            {{-- card --}}
            <div class="w-full aspect-[16/11] bg-gradient-to-t from-[#D8B4FE] to-[#C084FC] rounded-2xl p-6 text-neutral-50 flex flex-col justify-end">
                <h3 class="font-bold text-2xl">UI UX Design</h3>
                <p class=" text-sm line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>
            </div>
            {{-- card --}}
            {{-- card --}}
            <div class="w-full aspect-[16/11] bg-gradient-to-t from-[#D8B4FE] to-[#C084FC] rounded-2xl p-6 text-neutral-50 flex flex-col justify-end">
                <h3 class="font-bold text-2xl">UI UX Design</h3>
                <p class=" text-sm line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>
            </div>
            {{-- card --}}
            {{-- card --}}
            <div class="w-full aspect-[16/11] bg-gradient-to-t from-[#D8B4FE] to-[#C084FC] rounded-2xl p-6 text-neutral-50 flex flex-col justify-end">
                <h3 class="font-bold text-2xl">UI UX Design</h3>
                <p class=" text-sm line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>
            </div>
            {{-- card --}}
        </div>
    </section>

    <section class="container mx-auto lg:px-20 px-4 py-10">
        <h3 class="text-2xl font-bold text-[#C084FC]">Ulasan</h3>
        <h1 class="font-bold text-4xl">Apa kata mereka?</h1>
        <p class="text-gray-500">Pengalaman dari beberapa orang yang sudah Belajar menggunakan Edutech</p>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-rows-1 py-10 gap-5">
            {{-- card --}}
            <div class="w-full aspect-[16/11] bg-gradient-to-t from-[#D8B4FE] to-[#C084FC] rounded-2xl p-6 text-neutral-50 flex flex-col justify-center">
                <div class='flex justify-evenly items-center'>
                    <img class='w-1/5 aspect-square rounded-full object-cover' src="https://source.unsplash.com/random/900×700/?profile" alt="">
                    <h3 class="font-bold text-2xl">Ananta Susanto</h3>
                </div>
                <p class=" text-sm line-clamp-3 mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>
            </div>
            {{-- card --}}
            {{-- card --}}
            <div class="w-full aspect-[16/11] bg-gradient-to-t from-[#D8B4FE] to-[#C084FC] rounded-2xl p-6 text-neutral-50 flex flex-col justify-center">
                <div class='flex justify-evenly items-center'>
                    <img class='w-1/5 aspect-square rounded-full object-cover' src="https://source.unsplash.com/random/900×700/?profile" alt="">
                    <h3 class="font-bold text-2xl">Ananta Susanto</h3>
                </div>
                <p class=" text-sm line-clamp-3 mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>
            </div>
            {{-- card --}}
            {{-- card --}}
            <div class="w-full aspect-[16/11] bg-gradient-to-t from-[#D8B4FE] to-[#C084FC] rounded-2xl p-6 text-neutral-50 flex flex-col justify-center">
                <div class='flex justify-evenly items-center'>
                    <img class='w-1/5 aspect-square rounded-full object-cover' src="https://source.unsplash.com/random/900×700/?profile" alt="">
                    <h3 class="font-bold text-2xl">Ananta Susanto</h3>
                </div>
                <p class=" text-sm line-clamp-3 mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>
            </div>
            {{-- card --}}
            {{-- card --}}
            <div class="w-full aspect-[16/11] bg-gradient-to-t from-[#D8B4FE] to-[#C084FC] rounded-2xl p-6 text-neutral-50 flex flex-col justify-center">
                <div class='flex justify-evenly items-center'>
                    <img class='w-1/5 aspect-square rounded-full object-cover' src="https://source.unsplash.com/random/900×700/?profile" alt="">
                    <h3 class="font-bold text-2xl">Ananta Susanto</h3>
                </div>
                <p class=" text-sm line-clamp-3 mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>
            </div>
            {{-- card --}}
            {{-- card --}}
            <div class="w-full aspect-[16/11] bg-gradient-to-t from-[#D8B4FE] to-[#C084FC] rounded-2xl p-6 text-neutral-50 flex flex-col justify-center">
                <div class='flex justify-evenly items-center'>
                    <img class='w-1/5 aspect-square rounded-full object-cover' src="https://source.unsplash.com/random/900×700/?profile" alt="">
                    <h3 class="font-bold text-2xl">Ananta Susanto</h3>
                </div>
                <p class=" text-sm line-clamp-3 mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>
            </div>
            {{-- card --}}
            {{-- card --}}
            <div class="w-full aspect-[16/11] bg-gradient-to-t from-[#D8B4FE] to-[#C084FC] rounded-2xl p-6 text-neutral-50 flex flex-col justify-center">
                <div class='flex justify-evenly items-center'>
                    <img class='w-1/5 aspect-square rounded-full object-cover' src="https://source.unsplash.com/random/900×700/?profile" alt="">
                    <h3 class="font-bold text-2xl">Ananta Susanto</h3>
                </div>
                <p class=" text-sm line-clamp-3 mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae sint optio iusto sapiente corporis eum quam odio commodi neque ipsa mollitia placeat eos, accusamus, dolore blanditiis recusandae et reiciendis omnis sit consequatur facere consectetur laudantium molestias! Reprehenderit delectus odit esse voluptatum, cumque praesentium natus.</p>
            </div>
            {{-- card --}}
           
        </div>
    </section>

    <footer class="w-full border-t-8 border-[#D8B4FE] py-5 lg:py-20">
        <div class="container mx-auto lg:px-20 px-4 flex lg:flex-row flex-col justify-between">
            <div class="lg:w-1/5"> 
                <img src="{{ asset('assets/logo.png') }}" class="w-full" alt="logo">
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
