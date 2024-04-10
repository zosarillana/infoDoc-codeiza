<!doctype html>
<html data-theme="dracula">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

</head>
@include('partials.navbar_admin')

<body>
    <div class="p-5 m-10">
        <div class="m-10">
            <div>
                <h3 class="pb-5 text-white text-xl font-bold">Users</h3>
            </div>
            @include('admin.body.user_table')
        </div>
    </div>
</body>

</html>
