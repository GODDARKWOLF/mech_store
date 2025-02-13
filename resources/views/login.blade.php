<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Merch-Store</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
     body {
    font-family: 'Figtree', ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    line-height: 1.5;
    background: linear-gradient(135deg, #003366 0%, #40E0D0 100%); /* Deep Ocean Blue to Turquoise Blue */
    color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    padding: 0 1rem;
}


        .container {
    max-width: 500px;
    margin: 0 auto;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    position: relative;
    background: linear-gradient(to bottom, rgba(135, 206, 250, 0.5) 0%, rgba(255, 105, 180, 0.5) 100%);
}


        .form-control {
            margin-bottom: 1rem;
            padding: 0.95rem;
            border: 1px solid #E5E7EB; /* Example border color */
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        .btn {
            background-color: #FF2D20; /* Example button background color */
            color: #FFFFFF; /* Example button text color */
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-bottom: 1rem; /* Add margin to separate buttons */
        }

        .btn:hover {
            background-color: #FF1E00; /* Example hover color */
        }

        .btn:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5); /* Example focus outline */
        }

        .signup-btn {
            background-color: #4CAF50; /* Sign Up button background color */
            color: #FFFFFF; /* Sign Up button text color */
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .signup-btn:hover {
            background-color: #45A049; /* Sign Up button hover color */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Login Please</h2>
        <form id="login-form" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
            </div>

            <button type="submit" class="btn">
                Sign In
            </button>
        </form>

        <a href="{{route('signup')}}"><button class="signup-btn">Sign Up</button></a>

        <div id="response-message" style="margin-top: 1rem;"></div>
    </div>

    <script>
        document.getElementById('login-form').addEventListener('submit', async function(event) {
            event.preventDefault(); // Prevent the default form submission

            const form = event.target;
            const formData = new FormData(form);
            const responseMessage = document.getElementById('response-message');

            try {
                const response = await fetch('/login-user', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: formData
                });

                const result = await response.json();

                if (response.ok) {
                    responseMessage.style.color = 'green';
                    responseMessage.textContent = result.message;
                    window.location.href = '/landing';
                } else {
                    responseMessage.style.color = 'red';
                    responseMessage.textContent = result.message || 'Login failed.';
                    if (result.errors) {
                        responseMessage.textContent += ' ' + JSON.stringify(result.errors);
                    }
                }
            } catch (error) {
                responseMessage.style.color = 'red';
                responseMessage.textContent = 'An error occurred. Please try again. ' + error.message;
            }
        });
    </script>
</body>
</html>
