<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor ADSO</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[var(--color--sena--black)] text-[var(--color--sena--white)] font-sans antialiased min-h-screen">

    <nav class="bg-[var(--color--sena--black)] border-b border-gray-800 px-6 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            
            <a href="{{ route('aprendices.index') }}" class="text-xl font-bold text-[var(--color--sena--white)] hover:text-[var(--color--sena--green)]">
                Gestor ADSO
            </a>

            <div class="space-x-4">
                <a href="{{ route('aprendices.index') }}" class="text-sm font-medium text-[var(--color--sena--white)] hover:text-[var(--color--sena--green)]">
                    Aprendices
                </a>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>

</body>

</html>