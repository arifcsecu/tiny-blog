<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <meta name="description" content="Welcome to My Blog, where I share insights on various topics.">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>


    <div class="container">
        <p>Testing CSS Power</p>
        <div class="group relative">
            <button class="group-hover:block bg-blue-500 text-white px-4 py-2">Menu</button>
            <ul class="hidden group-hover:block absolute bg-white">
                <li>Item 1</li>
                <li>Item 2</li>
            </ul>
        </div>
    </div>

    <br>
    <br>

    <div class="container">
        <p>Testing Alpine.js</p>
        <div x-data="{ open: false }">
            <button @click="open = !open" class="bg-blue-500 text-white px-4 py-2">Menu</button>
            <ul x-show="open">
                <li>Item 1</li>
                <li>Item 2</li>
            </ul>
        </div>
    </div>

    <br>
    <br>

    <p>Again......</p>

    <br>
    <br>



    <div class="container">

        <p>Testing Alpine.js</p>

        <!-- Add this in <head> -->
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

        <!-- Alpine.js toggle -->
        <div x-data="{ open: false }" class="relative inline-block">
            <button @click="open = !open" class="bg-blue-500 text-white px-4 py-2"> Toggle Menu </button>
            <div x-show="open" @click.outside="open = false" class="absolute bg-white border mt-2 shadow z-10">
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Item 1</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Item 2</a>
            </div>
        </div>

    </div>

    <br>
    <br>


    <div class="container">

        <p>Testing CSS</p>

        <!-- CSS-based toggle using checkbox -->
        <div class="relative">
            <input type="checkbox" id="menuToggle" class="peer hidden">
            <label for="menuToggle" class="bg-blue-500 text-white px-4 py-2 inline-block cursor-pointer"> Toggle Menu </label>
            <div class="hidden peer-checked:block absolute bg-white border mt-2 shadow">
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Item 1</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Item 2</a>
            </div>
        </div>
    </div>

    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>