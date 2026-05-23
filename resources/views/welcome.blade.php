
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnChain</title>

    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen">

    @include('components.navbar')

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-6 py-20">

        <div class="grid lg:grid-cols-2 gap-14 items-center">

            <!-- Left -->
            <div>
                <p class="inline-block bg-black text-white px-4 py-2 rounded-full text-sm mb-6">
                    Blockchain Document Verification
                </p>

                <h1 class="text-5xl font-bold leading-tight mb-6">
                    Secure Document Verification Using Blockchain
                </h1>

                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Upload documents, generate SHA256 hashes, store them on Polygon Amoy blockchain,
                    and verify authenticity using a unique verification ID.
                </p>

                <div class="flex flex-wrap gap-4">

                    <a href="/upload"
                       class="bg-black text-white px-8 py-4 rounded-xl font-semibold hover:bg-gray-800 transition duration-300">
                        Upload Document
                    </a>

                    <a href="/verify"
                       class="border border-black px-8 py-4 rounded-xl font-semibold hover:bg-black hover:text-white transition duration-300">
                        Verify Document
                    </a>

                </div>
            </div>

            <!-- Right -->
            <div>

                <div class="bg-white rounded-3xl shadow-xl p-8 border">

                    <h2 class="text-2xl font-bold mb-8 text-center">
                        System Flow
                    </h2>

                    <div class="space-y-5">

                        <div class="flex items-center gap-4 bg-gray-100 p-4 rounded-xl">
                            <div class="w-12 h-12 bg-black text-white rounded-full flex items-center justify-center font-bold">
                                1
                            </div>

                            <div>
                                <h3 class="font-semibold text-lg">Upload Document</h3>
                                <p class="text-gray-600 text-sm">
                                    PDF, image, or certificate upload.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 bg-gray-100 p-4 rounded-xl">
                            <div class="w-12 h-12 bg-black text-white rounded-full flex items-center justify-center font-bold">
                                2
                            </div>

                            <div>
                                <h3 class="font-semibold text-lg">Generate SHA256 Hash</h3>
                                <p class="text-gray-600 text-sm">
                                    Unique fingerprint created automatically.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 bg-gray-100 p-4 rounded-xl">
                            <div class="w-12 h-12 bg-black text-white rounded-full flex items-center justify-center font-bold">
                                3
                            </div>

                            <div>
                                <h3 class="font-semibold text-lg">Store on Blockchain</h3>
                                <p class="text-gray-600 text-sm">
                                    Hash securely stored on Polygon Amoy.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 bg-gray-100 p-4 rounded-xl">
                            <div class="w-12 h-12 bg-black text-white rounded-full flex items-center justify-center font-bold">
                                4
                            </div>

                            <div>
                                <h3 class="font-semibold text-lg">Verify Instantly</h3>
                                <p class="text-gray-600 text-sm">
                                    Check document authenticity using ID.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- Features -->
    <section class="max-w-7xl mx-auto px-6 pb-20">

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white p-8 rounded-2xl shadow border hover:-translate-y-1 transition duration-300">
                <h3 class="text-2xl font-bold mb-4">
                    Secure
                </h3>

                <p class="text-gray-600 leading-relaxed">
                    SHA256 hashing and blockchain storage ensure tamper-proof verification.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow border hover:-translate-y-1 transition duration-300">
                <h3 class="text-2xl font-bold mb-4">
                    Fast Verification
                </h3>

                <p class="text-gray-600 leading-relaxed">
                    Verify documents instantly using the generated verification ID.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow border hover:-translate-y-1 transition duration-300">
                <h3 class="text-2xl font-bold mb-4">
                    Blockchain Powered
                </h3>

                <p class="text-gray-600 leading-relaxed">
                    Powered by Polygon Amoy testnet and Ethereum smart contracts.
                </p>
            </div>

        </div>

    </section>

    @include('components.footer')

</body>
</html>


