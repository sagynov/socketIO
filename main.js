// Послушаем порт 3000
var socket = io(':3000');
// Функция добавки
function appendMessage(data, position){
    $('#messages').append('<div style="margin-bottom: 20px; float: '+position+'">'
                                +'<div style="float: '+position+'" class="item">'
                                    +'<img class="ui avatar image" src="images/fal.png">'
                                +'</div>'
                                +'<p class="ui '+position+' pointing label">'+data.message+'</p>'
                            +'</div>'
    +'<div class="clearfix"></div>');
}
// Форма отправки сооющения
$('#form').on('submit', function(){
    var text = $('#msg').val();
    var msg = {message: text}
    socket.send(msg);
    $('#msg').val('');
    appendMessage(msg, 'right');
    return false;
});
// Принять сообщение
socket.on('message', function(data){
    appendMessage(data, 'left');
});
