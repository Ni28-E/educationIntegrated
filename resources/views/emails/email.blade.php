<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
    </head>
    <body>
        <h1>{{ $mailData['title'] }}</h1>

        <p>This Email was sent by:{{ $mailData['sender'] }}</p>

        <p>{{ $mailData['body'] }}</p>

        <p>This Email was sent from the website</p>

        <p>Regards.</p>
    </body>
</html>

