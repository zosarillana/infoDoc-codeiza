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
            <div>
                <h3 class="pb-5 text-white text-xl font-bold">My Documents</h3>
            </div>
            <div class="overflow-x-auto rounded-md">
                <table class="table table-lg border-none">
                    <!-- head -->
                    <thead class="bg-green-500 text-white">
                        <tr>
                            <th class="border-b border-gray-200">No.</th>
                            <th class="border-b border-gray-200">Name</th>
                            <th class="border-b border-gray-200">Course</th>
                            <th class="border-b border-gray-200">Document</th>
                            <th class="border-b border-gray-200">Date Submmited</th>
                            <th class="border-b border-gray-200">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-50 text-black ">
                        <!-- row 1 -->
                        <tr>
                            <th class="border-b border-gray-200">1</th>
                            <td class="border-b border-gray-200">Cy Ganderton</td>
                            <td class="border-b border-gray-200">BSCS</td>
                            <td class="border-b border-gray-200">Data Management System</td>
                            <td class="border-b border-gray-200">4-25-2023</td>
                            <td class="border-b border-gray-200">Approved</td>
                        </tr>
                        <!-- row 2 -->
                        <tr class="hover:bg-slate-200">
                            <th class="border-b border-gray-200">2</th>
                            <td class="border-b border-gray-200">Hart Hagerty</td>
                            <td class="border-b border-gray-200">ABM</td>
                            <td class="border-b border-gray-200">Resources Planning</td>
                            <td class="border-b border-gray-200">11-2-2023</td>
                            <td class="border-b border-gray-200">Pending</td>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <th class="border-b border-gray-200">3</th>
                            <td class="border-b border-gray-200">Brice Swyre</td>
                            <td class="border-b border-gray-200">BSIT</td>
                            <td class="border-b border-gray-200">Performance Monitoring</td>
                            <td class="border-b border-gray-200">12-25-2023</td>
                            <td class="border-b border-gray-200">Approved</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
