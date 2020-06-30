function post(){
    var test = 1;
    //document.write(test);
    $.post('app/connector.php',{Test:test},
    function(data){
        $('#result').html(data);

    });
}