$('#loginBtn').click( function (e){
    e.preventDefault();

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val()

    $.ajax({
        url: 'vendor/signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password
        },
        success(data) {
            if (data.status){
                location.href = data.url
            }else if (data.status === false){
                alert(data.message)
            }

        }
    })
})
