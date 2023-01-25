<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css'
        integrity='sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ=='
        crossorigin='anonymous' />

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css' integrity='sha512-HHsOC+h3najWR7OKiGZtfhFIEzg5VRIPde0kB0bG2QRidTQqf+sbfcxCTB16AcFB93xMjnBIKE29/MjdzXE+qw==' crossorigin='anonymous'/>
    <!-- Styles -->
    @vite('resources/js/app.js')

    <title>Artist CRUD</title>
</head>

<body>

    <header class="bg-dark shadow-sm">
        @include('partials.header')
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">

                    @auth
                    <div class="col-1 aside bg-dark py-5 p-2">
                        @include('partials.aside')
                    </div>
                    @endauth

                <div class="col-10">
                    @yield('content')
                </div>
            </div>

        </div>
    </main>

</body>

</html>
