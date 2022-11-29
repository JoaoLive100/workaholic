function login() {

    var email = $("#email").val();
    var password = $("#password").val();

    $.ajax({
        url: "./model/model_login.php",
        type: "post",
        dataType: "json",
        data: {email: email, password: password},
        success: function(response) {
            if(response.retorno == true) {
                console.log(response.retorno);
            }
            else {
                console.log(response.retorno);
            }
        }
    })
}