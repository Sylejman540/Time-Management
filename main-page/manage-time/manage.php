<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="main.css">
    <title>Manage Your Time</title>
</head>
<body>
<header class="flex justify-around items-center p-2 bg-[#FCF6F6]">
        <!-- Logo Is Positioned Here -->
        <article class="flex">
            <img src="images/logo.png" alt="Logo" class="w-12 h-12">
            <h1 class="text-4xl font-bold mr-20">Time<span class="text-[#ffe270ff]">Wise</span></h1>
        </article>    

        <!-- Mobile Icon -->
        <img src="images/menu.png" alt="Menu" class="md:hidden block w-8 h-8" id="icon">
        <img src="images/x-symbol.png" alt="Symbol" class="hidden w-8 h-8">

            <!-- This Nav-Bar Is For Desktop -->
        <nav>
            <ul class="hidden md:flex space-x-8 font-bold ">
                <li><a href="#" class="hover:text-[#fee685ff]">Home</a></li>
                <li><a href="#manage" class="hover:text-[#fee685ff]">Time Management</a></li>
                <li><a href="#about" class="hover:text-[#fee685ff]">About Us</a></li>
                <li><a href="#contact" class="hover:text-[#fee685ff]">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- This Nav-Bar Is For Mobile -->
    <nav>
        <ul class="hidden space-x-8 font-boldmd:ml-0 md:mr-0 ml-3" id="nav">
                <li><a href="#" class="hover:text-[#fee685ff]">Home</a></li>
                <li><a href="#manage" class="hover:text-[#fee685ff]">Time Management</a></li>
                <li><a href="#about" class="hover:text-[#fee685ff]">About Us</a></li>
                <li><a href="#contact" class="hover:text-[#fee685ff]">Contact</a></li>
            </ul>
    </nav>

    <!-- Footer -->
    <section class="bg-[#FCF6F6] md:py-20 py-10 px-10 md:flex justify-around">
        <div class="grid">
        <h1 class="text-4xl font-bold mr-20">Time<span class="text-[#ffe270ff]">Wise</span></h1>    
            <p class="text-center md:text-start text-gray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et, esse?</p>
            <article class="flex justify-center md:justify-start">
               <img src="images/insta.jpg" alt="Social Media(Instagram)" class="rounded-xl w-12 h-12">
               <img src="images/facebook.jpg" alt="Social Media(Facebook)" class="rounded-xl w-8 h-8 mt-2">
               <img src="images/x.jpg" alt="Social Media(Facebook)" class="rounded-xl w-8 h-8 mt-2">
            </article>
        </div>
            <article class="grid"> 
               <h1 class="text-xl font-bold text-center md:mt-0 mt-5">Info</h1>
               <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Formats</a>
               <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">FAQ</a>
               <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Pricing</a>
               <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Status</a>
               <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Policy</a> 
            </article>

            <article class="grid">
               <h1 class="text-xl font-bold text-center md:mt-0 mt-5">Resources</h1>
               <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">API</a>
               <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Form Validation</a>
               <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Community</a>
               <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Visibility</a>
            </article>

            <article class="grid">
               <h1 class="text-xl font-bold text-center md:mt-0 mt-5">Getting Started</h1>
               <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Themes</a>
               <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Elements</a>
               <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Global</a>
               <a href="#" class="text-center text-gray-600 hover:text-[#ffe270ff]">Usages</a>
            </article>
    </section>
    <div class="text-center bg-[#FCF6F6]">
        <p class="text-gray-600">© 2025 TimeWise. All rights reserved.</p>
    </div>

    <script src="main.js"></script>
</body>
</html>