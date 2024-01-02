<?php
session_start();
include_once 'Connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Halaman Dashboard</title>
    <style>
        body {
            background: url(ogo2.jpg);
            background-position: auto;
            font-family: 'Roboto', sans-serif;
            color: #333; /* Warna teks */
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            margin: 50px auto;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            background-color: #2196F3; /* Warna biru */
            color: #fff;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .navbar-brand img {
            border-radius: 50%;
        }

        .blockquote {
            font-size: 1.5rem;
            color: #2196F3; /* Warna biru */
        }

        h1 {
            color: #2196F3; /* Warna biru */
        }

        h6 {
            color: #757575; /* Warna abu-abu */
        }

        .btn-primary {
            background-color: #2196F3; /* Warna biru */
            border-color: #2196F3; /* Warna border biru */
            width: 50%;
            margin-top: 10px;
            padding: 15px;
            border-radius: 55px;
            cursor: pointer;
            color: #fff;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #1565C0; /* Warna biru tua hover */
            border-color: #1565C0; /* Warna border biru tua hover */
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="ogo.jpg" width="50" class="rounded float-start" alt=""></a>
            </div>
        </nav>
        <div class="container text-center">
            <figure class="mt-4">
                <blockquote class="blockquote">
                    <p>Thecno</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    <cite title="Source Title">Data Pembeli</cite>
                </figcaption>
            </figure>
            <h1>Selamat Datang</h1>
            <h6>Thecno</h6>

            <a href="login.php">
                <button type="button" class="btn btn-primary">
                    <p> MASUK</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill m-2" viewBox="0 0 16 16">
                        <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.6
                </button>
            </a>
        </div>
    </div>
</body>

</html>
