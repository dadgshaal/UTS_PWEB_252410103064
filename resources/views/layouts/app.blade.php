<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'MyLife') - MyLife</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            background: #f5f6fc;
            color: #252b42;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* NAVBAR */
        nav {
            background: #fff;
            padding: 18px 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 18px;
            box-shadow: 0 3px 15px rgba(0,0,0,.05);
        }

        .brand {
            color: #5546c8;
            font-size: 25px;
            font-weight: 800;
            letter-spacing: -.5px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
        }

        nav a {
            text-decoration: none;
            color: #697086;
            padding: 10px 13px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            transition: .2s;
        }

        nav a:hover,
        nav a.active {
            color: #5546c8;
            background: #f0eeff;
        }

        .logout-form {
            display: inline;
        }

        .logout-button {
            background: #fff0f2;
            color: #d94359;
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            font-weight: 700;
            cursor: pointer;
        }

        .logout-button:hover {
            background: #ffe0e5;
        }

        /* MAIN */
        main {
            width: 86%;
            max-width: 1150px;
            margin: 38px auto;
            flex: 1;
        }

        .page-header {
            margin-bottom: 28px;
        }

        .page-header h1 {
            font-size: 30px;
            margin-bottom: 8px;
            color: #252b42;
        }

        .page-header p {
            color: #858ba0;
            line-height: 1.7;
        }

        .eyebrow {
            color: #5546c8;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 8px;
        }

        /* CARD */
        .card {
            background: #fff;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(38, 42, 75, .04);
            border: 1px solid #eef0f7;
        }

        .card h2 {
            font-size: 19px;
            margin-bottom: 12px;
        }

        .card p {
            color: #777f95;
            line-height: 1.7;
        }

        .welcome-card {
            background: linear-gradient(120deg, #5546c8, #8878ed);
            color: #fff;
            padding: 35px;
            border-radius: 18px;
            margin-bottom: 25px;
            box-shadow: 0 10px 25px rgba(85,70,200,.15);
        }

        .welcome-card h1 {
            font-size: 29px;
            margin-bottom: 10px;
        }

        .welcome-card p {
            color: #eeeaff;
            line-height: 1.7;
        }

        .welcome-label {
            display: inline-block;
            background: rgba(255,255,255,.18);
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 12px;
            margin-bottom: 16px;
        }

        /* GRID */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-top: 20px;
        }

        .quick-card {
            text-decoration: none;
            color: inherit;
            transition: .2s;
        }

        .quick-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(38,42,75,.08);
        }

        .quick-icon {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f0eeff;
            color: #5546c8;
            border-radius: 12px;
            font-size: 21px;
            margin-bottom: 18px;
        }

        .quick-card h2 {
            font-size: 17px;
            margin-bottom: 8px;
        }

        .quick-card p {
            font-size: 13px;
        }

        /* BUTTON */
        .btn {
            display: inline-block;
            border: none;
            background: #5546c8;
            color: #fff;
            padding: 11px 18px;
            border-radius: 8px;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
            font-weight: 700;
            transition: .2s;
        }

        .btn:hover {
            background: #4033a5;
        }

        .btn-light {
            background: #f0eeff;
            color: #5546c8;
        }

        .btn-light:hover {
            background: #e4e0ff;
        }

        .btn-danger {
            background: #fff0f2;
            color: #d94359;
        }

        .btn-danger:hover {
            background: #ffe0e5;
        }

        /* FORM */
        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 700;
            color: #444b62;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #dce0eb;
            border-radius: 8px;
            outline: none;
            background: #fff;
            color: #252b42;
            font-size: 14px;
        }

        input:focus, select:focus {
            border-color: #5546c8;
            box-shadow: 0 0 0 3px rgba(85,70,200,.1);
        }

        .form-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .error-text {
            color: #d94359;
            font-size: 12px;
            margin-top: 6px;
        }

        /* TABLE */
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 600px;
            border-collapse: collapse;
            background: #fff;
        }

        th {
            background: #f5f4ff;
            color: #5546c8;
            text-align: left;
            font-size: 13px;
            font-weight: 800;
        }

        th, td {
            padding: 16px;
            border-bottom: 1px solid #edf0f5;
            font-size: 14px;
        }

        td {
            color: #555d73;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .category {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 20px;
            background: #f0eeff;
            color: #5546c8;
            font-size: 12px;
            font-weight: 700;
        }

        .table-actions {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .table-actions form {
            display: inline;
        }

        .empty-state {
            text-align: center;
            padding: 35px 15px;
            color: #858ba0;
        }

        /* PROFILE */
        .profile-avatar {
            width: 75px;
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f0eeff;
            color: #5546c8;
            font-size: 30px;
            font-weight: 800;
            border-radius: 50%;
            margin-bottom: 18px;
        }

        .profile-row {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            padding: 16px 0;
            border-bottom: 1px solid #edf0f5;
        }

        .profile-row:last-child {
            border-bottom: none;
        }

        .profile-label {
            color: #858ba0;
            font-size: 14px;
        }

        .profile-value {
            color: #252b42;
            font-weight: 700;
            font-size: 14px;
            text-align: right;
        }

        /* ALERT */
        .alert {
            padding: 13px 16px;
            border-radius: 9px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .alert-success {
            background: #eaf8f0;
            color: #237b4b;
        }

        .alert-error {
            background: #fff0f2;
            color: #c92f48;
        }

        hr {
            border: none;
            border-top: 1px solid #edf0f5;
            margin: 25px 0;
        }

        /* FOOTER */
        footer {
            background: #fff;
            text-align: center;
            padding: 22px;
            color: #858ba0;
            font-size: 13px;
            margin-top: auto;
        }

        @media (max-width: 760px) {
            nav {
                padding: 16px 5%;
                align-items: flex-start;
                flex-direction: column;
            }

            .nav-menu {
                width: 100%;
            }

            main {
                width: 92%;
                margin: 25px auto;
            }

            .card-grid {
                grid-template-columns: 1fr;
            }

            .welcome-card {
                padding: 25px;
            }

            .welcome-card h1 {
                font-size: 24px;
            }

            .page-header h1 {
                font-size: 25px;
            }

            .card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    @include('components.navbar')

    <main>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <x-footer />

</body>
</html>
