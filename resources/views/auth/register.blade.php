<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reliqui Ambulatory - Login</title>

    <!-- Style sheets-->
    <link href='{{ mix('app.css', 'vendor/ambulatory') }}' rel='stylesheet' type='text/css'>
</head>

<body class="bg-gray-200">
    <div class="flex flex-wrap justify-center items-center min-h-screen">
        <div class="w-full max-w-xs">
            <div class="flex justify-center">
                <p class="text-5xl mb-2">{{ config('app.name') }}</p>
            </div>
            <form action="{{ route('ambulatory.register.attempt') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
                method="POST">
                @csrf
                <div class="flex items-center justify-between">
                    <label href="" class="font-sans text-xl mb-4">
                        Sign Up
                    </label>
                    <a href="{{ route('ambulatory.login') }}"
                        class="inline-block align-baseline text-md mb-4 text-blue-400 hover:text-blue-darker">
                        Sign in?
                    </a>
                </div>
                <div class="mb-4">
                    <label for="" class="block text-gray-400 text-sm font-bold mb-2">
                        {{ __('Name') }}
                    </label>
                    <input type="text"
                           class="bg-gray-200 appearance-none border {{ $errors->has('name') ? ' is-invalid' : '' }} border-gray-200 rounded w-full py-2 px-3 text-gray-600 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                           name="name"
                           id="name"
                           value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <p class="text-red-500 text italic text-xs" role="alert">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-400 text-sm font-bold mb-2">
                        {{ __('E-Mail Address') }}
                    </label>
                    <input type="text"
                           name="email"
                           id="email"
                           class="bg-gray-200 appearance-none border {{ $errors->has('email') ? ' is-invalid' : '' }} border-gray-200 rounded w-full py-2 px-3 text-gray-600 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                           value="{{ old('email') }}">
                    @if ($errors->has('email'))
                    <p class="text-red-500 text-xs italic" role="alert">
                        {{ $errors->first('email') }}.
                    </p>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-400 text-sm font-bold mb-2">
                        {{ __('Password') }}
                    </label>
                    <input type="password" name="password" id="password"
                        class="bg-gray-200 appearance-none {{ $errors->has('password') ? ' is-invalid' : '' }} border border-gray-200 rounded w-full py-2 px-3 text-gray-600 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                    @if ($errors->has('password'))
                    <p class="text-red-500 text-xs italic" role="alert">
                        {{ $errors->first('password') }}.
                    </p>
                    @endif
                </div>
                <div class="mb-2">
                    <label for="password" class="block text-gray-400 text-sm font-bold mb-2">
                        {{ __('Confirm Password') }}
                    </label>
                    <input type="password" name="password_confirmation" id="password-confirm"
                        class="bg-gray-200 appearance-none {{ $errors->has('password') ? ' is-invalid' : '' }} border border-gray-200 rounded w-full py-2 px-3 text-gray-600 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex justify-center">
                    <div class="inline-flex">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-l">
                            Register
                        </button>
                        <a href="{{ route('ambulatory.login') }}" class="bg-blue-300 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded-r">
                            Cancel
                        </a>
                    </div>
                </div>
                <div class="flex justify-center items-center text-center mt-5">
                    <p class="text-center text-gray-500 text-base  mr-1">
                       Forgot your password?
                    </p>
                    <a href="{{ route('ambulatory.password.forgot') }}" class="text-blue-400 text-center text-base"> Reset!</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>