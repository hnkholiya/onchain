<!DOCTYPE html>
<html>
<head>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 min-h-screen">

    @include('components.navbar')

    <div class="flex items-center justify-center min-h-[calc(100vh-80px)]">
        <div class="bg-white p-8 rounded-xl shadow w-full max-w-md">

    <h1 class="text-2xl font-bold mb-6 text-center">
        Verify Document
    </h1>

    <form action="/verify" method="POST">

        @csrf

        <input
            type="text"
            name="unique_id"
            placeholder="Enter Verification ID"
            class="w-full border p-3 rounded-lg mb-4"
            required
        >

        <button
            class="w-full bg-black text-white py-3 rounded-lg"
        >
            Verify
        </button>

        </form>

        </div>
    </div>

</body>
</html>