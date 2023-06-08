<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <div class="h-screen pt-5 bg-zinc-50">
        <div class="flex flex-col justify-center items-center w-full">
            <div class="w-1/2">
                <h1 class="text-4xl mb-4">Multi Step Form</h1><hr>
                @livewire('multi-step-form')
            </div>

        </div>
    </div>


    @livewireScripts
</body>

</html>
