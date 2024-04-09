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
                    <div
                        class="bg-gray-50 rounded-md shadow dark:border md:mt-0 sm:max-w-xl xl:p-0 dark:bg-gray-800 dark:border-gray-800">
                        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Fill in the fields and select a file to upload.
                            </p>
                            <form class="space-y-4 md:space-y-6" action="#">
                                <div>
                                    <label for="document_name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Document
                                        name</label>
                                    <input type="document_name" name="document_name" id="document_name"
                                        class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="document name" required="">
                                </div>
                                <label class="form-control w-full ">
                                    <div class="label">
                                        <span class="label-text">Pick a file</span>
                                        <span class="label-text-alt">File name</span>
                                    </div>
                                    <input type="file" class="file-input file-input-bordered w-full" />

                                </label>
                                <button
                                    class="btn
                                    btn-block border-none text-gray-50 bg-green-500 hover:bg-green-900">Sign
                                    in</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
