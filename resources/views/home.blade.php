
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membentuk Otot</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black text-white">
   

    <header class="flex justify-between items-center p-5">
        <img src="{{ asset('storage/img/logo.png') }}" alt="Logo" class="w-12 h-12">
        <nav>
            <ul class="flex list-none">
                <li class="ml-5"><a href="/" class="text-white no-underline">Home</a></li>
                <li class="ml-5"><a href="/about" class="text-white no-underline">About</a></li>
                <li class="ml-5"><a href="/login" class="text-white no-underline">Login</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
       <!-- Hero Section -->
    <section class="flex justify-between items-center p-12">
        <div class="flex-1">
            <h1 class="text-5xl mb-5">Membentuk Otot</h1>
            <p>Pergilah ke Gym untuk membentuk otot anda dan buatlah otot anda menjadi lebih bagus agar bisa melakukan calisthenis</p>
            <button class="bg-orange-600 text-white px-5 py-2 rounded">Get Started</button>
        </div>
        <div class="flex-1">
            <img src="{{ asset('storage/img/gym-equipment.jpg.png') }}" alt="Gym Equipment" class="w-full rounded-lg">
        </div>
    </section>

    <!-- Teknik Section -->
    <section class="p-12">
        <h2 class="text-2xl">Teknik</h2>
        <div class="flex justify-between items-center mt-5">
            <div class="flex-1 mr-5">
                <img src="{{ asset('storage/img/technique.jpg.png') }}" alt="Teknik Latihan" class="w-full rounded-lg">
            </div>
            <div class="flex-1">
                <h3 class="text-xl">Teknik - Teknik</h3>
                <p>Ada beberapa teknik untuk kalian bisa merasakan calisthenis dan membentuk otot, aku kasih dengan sangat mudah kalian bisa melihat teknik membentuk otot dan latihan calisthenis</p>
                <button class="bg-transparent text-yellow-400 border border-yellow-400 px-5 py-2 rounded-full mt-2">Next <span>&#8594;</span></button>
            </div>
        </div>
        <button class="bg-transparent text-white border border-white px-5 py-2 rounded-full float-right mt-5">View More Tehnic</button>
    </section>

    <!-- Workouts Section -->
    <section class="flex flex-wrap justify-between p-12 bg-black">
        @foreach ($workouts as $workout)
        <div class="flex-1 max-w-xs mx-2 text-center mb-4">
            <!-- Gambar Workout -->
            <img src="{{ asset('storage/' . $workout->image) }}" alt="{{ $workout->title }}" class="w-full rounded-lg mb-2 shadow-lg">
            <!-- Judul Workout -->
            <p class="text-white text-lg font-semibold">{{ $workout->title }}</p>
            <!-- Tombol Deskripsi -->
            <button onclick="toggleDescription('{{ $workout->id }}')" class="mt-2 text-blue-500 hover:underline">Show Description</button>
            <!-- Deskripsi Hidden -->
            <div id="description-{{ $workout->id }}" class="hidden text-white mt-2">
                <p>{{ $workout->description }}</p>
            </div>
        </div>
        @endforeach
    </section>
        <section class="p-12 bg-gray-800 text-white">
            <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
            <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block mb-2">Masukkan Nama Anda:</label>
                    <input type="text" id="name" name="name" required class="w-full p-2 bg-gray-700 border border-gray-600 rounded">
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-2">Masukkan Email Anda:</label>
                    <input type="email" id="email" name="email" required class="w-full p-2 bg-gray-700 border border-gray-600 rounded">
                </div>
                <div class="mb-4">
                    <label for="message" class="block mb-2">Masukkan Pesan:</label>
                    <textarea id="message" name="message" required class="w-full p-2 bg-gray-700 border border-gray-600 rounded"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">Kirim</button>
            </form>
        </section>
    </main>

<script>
    function toggleDescription(id) {
        const description = document.getElementById(`description-${id}`);
        description.classList.toggle('hidden');
    }
</script>
    </main>
</body>
</html>
