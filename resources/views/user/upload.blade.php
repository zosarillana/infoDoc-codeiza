<!doctype html>
<html data-theme="dracula">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

</head>
@include('partials.navbar')

<body>
    <div class="p-5 m-10">
        <div class="m-10">
            <div class="grid place-items-center w-full h-full">

                <div class="max-w-xl w-full pt-5 pb-10">
                    <div>
                        <h3 class="pb-5 text-white text-xl font-bold">Upload Document</h3>
                    </div>
                    @include('user.body.upload_body')
                </div>
            </div>
        </div>
    </div>
</body>

</html>
