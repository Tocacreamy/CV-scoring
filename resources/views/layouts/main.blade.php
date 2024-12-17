<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    {{-- My Css --}}
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* Style tambahan agar tampak seperti kertas */
        .note-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            line-height: 1.8;
            font-family: 'Arial', sans-serif;
            position: relative;
        }

        /* Garis horizontal seperti di kertas */
        .note-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 1rem;
            height: 100%;
            width: 100%;
            background-image: repeating-linear-gradient(
                to bottom, 
                transparent 0px, 
                transparent 24px, 
                #e0e0e0 25px
            );
            z-index: -1;
        }

        /* Garis tepi kiri seperti margin kertas */
        .note-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0.75rem;
            height: 100%;
            width: 2px;
            background-color: #ff5f5f;
            z-index: 0;
        }

        .note-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
        }

        .note-item {
            margin-bottom: 1rem;
            position: relative;
        }
    </style>

</head>
<body>

  @include('partials.navbar')

  <main>
      @yield('content')
  </main>

  {{-- @include('partials.footer') --}}

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
</body>
</html>
