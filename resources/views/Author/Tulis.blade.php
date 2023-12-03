<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                colors: {
                    'brown1': '#B0A695',
                    'brown2': '#EBE3D5'
                    'brown3': '#776B5D'
                }
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    {{-- Custom CSS --}}
    <style type="text/tailwindcss">
        @layer utilities {

        }
    </style>
    {{-- Tailwind Plugin --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    {{-- Flowbite CDN --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-sky-100">
    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>
    {{-- Sidebar start --}}
    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-sky-500 rounded-r-lg my-5" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-brown1">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#" class="flex justify-center text-gray-900 rounded-lg  group">
                        <img src="{{ asset('img/ReadInk .png') }}" alt="logo readink">
                    </a>
                </li>
                <li>
                    <a href="dashboard-author" class="flex items-center p-2 text-white rounded-lg hover:bg-sky-400 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27" viewBox="0 0 30 27" fill="none">
                            <path d="M13.1869 2.77974C14.2343 2.00758 15.7657 2.00758 16.8131 2.77975L25.2506 9.00017C25.8843 9.46737 26.25 10.1552 26.25 10.8799V21.0538C26.25 22.11 25.2706 22.9662 24.0625 22.9662H19.6875C18.4794 22.9662 17.5 22.11 17.5 21.0538V15.582C17.5 15.4312 17.3601 15.3088 17.1875 15.3088H12.8125C12.6399 15.3088 12.5 15.4312 12.5 15.582V21.0538C12.5 22.11 11.5206 22.9662 10.3125 22.9662H5.9375C4.72938 22.9662 3.75 22.11 3.75 21.0538V10.8799C3.75 10.1552 4.11569 9.46737 4.7494 9.00017L13.1869 2.77974ZM15.6044 4.03288C15.2552 3.77549 14.7448 3.77549 14.3956 4.03288L5.95814 10.2533C5.7469 10.409 5.625 10.6383 5.625 10.8799V21.0538C5.625 21.2047 5.76491 21.327 5.9375 21.327H10.3125C10.4851 21.327 10.625 21.2047 10.625 21.0538V15.582C10.625 14.5258 11.6044 13.6695 12.8125 13.6695H17.1875C18.3956 13.6695 19.375 14.5258 19.375 15.582V21.0538C19.375 21.2047 19.5149 21.327 19.6875 21.327H24.0625C24.2351 21.327 24.375 21.2047 24.375 21.0538V10.8799C24.375 10.6383 24.2531 10.409 24.0419 10.2533L15.6044 4.03288Z" fill="white" />
                        </svg>
                        <span class="flex-1 ms-3 text-white whitespace-nowrap">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="bookmark-author" class="flex items-center p-2 text-white rounded-lg hover:bg-sky-400 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="28" viewBox="0 0 30 28" fill="none">
                            <path d="M7.73867 24.7251C7.1185 25.1152 6.25366 24.7277 6.25366 24.0598V7.67201C6.25366 5.71048 8.0725 4.12036 10.3162 4.12036H19.6891C21.9327 4.12036 23.7516 5.71048 23.7516 7.67201V24.0598C23.7516 24.7277 22.8867 25.1152 22.2666 24.7251L15.0026 20.1561L7.73867 24.7251ZM21.8766 7.67201C21.8766 6.6158 20.8972 5.75958 19.6891 5.75958H10.3162C9.10804 5.75958 8.12866 6.6158 8.12866 7.67201V22.4604L14.4551 18.481C14.7822 18.2754 15.2231 18.2754 15.5501 18.481L21.8766 22.4604V7.67201Z" fill="white" />
                        </svg>
                        <span class="flex-1 ms-3 text-white whitespace-nowrap">Bookmark</span>
                    </a>
                </li>
                <li>
                    <a href="history-author" class="flex items-center p-2 text-white rounded-lg hover:bg-sky-400 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27" viewBox="0 0 30 27" fill="none">
                            <path d="M24.375 13.8086C24.375 9.28201 20.1776 5.61249 15 5.61249C12.5386 5.61249 10.2988 6.44175 8.62616 7.79812H10.3125C10.8303 7.79812 11.25 8.16508 11.25 8.61773C11.25 9.07038 10.8303 9.43734 10.3125 9.43734H6.5625C6.04474 9.43734 5.625 9.07038 5.625 8.61773V5.33929C5.625 4.88663 6.04474 4.51967 6.5625 4.51967C7.08026 4.51967 7.5 4.88663 7.5 5.33929V6.47765C9.49034 4.92026 12.1187 3.97327 15 3.97327C21.2132 3.97327 26.25 8.3767 26.25 13.8086C26.25 19.2405 21.2132 23.6439 15 23.6439C8.7868 23.6439 3.75 19.2405 3.75 13.8086C3.75 13.2968 3.7947 12.7942 3.88089 12.3036C3.95125 11.903 4.35779 11.623 4.82135 11.623C5.39511 11.623 5.81056 12.1018 5.72654 12.5981C5.65965 12.9931 5.625 13.3973 5.625 13.8086C5.625 18.3351 9.82233 22.0047 15 22.0047C20.1776 22.0047 24.375 18.3351 24.375 13.8086ZM15.625 9.16414C15.625 8.71148 15.2052 8.34453 14.6875 8.34453C14.1698 8.34453 13.75 8.71148 13.75 9.16414V14.0818C13.75 14.5344 14.1698 14.9014 14.6875 14.9014H17.8125C18.3302 14.9014 18.75 14.5344 18.75 14.0818C18.75 13.6292 18.3302 13.2622 17.8125 13.2622H15.625V9.16414Z" fill="white" />
                        </svg>
                        <span class="flex-1 ms-3 text-white whitespace-nowrap">History</span>
                    </a>
                </li>
                <li>
                    <a href="tulis-author" class="flex items-center p-2 text-white rounded-lg bg-sky-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M18.4385 20.6254C20.0742 20.6254 20.7112 21.3535 21.1951 22.9682L21.28 23.2647C21.5081 24.0864 21.6445 24.3325 21.9207 24.4464C22.2446 24.5799 22.4606 24.5609 22.8 24.3864L22.9837 24.2835C23.0497 24.2437 23.1217 24.198 23.2032 24.1442L24.0322 23.58C24.8021 23.0736 25.4939 22.7389 26.3361 22.5284C26.8385 22.4027 27.3475 22.7082 27.473 23.2105C27.5986 23.7127 27.2932 24.2217 26.7909 24.3474C26.2821 24.4746 25.8431 24.6671 25.3592 24.9591L24.986 25.1976L24.3872 25.6076C24.1 25.803 23.8832 25.9377 23.6574 26.0539C22.8537 26.467 22.07 26.5359 21.2062 26.1799C20.2752 25.7962 19.8999 25.205 19.5484 24.0279L19.3536 23.3506C19.127 22.6139 18.9725 22.5004 18.4385 22.5004C18.0519 22.5004 17.6515 22.6939 17.1031 23.1541L16.8721 23.3553L15.721 24.4494C13.9609 26.1039 12.4603 26.9073 10.3118 26.9073C8.20397 26.9073 6.38097 26.5897 4.85065 25.9462L8.53513 24.9409C9.09422 25.0017 9.68636 25.0323 10.3118 25.0323C11.7903 25.0323 12.8515 24.5136 14.1696 23.329L14.4924 23.0306L15.1571 22.3918C15.453 22.1083 15.6746 21.9051 15.8977 21.7178C16.7522 21.0008 17.529 20.6254 18.4385 20.6254ZM23.789 3.71246C25.5357 5.45929 25.5357 8.29146 23.789 10.0383L23.4287 10.3992C24.868 12.1509 24.816 14.0072 23.4774 15.3499L20.9759 17.8514C20.6094 18.2171 20.0159 18.2166 19.65 17.8503C19.2842 17.4838 19.2847 16.8901 19.6512 16.5244L22.1496 14.0259C22.7559 13.4179 22.826 12.663 22.0999 11.728L11.3285 22.4988C10.9824 22.8448 10.552 23.0946 10.0798 23.2234L3.68521 24.9674C2.98536 25.1582 2.3432 24.516 2.53407 23.8162L4.27805 17.4216C4.40683 16.9494 4.65662 16.519 5.00271 16.1729L17.4631 3.71246C19.21 1.96564 22.0421 1.96564 23.789 3.71246ZM18.789 5.03829L6.32853 17.4987C6.21317 17.6141 6.12991 17.7575 6.08698 17.915L4.77467 22.7268L9.58647 21.4144C9.74387 21.3715 9.88735 21.2882 10.0027 21.1729L22.4631 8.71246C23.4777 7.69788 23.4777 6.05289 22.4631 5.03829C21.4485 4.0237 19.8035 4.0237 18.789 5.03829Z" fill="white" />
                        </svg>
                        <span class="flex-1 ms-3 text-white whitespace-nowrap">Tulis</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-sky-400 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27" viewBox="0 0 30 27" fill="none">
                            <path d="M15.0153 3.03052C15.9328 3.03976 16.8466 3.13243 17.7421 3.30704C18.133 3.38327 18.4254 3.66819 18.4698 4.01619L18.6825 5.68476C18.7789 6.45088 19.5188 7.03114 20.4008 7.03195C20.6379 7.03227 20.8724 6.98911 21.0915 6.90436L22.8423 6.23198C23.2064 6.09214 23.6319 6.16838 23.9036 6.4222C25.1689 7.60355 26.1111 9.0204 26.6596 10.5661C26.7779 10.8994 26.6418 11.2616 26.3205 11.4687L24.7686 12.4687C24.3259 12.7531 24.0645 13.2046 24.0645 13.6849C24.0645 14.1651 24.3259 14.6167 24.7696 14.9017L26.3228 15.902C26.6441 16.109 26.7804 16.4713 26.6621 16.8047C26.1139 18.3501 25.1721 19.7669 23.9076 20.9484C23.6361 21.2022 23.211 21.2787 22.8469 21.1391L21.089 20.4658C20.586 20.2734 20.0085 20.3016 19.5331 20.5418C19.0579 20.7819 18.7416 21.2053 18.6813 21.6824L18.4699 23.3508C18.4263 23.6948 18.1403 23.9778 17.755 24.0579C15.9445 24.4345 14.0581 24.4345 12.2475 24.0579C11.8624 23.9778 11.5763 23.6948 11.5327 23.3508L11.3217 21.6849C11.2597 21.2087 10.9429 20.7866 10.468 20.5472C9.99314 20.3079 9.4165 20.2798 8.91525 20.4712L7.15696 21.1446C6.79278 21.2841 6.36754 21.2076 6.09598 20.9537C4.83078 19.7708 3.88899 18.3523 3.3415 16.8052C3.22358 16.472 3.35983 16.11 3.68106 15.9031L5.23523 14.9021C5.6779 14.6177 5.93934 14.1662 5.93934 13.686C5.93934 13.2057 5.6779 12.7542 5.23464 12.4695L3.68145 11.4702C3.35975 11.2632 3.22338 10.9007 3.34171 10.5672C3.89015 9.02149 4.83243 7.60465 6.09766 6.42329C6.36949 6.16948 6.79493 6.09323 7.15905 6.23308L8.90953 6.90533C9.4132 7.09859 9.99225 7.0694 10.4697 6.82553C10.9451 6.58445 11.2616 6.16058 11.3227 5.68348L11.5353 4.01619C11.5797 3.66801 11.8723 3.38299 12.2635 3.30693C13.1601 3.13261 14.075 3.03997 15.0153 3.03052ZM15.0155 4.66963C14.4479 4.67547 13.882 4.71829 13.3223 4.79762L13.1861 5.86548C13.0589 6.85939 12.4 7.74166 11.413 8.24218C10.42 8.7494 9.2092 8.81045 8.15573 8.40626L7.03286 7.97502C6.31795 8.73362 5.74893 9.58888 5.34815 10.5072L6.3454 11.1488C7.26891 11.742 7.81434 12.6841 7.81434 13.686C7.81434 14.6878 7.26891 15.6299 6.34638 16.2224L5.34756 16.8658C5.74799 17.7857 6.3171 18.6426 7.0325 19.4026L8.16391 18.9693C9.21154 18.5695 10.4141 18.6279 11.4044 19.127C12.3948 19.6261 13.0554 20.5065 13.185 21.5019L13.3213 22.5772C14.4333 22.7425 15.5694 22.7425 16.6814 22.5772L16.8176 21.502C16.9436 20.5069 17.6035 19.6235 18.595 19.1225C19.5865 18.6215 20.7915 18.5627 21.841 18.9643L22.9715 19.3973C23.6863 18.6384 24.2551 17.783 24.6559 16.8645L23.6584 16.222C22.7349 15.6288 22.1895 14.6867 22.1895 13.6849C22.1895 12.683 22.7349 11.7409 23.6573 11.1485L24.6534 10.5066C24.2526 9.58807 23.6835 8.73265 22.9685 7.97393L21.8479 8.40429C21.3913 8.58094 20.8973 8.67185 20.3984 8.67117C18.5613 8.66949 17.0194 7.4603 16.8189 5.86509L16.6828 4.79727C16.1259 4.71804 15.5658 4.67534 15.0155 4.66963ZM14.9996 9.58735C17.5885 9.58735 19.6871 11.4221 19.6871 13.6855C19.6871 15.9487 17.5885 17.7835 14.9996 17.7835C12.4108 17.7835 10.3121 15.9487 10.3121 13.6855C10.3121 11.4221 12.4108 9.58735 14.9996 9.58735ZM14.9996 11.2266C13.4464 11.2266 12.1871 12.3274 12.1871 13.6855C12.1871 15.0434 13.4464 16.1443 14.9996 16.1443C16.5529 16.1443 17.8121 15.0434 17.8121 13.6855C17.8121 12.3274 16.5529 11.2266 14.9996 11.2266Z" fill="white" />
                        </svg>
                        <span class="flex-1 ms-3 text-white whitespace-nowrap">Setting</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    {{-- Sidebar end --}}

    {{-- Konten start --}}
    <div class="p-4 sm:ml-64">
        <div class="relative">
            <div class="absolute -top-[267px] -left-4 z-10 bg-sky-100">
                {{-- Navbar start --}}
                <div class="fixed flex flex-row gap-4 mb-4 w-full rounded bg-sky-100 px-4">
                    {{-- Search bar start --}}
                    <div class="flex items-center justify-center h-24 rounded w-1/4  ">
                        <form class="w-full">
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only"></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search Novel" required>
                            </div>
                        </form>
                    </div>
                    {{-- Search bar end --}}

                    {{-- Genre start --}}
                    <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex items-center w-1/5 font-medium text-gray-600 rounded p-5 bg-sky-100">Genre
                        <svg class="w-2.5 h-2.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <div id="mega-menu-dropdown" class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md md:grid-cols-3">
                        <div class="p-4 pb-0 text-gray-900 md:pb-4">
                                <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Action
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Comedy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Horror
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Mystery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Romance
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Slice of Life
                                        </a>
                                    </li>
                                </ul>
                        </div>
                        <div class="p-4 pb-0 text-gray-900 md:pb-4">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Supperhero
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Mecha
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Isekai
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Adventure
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Drama
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Genre
                                        </a>
                                    </li>
                                </ul>
                        </div>
                        <div class="p-4">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Sci-Fi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Sport
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Thriller
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            School
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-blue-600">
                                            Magic
                                        </a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    {{-- Genre end --}}

                    {{-- Lonceng icon start --}}
                    <div class="absolute top-[35px] left-[1300px] flex flex-row items-center justify-center item-end h-15 gap-x-5">
                        <a href="#">
                            <img class="w-[40px] h-[auto]" src="{{ asset('img/Rectangle 9.png') }}" alt="">
                        </a>
                        <p class="text-2xl text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="auto" viewBox="0 0 42 48" fill="none">
                                <path d="M20.9711 0.311279C24.3486 0.311279 27.5049 1.30633 30.1824 3.03685C29.3846 3.93014 28.7677 5.00243 28.3925 6.18985C26.24 4.78687 23.6959 3.97866 20.9711 3.97866C13.2136 3.97866 6.95327 10.517 6.95215 18.6481V29.4293L3.81195 36.9942H38.1505L34.9902 29.4317L34.9904 18.6796L34.9816 18.129C34.9729 17.864 34.9575 17.6009 34.9358 17.3399C35.3348 17.4025 35.7432 17.4349 36.1587 17.4349C36.9476 17.4349 37.7104 17.318 38.4321 17.0999C38.4571 17.4092 38.4748 17.7209 38.4851 18.0346L38.4949 18.6481V23.6565V28.6648L41.7193 36.3811C41.8808 36.7672 41.9641 37.184 41.9641 37.6053C41.9641 39.2933 40.6562 40.6616 39.0434 40.6616L27.9806 40.6652C27.9806 44.7161 24.8423 48 20.9711 48C17.2382 48 14.1868 44.9464 13.9736 41.0961L13.9606 40.6596L2.92138 40.6616C2.52103 40.6616 2.12497 40.5755 1.7578 40.4087C0.278325 39.7362 -0.400092 37.936 0.242532 36.3879L3.44741 28.6672V18.6479C3.44879 8.48977 11.2796 0.311279 20.9711 0.311279ZM24.4748 40.6596L17.4664 40.6652C17.4664 42.6906 19.0356 44.3326 20.9711 44.3326C22.7929 44.3326 24.29 42.8782 24.4599 41.0184L24.4748 40.6596ZM30.4103 7.78635C30.6325 6.49719 31.2408 5.34855 32.1055 4.47636C33.156 3.41696 34.5847 2.76546 36.1587 2.76546C39.3848 2.76546 42 5.50201 42 8.87773C42 11.5505 40.3606 13.8225 38.0765 14.6529C37.4759 14.8713 36.8305 14.99 36.1587 14.99C35.5791 14.99 35.0194 14.9017 34.4909 14.7372C32.0775 13.9861 30.3175 11.647 30.3175 8.87773C30.3175 8.50522 30.3494 8.14047 30.4103 7.78635Z" fill="black" />
                                <rect x="30" y="2" width="12" height="13" rx="6" fill="#FF0000" />
                            </svg>
                        </p>
                    </div>
                    {{-- Lonceng icon end --}}

                    {{-- Button start --}}
                    <div class="absolute right-[30px] mt-[90px] bg-sky-100 w-full">
                        {{-- <div class="flex flex-col text-black-50 mt-5 ml-[50px]">
                            <button type="button" class="py-3 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 w-[150px] hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">Last History</button>
                        </div> --}}
                        <div class="flex flex-row">
                            <p class="font-bold text-2xl text-black mt-3 mb-4 ml-[50px]">Cerita saya</p>
                            <button type="button" class="absolute top-[10px] left-[700px] py-2 px-[50px] me-2 mb-2 text-sm font-medium text-white    focus:outline-none bg-sky-700 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200"><a href="addcerita-author">+Tulis</a></button>
                        </div>
                    </div>
                    {{-- Button end --}}
                </div>
                {{-- Nabvar end --}}
            </div>

            <div>
                {{-- Button start --}}
                {{-- <div class="mt-[100px]">
                    <div class="flex flex-col text-black-50 mt-5">
                        <button type="button" class="py-3 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 w-[150px] hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">Last History</button>
                    </div>
                    <p class="font-bold text-2xl text-black mt-3">Semua Cerita</p>
                </div> --}}
                {{-- Button end --}}

                {{-- Card history start --}}
                <div class="z-0">
                    <div class="relative flex flex-row mt-[250px] p-3 border border-gray-50 border-lg shadow rounded w-1/2">
                        <div class="">
                            <img src="{{ asset('img/kimdokja 1.png') }}" alt="">
                        </div>
                        <div class="flex flex-col ms-5">
                            <table>
                                <tbody>
                                    @foreach ($cerita as $story)
                                        <tr>
                                            <td>
                                                <h3 class="font-bold text-xl text-black">{{ $story->judul }}</h3>
                                            </td>
                                            <td>
                                                <h5 class="mt-10">{{ $story->sinopsis }}</h5>
                                            </td>
                                            <td>
                                                <h5 class="mt-10">{{ $story->genre }}</h5>
                                            </td>
                                            <td>
                                                <h5 class="mt-10">{{ $story->tokohUtama }}</h5>
                                            </td>
                                            <td>
                                                <h5 class="mt-10">{{ $story->tglrilis }}</h5>
                                            </td>
                                            <td>
                                                <h5 class="mt-10">{{ $story->penulis }}</h5>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <div class="flex flex-row gap-x-5 mt-5">
                                        <div class="flex flex-row">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.9999 9.00462C14.209 9.00462 15.9999 10.7955 15.9999 13.0046C15.9999 15.2138 14.209 17.0046 11.9999 17.0046C9.79073 17.0046 7.99987 15.2138 7.99987 13.0046C7.99987 10.7955 9.79073 9.00462 11.9999 9.00462ZM11.9999 10.5046C10.6192 10.5046 9.49987 11.6239 9.49987 13.0046C9.49987 14.3853 10.6192 15.5046 11.9999 15.5046C13.3806 15.5046 14.4999 14.3853 14.4999 13.0046C14.4999 11.6239 13.3806 10.5046 11.9999 10.5046ZM11.9999 5.5C16.6134 5.5 20.596 8.65001 21.701 13.0644C21.8016 13.4662 21.5574 13.8735 21.1556 13.9741C20.7537 14.0746 20.3465 13.8305 20.2459 13.4286C19.307 9.67796 15.9212 7 11.9999 7C8.07681 7 4.68997 9.68026 3.75273 13.4332C3.65237 13.835 3.24523 14.0794 2.84336 13.9791C2.44149 13.8787 2.19707 13.4716 2.29743 13.0697C3.40052 8.65272 7.38436 5.5 11.9999 5.5Z" fill="#212121" fill-opacity="0.7" />
                                            </svg>
                                            <p>200</p>
                                        </div>
                                        <div class="flex flex-row">
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                </svg>
                                                <p class="ms-2 text-sm font-bold text-gray-900">4.95</p>
                                            </div>
                                        </div>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                        <div class="absolute top-[80px] left-[550px] flex flex-row">
                            <button type="button" class="focus:outline-none text-white bg-sky-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-xl px-[50px] py-2.5 me-2 mb-2"><a href="editcerita-author">Edit</a></button>
                            <a href="">
                                <svg class="absolute top-[10px] left-[170px]" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M12.5 6.25H17.5C17.5 4.86929 16.3807 3.75 15 3.75C13.6193 3.75 12.5 4.86929 12.5 6.25ZM10.625 6.25C10.625 3.83375 12.5837 1.875 15 1.875C17.4163 1.875 19.375 3.83375 19.375 6.25H26.5625C27.0802 6.25 27.5 6.66974 27.5 7.1875C27.5 7.70526 27.0802 8.125 26.5625 8.125H24.9136L23.4486 23.264C23.2161 25.6667 21.1969 27.5 18.7829 27.5H11.2171C8.80317 27.5 6.78394 25.6667 6.55141 23.264L5.08635 8.125H3.4375C2.91974 8.125 2.5 7.70526 2.5 7.1875C2.5 6.66974 2.91974 6.25 3.4375 6.25H10.625ZM13.125 12.1875C13.125 11.6697 12.7052 11.25 12.1875 11.25C11.6697 11.25 11.25 11.6697 11.25 12.1875V21.5625C11.25 22.0802 11.6697 22.5 12.1875 22.5C12.7052 22.5 13.125 22.0802 13.125 21.5625V12.1875ZM17.8125 11.25C18.3302 11.25 18.75 11.6697 18.75 12.1875V21.5625C18.75 22.0802 18.3302 22.5 17.8125 22.5C17.2948 22.5 16.875 22.0802 16.875 21.5625V12.1875C16.875 11.6697 17.2948 11.25 17.8125 11.25ZM8.4177 23.0834C8.55721 24.525 9.76875 25.625 11.2171 25.625H18.7829C20.2313 25.625 21.4428 24.525 21.5823 23.0834L23.0299 8.125H6.9701L8.4177 23.0834Z" fill="black"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Card history end --}}
            </div>
        </div>
    </div>
    {{-- Konten end --}}

    {{-- Flowbite JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>