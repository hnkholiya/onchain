<!DOCTYPE html>
<html>

<head>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-xl shadow w-full max-w-lg">

        <h1 class="text-2xl font-bold mb-6 text-green-600">
            Document Uploaded Successfully
        </h1>

        <div class="mb-4">
            <p class="font-semibold">Verification ID:</p>

            <div class="bg-gray-100 p-3 rounded mt-2">
                {{ $uniqueId }}
            </div>
        </div>

        <div>
            <p class="font-semibold">SHA256 Hash:</p>

            <div class="bg-gray-100 p-3 rounded mt-2 break-all text-sm">
                {{ $hash }}
            </div>
        </div>

    </div>

</body>

</html>