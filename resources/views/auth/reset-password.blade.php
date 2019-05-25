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
            <div class="w-full max-w-4xl">
                <div class="flex justify-center">
                    <p class="text-5xl mb-8">Ambulatory</p>
                </div>
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="flex items-center justify-between mb-4">
                        <label href="" class="font-sans text-xl mb-4">
                            New password
                        </label>
                        <a href="" class="inline-block align-baseline text-md mb-4 text-blue-400 hover:text-blue-darker">
                            Sign in?
                        </a>
                    </div>
                    <div class="flex justify-center">
                        <div class="p-2 mb-3 bg-teal-700 items-center rounded-full text-teal-200 leading-none lg:rounded-full flex lg:inline-flex"
                            role="alert">
                            <span class="font-semibold mr-2 text-left flex-auto">
                                Copy your new password, use it for your
                                <a href="{{ route('ambulatory.login') }}">next login</a>
                                and then reset it.
                            </span>
                            <span class="flex rounded-full bg-teal-400 uppercase px-2 py-1 text-xs text-yellow-300 font-bold mr-3">
                                {{$password}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>