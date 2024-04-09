<!doctype html>
<html data-theme="dracula">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col h-screen w-screen">
        <div class="flex-grow flex">
            <div class="flex-grow card bg-base-200 place-items-center place-content-center pb-20">
                <div>
                    <div class="flex pb-5 place-items-center">
                        <div class="w-[170px] pr-1">
                            <img src="{{ asset('images/l1.png') }}" alt="Example Image" class="w-full h-auto">
                        </div>
                        <div class="w-[168px] pl-1">
                            <img src="{{ asset('images/l2.png') }}" alt="Example Image" class="w-full h-auto">
                        </div>
                    </div>
                    <h1 class="uppercase font-semibold text-[35px] text-gray-100 text-center">infodoc system</h1>
                </div>
            </div>
            <div class="divider divider-horizontal"></div>
            <section class="flex-grow bg-base-100 rounded-box place-items-center">
                <div class="grid place-items-center w-full h-full">
                    <div class="max-w-xl w-full pt-5 pb-10">
                        <div
                            class="bg-gray-50 rounded-md shadow dark:border md:mt-0 sm:max-w-xl xl:p-0 dark:bg-gray-800 dark:border-gray-800">
                            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                                <h1
                                    class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-1x1 dark:text-white">
                                    Sign up</h1>
                                <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                    Hello students! Lets get started on your school adventure!
                                </p>
                                <form class="space-y-4 md:space-y-6" action="#">

                                    <div class="grid grid-cols-2 gap-2">
                                        <div>
                                            <label for="first_name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                                name</label>
                                            <input type="text" name="first_name" id="first_name"
                                                class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="first name" required="">
                                        </div>
                                        <div>
                                            <label for="last_name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                                name</label>
                                            <input type="text" name="last_name" id="last_name"
                                                class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="last name" required="">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2 gap-2">
                                        <div>
                                            <label for="year"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year</label>
                                            <input type="text" name="year" id="year"
                                                class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="year" required="">
                                        </div>
                                        <div>
                                            <label for="course"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course</label>
                                            <input type="text" name="course" id="course"
                                                class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="course" required="">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="student_id"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student
                                            ID</label>
                                        <input type="student_id" name="student_id" id="student_id"
                                            class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="student id" required="">
                                    </div>

                                    <div class="grid grid-cols-2 gap-2">
                                        <div>
                                            <label for="email"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                                Email</label>
                                            <input type="email" name="email" id="email"
                                                class="pb=bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="name@gmail.com" required="">
                                        </div>
                                        <div>
                                            <label for="contact_num"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact</label>
                                            <input type="contact_num" name="contact_num" id="contact_num"
                                                class="pb=bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="contact" required="">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2 gap-2">
                                        <div>
                                            <label for="password"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                            <input type="password" name="password" id="password" placeholder="••••••••"
                                                class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                required="">
                                        </div>
                                        <div>
                                            <label for="confirm-password"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                                Password</label>
                                            <input type="password" name="confirm-password" id="confirm-password"
                                                placeholder="••••••••"
                                                class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                required="">
                                        </div>
                                    </div>
                                    <button
                                        class="btn btn-block border-none text-gray-50 bg-green-500 hover:bg-green-800">Sign
                                        up</button>
                                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                        Already have an account? <a href="{{ route('login.index') }}"
                                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login
                                            Here</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
</body>

</html>
