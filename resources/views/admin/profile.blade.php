<!doctype html>
<html data-theme="dracula">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

</head>
@include('partials.navbar_admin')

<body>
    <div class="p-5 m-2">
        <div class="m-2">

            <div class="grid place-items-center w-full h-full">

                <div class="max-w-xl w-full ">
                    <div>
                        <h3 class="pb-5 text-white text-xl font-bold">Profile</h3>
                    </div>
                    @include('admin.body.profile_body')
                </div>
            </div>
        </div>
    </div>

</body>

</html>
