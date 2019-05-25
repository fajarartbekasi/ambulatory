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
        <div class="w-full max-w-sm">
            <div class="flex justify-center">
                <p class="text-5xl mb-2">{{ config('app.name') }}</p>
            </div>
            @if (session()->has('invalidResetToken'))
                <div class="flex justify-center">
                    <div class="p-2 mb-3 bg-red-800 items-center rounded-full text-red-100 leading-none lg:rounded-full flex lg:inline-flex"
                        role="alert">
                        <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">
                            hmm.
                        </span>
                        <span class="font-semibold mr-2 text-left flex-auto">
                            Invalid reset token.
                        </span>
                    </div>
                </div>
            @endif
            @if (session()->has('passwordResetLinkSent'))
                <div class="flex justify-center">
                    <div class="p-2 mb-3 bg-teal-700 items-center rounded-full text-teal-200 leading-none lg:rounded-full flex lg:inline-flex"
                        role="alert">
                        <span class="flex rounded-full bg-teal-400 uppercase px-2 py-1 text-xs font-bold mr-3">
                            horay.
                        </span>
                        <span class="font-semibold mr-2 text-left flex-auto">
                            We have e-mailed your password reset link!
                        </span>
                    </div>
                </div>
            @endif
            <form action="{{ route('ambulatory.password.email') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
                method="POST">
                @csrf
                <div class="flex items-center justify-between">
                    <label href="" class="font-sans text-xl mb-4">
                        Reset password
                    </label>
                    <a href="{{ route('ambulatory.login') }}"
                        class="inline-block align-baseline text-md mb-4 text-blue-400 hover:text-blue-darker">
                        Sign in?
                    </a>
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
                        <p class="text-red-500 text-xs italic" role="alert">{{ $errors->first('email') }}.</p>
                    @endif
                </div>
                <div class="flex items-center mb-8">
                    <button
                        class="bg-blue-500 w-full hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Reset
                    </button>
                </div>
                <div class="flex justify-center items-center text-center mt-5">
                    <p class="text-center text-gray-500 text-base  mr-1">
                        Don't have an account?
                    </p>
                    <a href="{{ route('ambulatory.register') }}" class="text-blue-400 text-center text-base"> Sign Up</a>
                </div>
            </form>
        </div>

    </div>
</body>
</html>