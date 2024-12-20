<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;700&display=swap" rel="stylesheet">

    <title>Business Intellect</title>
    @vite(['resources/css/app.css'])
</head>
<body>    
    <section class="bg-gray-900 font-kanit">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <!-- <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-white">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                Sign In    
            </a> -->
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="w-full rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0 bg-gray-800 border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl text-center">
                        วิทยาลัยอาชีวศึกษากาญจนบุรี
                    </h1>
                    <form method="POST" action="{{ route('login') }}" class="space-y-4 md:space-y-6">
                        @csrf
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-white">ชื่อผู้ใช้งาน</label>
                            <input type="text" name="username" id="username" class="bg-gray-700 border-gray-600 text-white rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="ชื่อผู้ใช้งาน" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-white">รหัสผ่าน</label>
                            <input type="password" name="password" id="password" placeholder="รหัสผ่าน" class="bg-gray-700 border-gray-600 text-white rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        </div>
                        <!-- <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border-gray-600 rounded bg-gray-700 focus:ring-3 focus:ring-blue-500" required>
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-300">Remember me</label>
                                </div>
                            </div>
                            <a href="#" class="text-sm font-medium text-blue-500 hover:underline">Forgot password?</a>
                        </div> -->
                        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-blue-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">เข้าสู่ระบบ</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
</html>

