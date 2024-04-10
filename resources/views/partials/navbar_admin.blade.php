<div class="navbar bg-green-500 ">
    <div class="flex-1">
        <a class="btn btn-ghost text-xl text-gray-50">infoDoc</a>
    </div>
    <div class="flex-none">
        <ul class="text-gray-50 font-bold menu menu-horizontal px-1">
            <li><a href="{{ route('admin.dashboard') }}">Documents</a></li>
            <li><a href="{{ route('admin.user_table') }}">User table</a></li>
            <li>
                <details>
                    <summary>
                        Options
                    </summary>
                    <ul class="text-gray-50
                    font-bold p-2 bg-base-300 rounded-t-none">
                        <li><a href="{{ route('admin.profile') }}" ">Profile</a></li>
                        <li><a>Logout</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
</div>
