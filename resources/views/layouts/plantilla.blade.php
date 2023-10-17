<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@hasSection('title')@yield('title')@else Lliga de Fútbol Escolar Barcelona Sants @endif</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>

        body {
            background-image: url('{{ asset('images/end.jpg') }}');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            margin: 0; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
       }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(239, 243, 240, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .container-lg {
            max-width: 1500px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(239, 243, 240, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

            .article {
            margin-bottom: 20px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(255, 255, 255, 0.1);
        }

        .article img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .article-content {
            padding: 20px;
        }

        .article-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .article-excerpt {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
        }

        .article-link {
            display: block;
            text-align: right;
            margin-top: 10px;
            font-weight: bold;
            color: #007bff;
            text-decoration: none;
        }
        
        .button-container {
            text-align: center;
        }
        .btn {
            background-color: #27946c;
            color: white;
            font-weight: bold;
            padding: 0.5rem 1rem;
            border-bottom: 4px solid #226845;
            border-radius: 0.25rem;
            margin: 0.25rem;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn:hover {
            background-color: #306b4d;
            border-color: #123926;
        }
        .btn-danger {
            background-color: #FF0000; 
            border-bottom: 4px solid #411111;
            transition: background-color 0.3s ease;
        }
        .btn-danger:hover {
            background-color: #873737; 
            border-bottom: 4px solid rgb(50, 11, 11);
        }
        
        .team-list {
            list-style: none;
            padding: 0;
        }
        .team-list li {
            margin-bottom: 20px; 
            font-size: 24px;
        }
        .team-list li a {
            text-decoration: none;
            color: #333; 
        }
        .team-list li a:hover {
            text-decoration: underline;
        }
        .title {
            font-size: 1.875rem; 
            font-weight: bold;
            color: #047857; 
            margin-bottom: 1rem; 
         }
        .subtitle {
            font-size: 1.275rem; 
            font-weight: bold;
            color: #014b34; 
            margin-bottom: 1rem; 
         }
         table {
            margin-left: 5px; 
            margin-right: 5px; 
        }
         table td{
           padding:15px;
        } 
        .popup-overlay {
            display: none;
            position: fixed;
            top: 50%;
            left: 0;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        .popup-content {
            background-color: #f5adad;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
    </head>
    <body class="bg-gray-100 font-sans">

    @if (isset($useLongContainer) && $useLongContainer)
        @includeIf('includes.containerlong')
        <div class="container-lg">
             @yield('content')
        </div>
    @else
        <div class="container">
            @yield('content')
        </div>
    @endif


</body>
</html>
