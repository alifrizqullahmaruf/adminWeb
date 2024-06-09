<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
</head>

<body>
    <div class="h-full w-full bg-[#E0E0E0]">
        <div class="max-w-[1240px] grid grid-cols-2 rounded h-screen mx-auto py-8">
            <div class="bg-white px-20 flex flex-col justify-center rounded-l-2xl ">
                <h1 class="text-4xl font-bold">Join Us,<br>Register Now</h1>
                <p class="mt-4 text-lg">Hey, create your account and start exploring!</p>

                {{-- Textfield Full Name --}}
                <div class="mt-8">
                    <label for="fullname" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <div class="mt-1">
                        <input type="text" name="fullname" id="fullname" class="px-3 py-2 border border-gray-300 rounded-md w-full" placeholder="Your Full Name">
                    </div>
                </div>

                {{-- Textfield Email --}}
                <div class="mt-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <div class="mt-1">
                        <input type="email" name="email" id="email" class="px-3 py-2 border border-gray-300 rounded-md w-full" placeholder="you@example.com">
                    </div>
                </div>

                {{-- Textfield Password --}}
                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="mt-1">
                        <input type="password" name="password" id="password" class="px-3 py-2 border border-gray-300 rounded-md w-full" placeholder="Password">
                    </div>
                </div>

                {{-- Button Sign up --}}
                <div class="mt-6">
                    <button onclick="redirectToLogin()" type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Sign up
                    </button>
                </div>

                {{-- Already have an account? Sign In --}}
                <p class="mt-6 text-center text-sm text-gray-600">
                    Already have an account?
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500" onclick="window.location.href='/login';">Sign In</a>
                </p>
            </div>
            <div class="bg-gradient-to-r from-indigo-500 to-blue-500 rounded-r-2xl flex">
                <!-- Additional content for the right side can go here -->
                <img src="{{ asset('images/logoAuth.png') }}" alt="Logo" class="w-2/3 mx-auto my-auto">
            </div>
        </div>
    </div>

    <script>
        function redirectToLogin() {
            // Redirect to login page
            window.location.href = "/login";

            // Show alert
            alert("You just signed in");
        }
    </script>
</body>

</html>