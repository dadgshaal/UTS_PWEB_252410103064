
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - MyLife</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #5546c8, #8878ed);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 18px 45px rgba(30,20,90,.2);
        }

        .logo {
            color: #5546c8;
            font-size: 32px;
            font-weight: 800;
            text-align: center;
            margin-bottom: 25px;
        }

        h2 {
            color: #252b42;
            text-align: center;
            margin-bottom: 10px;
        }

        .description {
            color: #858ba0;
            text-align: center;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 28px;
        }

        .form-group {
            margin-bottom: 19px;
        }

        label {
            display: block;
            color: #444b62;
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 13px;
            border: 1px solid #dce0eb;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
        }

        input:focus {
            border-color: #5546c8;
            box-shadow: 0 0 0 3px rgba(85,70,200,.1);
        }

        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            background: #5546c8;
            color: white;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: .2s;
        }

        button:hover {
            background: #4033a5;
        }

        .error {
            background: #fff0f2;
            color: #c92f48;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 28px 22px;
            }
        }
    </style>
</head>

<body>

    <div class="login-card">

        <h1 class="logo">MyLife.</h1>

        <h2>Selamat Datang!</h2>

        <p class="description">
            Masuk ke akunmu dan mulai kelola aktivitas
            harian dengan lebih teratur.
        </p>

        {{-- Pesan kesalahan Login --}}
        @if (session('error'))
            <div class="error">
                {{ session('error') }}
            </div>
        @endif

        {{-- Pesan validasi --}}
        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        {{-- Form Login --}}
        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="username">Username</label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    value="{{ old('username') }}"
                    placeholder="Masukkan username"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >
            </div>

            <button type="submit">Login</button>

        </form>

    </div>

</body>
</html>
