<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    {{-- Sidebar --}}
    <div class="flex h-screen max-w-fit flex-col justify-between border-e bg-white">
        <div class="px-4 py-6">
            <span class="grid h-10 w-32 place-content-center rounded-lg text-xs text-gray-600">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/logo2.png') }}" alt="HWI" width="127" height="72">
                </a>
            </span>

            <ul class="mt-12 space-y-1">
                <li>
                    <a href="#"
                        class="block rounded-lg text-gray-500 px-4 py-2 text-sm font-medium hover:bg-gray-100 hover:text-gray-700 focus:shadow-lg focus:bg-blue-500 focus:text-white">
                        General
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 focus:shadow-lg focus:bg-blue-500 focus:text-white">
                        Billing
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 focus:shadow-lg focus:bg-blue-500 focus:text-white">
                        Invoices
                    </a>
                </li>

                {{-- <li>
                    <details class="group [&_summary::-webkit-details-marker]:hidden">
                        <summary
                            class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700 focus:shadow-lg focus:bg-blue-500 focus:text-white">
                            <span class="text-sm font-medium"> Account </span>

                            <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </summary>

                        <ul class="mt-2 space-y-1 px-4">
                            <li>
                                <a href="#"
                                    class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 focus:shadow-lg focus:bg-blue-500 focus:text-white">
                                    Details
                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 focus:shadow-lg focus:bg-blue-500 focus:text-white">
                                    Security
                                </a>
                            </li>

                            <li>
                                <form action="#">
                                    <button type="submit"
                                        class="w-full rounded-lg px-4 py-2 text-sm font-medium text-gray-500 [text-align:_inherit] hover:bg-gray-100 hover:text-gray-700 focus:shadow-lg focus:bg-blue-500 focus:text-white">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </details>
                </li> --}}
            </ul>
        </div>

        <div class="sticky inset-x-0 bottom-0 border-t border-gray-100">
            <a href="#" class="flex items-center gap-2 bg-white p-4 hover:bg-gray-50">
                <img alt=""
                    src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    class="size-10 rounded-full object-cover" />

                <div>
                    <p class="text-xs">
                        <strong class="block font-medium">Eric Frusciante</strong>

                        <span> eric@frusciante.com </span>
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div></div>
</body>

</html>
