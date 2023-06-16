<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased ">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100 dark:bg-gradient-to-b from-gray-600 to-gray-800">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow dark:bg-gray-800">
                <div class="max-w-7xl mx-auto  dark:text-red-100 py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <script>
        let preference = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
        let themePreference = document.cookie.split(';').filter((item) => item.trim().startsWith('color-theme='))
        themePreference = themePreference.length ? themePreference[0].split('=')[1] : preference

        localStorage.setItem('color-theme', themePreference)
        // console.log(localStorage.getItem('color-theme'), window.matchMedia('(prefers-color-scheme: dark)').matches)

        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }

        // Whenever the user explicitly chooses light mode
        window.__setPreferredTheme = function(theme) {
            if (theme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
            localStorage.setItem('color-theme', theme);
        }
        var themeToggleDarkIcon = document.getElementsByClassName('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementsByClassName('theme-toggle-light-icon');

        console.log(themeToggleDarkIcon, themeToggleLightIcon)


        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            for (const icon of themeToggleLightIcon) {
                icon.classList.remove('hidden');
            }
        } else {
            for (const icon of themeToggleDarkIcon) {
                icon.classList.remove('hidden');
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            // Whenever the user explicitly chooses to toggle light/dark
            let toggleSwitch = document.getElementsByClassName('theme-toggle');
            console.log(toggleSwitch, "asdasd")

            for (const toggle of toggleSwitch) {



                toggle.addEventListener('click', function(event) {
                    console.log('test')
                    //togles icons 

                    for (const icon of themeToggleDarkIcon) {
                        icon.classList.toggle('hidden');
                    }
                    for (const icon of themeToggleLightIcon) {
                        icon.classList.toggle('hidden');
                    }



                    //sets theme preference variable
                    let themePreference = document.cookie.split(';').filter((item) => item.trim()
                        .startsWith(
                            'color-theme='))
                    themePreference = themePreference.length ? themePreference[0].split('=')[1] : preference

                    //saves theme in cookie
                    document.cookie = themePreference === 'dark' ? "color-theme=light;path=/" : "color-theme=dark;path=/";
                    //reloads page after changing theme
                    window.location.reload();

                    window.__setPreferredTheme('dark');
                });
            }
        });
    </script>

    @stack('modals')

    @livewireScripts
</body>

</html>
