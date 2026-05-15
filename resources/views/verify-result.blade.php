<!DOCTYPE html>
<html>
<head>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-xl shadow w-full max-w-lg text-center">

    @if($status === 'VALID')

        <h1 class="text-3xl font-bold text-green-600 mb-6">
            VALID DOCUMENT
        </h1>

        <div class="bg-gray-100 p-4 rounded-lg text-left">

            <p class="mb-2">
                <strong>Verification ID:</strong>
                {{ $uniqueId }}
            </p>

            <p class="break-all">
                <strong>Blockchain Hash:</strong>
                {{ $hash }}
            </p>

        </div>

    @else

        <h1 class="text-3xl font-bold text-red-600">
            INVALID DOCUMENT
        </h1>

    @endif

</div>

</body>
</html>