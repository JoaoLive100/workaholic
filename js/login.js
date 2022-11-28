function login() {

    alert("teste");

    var email = $("#email").val();
    var senha = $("#password").val();

    $.post("./model/model_login.php", {
        email : email,
        senha : senha
    },
    function(dados) {
        /*if(dados == 0) {
            $('#loginErrorLogin').css('visibility','visible');
            $('#inputEmailLogin').keyup(function (){
            $('#loginErrorLogin').css('visibility','hidden');
            });
            $('#inputPasswordLogin').keyup(function (){
            $('#loginErrorLogin').css('visibility','hidden');
            });
        }
        else {
            window.history.back();
        }*/
        console.log(dados);
    });
}