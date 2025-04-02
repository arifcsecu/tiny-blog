<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <meta name="description" content="Welcome to My Blog, where I share insights on various topics.">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <header class="bg-blue-600 p-4 shadow-md">
        <h1 class="text-white text-3xl">Welcome to My Blog</h1>
    </header>

    <main class="container mx-auto mt-8 p-4">
        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Latest Posts</h2>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold">Post Title 1</h3>
                <p class="text-gray-700">This is a summary of the first blog post...</p>
            </div>
            <div class="bg-white p-4 mt-4 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold">Post Title 2</h3>
                <p class="text-gray-700">This is a summary of the second blog post...</p>
            </div>
        </section>

        <section>
            <h2 class="text-2xl font-bold mb-4">About This Blog</h2>
            <p class="text-gray-700">Welcome to my blog where I share insights on various topics...</p>
        </section>
    </main>

    <footer class="bg-blue-600 p-4 mt-8 text-white text-center">
        &copy; 2023 My Blog. All rights reserved.
    </footer>

</body>
</html>

