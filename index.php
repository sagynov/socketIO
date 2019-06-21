<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2 class="ui center aligned icon header">
    <i class="circular users icon"></i>
    Chat
    </h2>
    <div class="ui container">
        <div style="height: 400px; overflow-y: scroll;" id="messages"></div>
        <br>
        <form id="form" action="">
            <div class="ui fluid action input">
                <input id="msg" type="text" placeholder="Message...">
                <button class="ui primary button"><i class="paper plane outline icon"></i></button>
            </div>
        </form>
        
        
    </div>    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>
    <script src="main.js"></script>
    
</body>
</html>