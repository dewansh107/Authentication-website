<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .main {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        top: 50%;
        left: 50%;
    }

    .main {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .main h1 {
        margin-bottom: 20px;
    }

    .main button {
        margin: 10px;
    }

    .button {
        cursor: pointer;
        padding: 1em;
        font-size: 1em;
        width: 7em;
        aspect-ratio: 1/0.25;
        color: white;
        background: #212121;
        background-size: cover;
        background-blend-mode: overlay;
        border-radius: 0.5em;
        outline: 0.1em solid #353535;
        border: 0;
        box-shadow: 0 0 1em 1em rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
        position: relative;
    }

    .btn-body {
        display: flex;
        flex-direction: row;
        background: #7A3CE3;
    }
    </style>
</head>

<body>
    <div class="main">
        <h1>Welcome </h1>
        <div class="btn-body">
            <a href="{{ route('registration') }}"><button class="button">Register</button></a>
            <a href="{{ route('login') }}"><button class="button">Login</button></a>
        </div>
    </div>
</body>

</html>