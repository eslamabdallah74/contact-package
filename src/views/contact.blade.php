<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Cairo', sans-serif;

        }

        section {
            position: relative;
            width: 100%;
            height: 15vh;
            background: #28B2BC;
            overflow: hidden;
        }

        section .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url("https://i.im.ge/2022/09/18/12E05c.wave.png");
            background-size: 1000px 100px;
        }

        section .wave1 {
            animation: animate 30s linear infinite;
            z-index: 4;
            opacity: 1;
            animation-delay: 0s;
            bottom: 0;
        }

        section .wave2 {
            animation: animate2 15s linear infinite;
            z-index: 3;
            opacity: 0.5;
            animation-delay: -5s;
            bottom: 10px;
        }

        section .wave3 {
            animation: animate 15s linear infinite;
            z-index: 2;
            opacity: 0.2;
            animation-delay: -2s;
            bottom: 15px;
        }

        section .wave4 {
            animation: animate2 15s linear infinite;
            z-index: 1;
            opacity: 0.7;
            animation-delay: -5s;
            bottom: 20px;
        }

        @keyframes animate {
            0% {
                background-position-x: 0;
            }

            100% {
                background-position-x: 1000px;
            }
        }

        @keyframes animate2 {
            0% {
                background-position-x: 0;
            }

            100% {
                background-position-x: -1000px;
            }
        }

        /* Start */
        .container {
            margin: 0 auto;
            z-index: 6;
        }

        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
            text-align: center;
            z-index: 5;
        }

        button {
            cursor: pointer;
        }

        img {
            max-width: 100%;
            display: block;
        }

        input {
            appearance: none;
            border-radius: 0;
        }

        .card {
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            width: 80%;
            max-width: 425px;
            background-color: #FFF;
            border-radius: 10px;
            box-shadow: 0 10px 20px 0 rgba(#999, .25);
            padding: .75rem;
            border: 12px inset #28B2BC;
        }

        .card-image {
            border-radius: 8px;
            overflow: hidden;
            padding-bottom: 25%;
            background-image: url('https://i.im.ge/2022/09/18/12viFC.background-scaled.jpg');
            background-repeat: no-repeat;
            background-size: 150%;
            background-position: 0 5%;
            position: relative;
        }

        .card-heading {
            position: absolute;
            left: 10%;
            top: 15%;
            right: 10%;
            font-size: 1.75rem;
            font-weight: 700;
            color: white;
            line-height: 1.222;

            small {
                display: block;
                font-size: .75em;
                font-weight: 400;
                margin-top: .25em;
            }
        }

        .card-form {
            padding: 2rem 1rem 0;
        }

        .input {
            display: flex;
            flex-direction: column-reverse;
            position: relative;
            padding-top: 1.5rem;

            &+.input {
                margin-top: 1.5rem;
            }
        }

        .input textarea {
            border-top: 0;
            border-right: 0;
            border-left: 0;
            border-bottom: 1px solid gray;
            background-color: transparent;
            border-bottom: 2px solid #eee;
            font: inherit;
            font-size: 1.125rem;

        }

        .input-label {
            color: #8597a3;
            position: absolute;
            top: 1.5rem;
            transition: .25s ease;

        }

        .input-field {
            border: 0;
            z-index: 1;
            background-color: transparent;
            border-bottom: 2px solid #eee;
            font: inherit;
            font-size: 1.125rem;
            padding: .25rem 0;

            &:focus,
            &:valid {
                outline: 0;
                border-bottom-color: #6658d3;

                &+.input-label {
                    color: #6658d3;
                    transform: translateY(-1.5rem);
                }
            }
        }

        .action {
            margin-top: 2rem;
        }

        .action-button {
            font: inherit;
            font-size: 1.25rem;
            padding: 1em;
            width: 100%;
            font-weight: 500;
            background-color: #28B2BC;
            border-radius: 6px;
            color: #FFF;
            border: 0;

            &:focus {
                outline: 0;
            }
        }

        .card-info {
            padding: 1rem 1rem;
            text-align: center;
            font-size: .875rem;
            color: #8597a3;

            a {
                display: block;
                color: #6658d3;
                text-decoration: none;
            }
        }

        .success-message {
            color: #1c8a5e;
            text-align: center;
            font-size: 17px;
            margin: 1rem 0;
            font-weight: bold;
        }
        ul {
            list-style-type: none;
        }

        .alert-danger{
            color: rgb(179, 43, 43);
            text-align: center;
            font-size: 17px;
            font-weight: bold;
        }
    </style>

    <title>Contact Form</title>
</head>

<body>
    <section>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </section>
    {{-- Contecnt --}}
    <div class="container">
        <!-- code here -->
        <div class="card">
            <div class="card-image">
                <h2 class="card-heading">
                    <div>Let's Talk</div>
                    <small>Our door is always open.</small>
                </h2>
            </div>
            <form method="POST" action="{{ route('storeContact') }}" class="card-form">
                @csrf
                <div class="input">
                    <input type="text" name="name" class="input-field" placeholder="Type your name" required/>
                </div>
                <div class="input">
                    <input type="email" name="email" class="input-field" placeholder="Type your email"  required/>
                </div>
                <div class="input">
                    <textarea name="message" id="" cols="30" rows="4" placeholder="Type your message here" required></textarea>
                </div>
                <div class="action">
                    <button type="submit" class="action-button">Send Message</button>
                </div>
            </form>
            {{-- success return message --}}
            <div class="success-message">
                @if(session()->has('succsess'))
                <div class="m-4 alert alert-success">
                    <p>{{ session('succsess') }}</p>
                </div>
                @endif
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
    </div>
</body>

</html>
