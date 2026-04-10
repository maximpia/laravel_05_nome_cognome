<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grazie per averci contattato!</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        .header h1 {
            color: #007BFF;
        }
        .content {
            padding: 20px 0;
        }
        .content p {
            margin-bottom: 15px;
        }
        .footer {
            text-align: center;
            padding: 10px 0;
            border-top: 1px solid #eee;
            font-size: 12px;
            color: #777;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Grazie per averci contattato, {{ $name }}!</h1>
        </div>
        <div class="content">
            <p>Gentile {{ $name }},</p>
            <p>abbiamo ricevuto la tua richiesta e ti risponderemo il prima possibile.</p>
            <p>Ecco un riassunto delle informazioni che ci hai inviato:</p>
            <ul>
                <li><strong>Nome:</strong> {{ $name }}</li>
                <li><strong>Email:</strong> {{ $email }}</li>
                <li><strong>Messaggio:</strong> {{ $usermessage  }}</li>
                <li><strong>Tel:</strong> {{ $tel  }}</li>
            </ul>
            <p>Se hai bisogno di ulteriori informazioni, non esitare a visitare il nostro sito:</p>
            <p><a href="https://tuosito.it" class="button">Visita il nostro sito</a></p>






        </div>
        <div class="footer">
            <p>&copy; {{ date('2025') }} Maxi Ngolo. Tutti i diritti riservati.</p>
        </div>
    </div>
</body>
</html>