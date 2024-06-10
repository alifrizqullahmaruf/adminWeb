@extends('layout')

@section('title', 'Login Page')

@section('content')
<div class="h-full w-full bg-[#E0E0E0]">
    <div class="max-w-[1240px] grid grid-cols-2 rounded h-screen mx-auto py-8">
        <div class="bg-white px-20 flex flex-col justify-center rounded-l-2xl">
            <h1 class="text-4xl font-bold">Holla,<br>Welcome Back</h1>
            <p class="mt-4 text-lg">Hey, welcome back to your special place</p>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                {{-- Textfield Email --}}
                <div class="mt-8">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <div class="mt-1">
                        <input type="email" name="email" id="email" class="px-3 py-2 border border-gray-300 rounded-md w-full" placeholder="you@example.com" required>
                    </div>
                </div>
                
                {{-- Textfield Password --}}
                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="mt-1">
                        <input type="password" name="password" id="password" class="px-3 py-2 border border-gray-300 rounded-md w-full" placeholder="Password" required>
                    </div>
                </div>
                
                {{-- Remember Me Checkbox --}}
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-900">Remember Me</label>
                    </div>
                    <a href="#" class="text-sm text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                </div>
                
                {{-- Sign In Button --}}
                <div class="mt-6">
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Sign in
                    </button>
                </div>
            </form>
            
            {{-- Sign Up Link --}}
            <p class="mt-6 text-center text-sm text-gray-600">
                Don’t have an account? 
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500" onclick="window.location.href='/register';">Sign Up</a>
            </p>
        </div>
        
        <div class="bg-gradient-to-r from-indigo-500 to-blue-500 rounded-r-2xl flex">
            <!-- Additional content for the right side can go here -->
            <img src="{{ asset('images/logoAuth.png') }}" alt="Logo" class="w-2/3 mx-auto my-auto">
        </div>
    </div>
</div>
@endsection
