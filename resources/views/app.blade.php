<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - MyLife</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: #f4f6fb;
            color: #252b42;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        nav {
            background: #ffffff;
            padding: 18px 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.05);
        }

        nav h2 {
            color: #5546c8;
            font-size: 25px;
        }

        nav a {
            text-decoration: none;
            color: #555b70;
            margin: 0 10px;
            font-weight: 600;
            transition: 0.2s;
        }

        nav a:hover {
            color: #5546c8;
        }

        nav form {
            display: inline;
        }

        main {
            width: 86%;
            max-width: 1100px;
            margin: 40px auto;
            flex: 1;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 12px;
            color: #252b42;
        }

        h2 {
            margin-bottom: 18px;
        }

        p {
            line-height: 1.7;
            color: #697086;
            margin-bottom: 12px;
        }

        button, .btn {
            border: none;
            background: #5546c8;
            color: white;
            padding: 11px 18px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.2s;
        }

        button:hover, .btn:hover {
            background: #4033a5;
        }

        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #dce0eb;
            border-radius: 8px;
            margin-top: 7px;
            outline: none;
            font-size: 14px;
        }

        input:focus, select:focus {
            border-color: #5546c8;
            box-shadow: 0 0 0 3px rgba(85,70,200,0.1);
        }

        label {
            font-weight: 600;
            color: #444b62;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0,0,0,0.04);
        }

        th {
            background: #5546c8;
            color: white;
            text-align: left;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #edf0f5;
        }

        td a {
            color: #5546c8;
            text-decoration: none;
            font-weight: 600;
            margin-right: 8px;
        }

        td form {
            display: inline;
        }

        td button {
            background: #e94d63;
            padding: 8px 12px;
        }

        td button:hover {
            background: #c92f48;
        }

        hr {
            border: none;
            border-top: 1px solid #e5e8f0;
            margin: 25px 0;
        }

        footer {
            background: white;
            text-align: center;
            padding: 20px;
            margin-top: auto;
            color: #858ba0;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            nav {
                flex-direction: column;
                align-items: flex-start;
            }

            nav a {
                display: inline-block;
                margin: 8px 8px 8px 0;
            }

            main {
                width: 92%;
                margin: 25px auto;
            }

            h1 {
                font-size: 24px;
            }

            table {
                font-size: 12px;
            }

            th, td {
                padding: 9px;
            }
        }
    </style>
</head>

<body>

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
