$(document).ready(function (){
    let templates = []
    $.ajax({
        url: 'vendor/index.php',
        method: 'GET',
        dataType: 'json',
        cache: false,
        data: {
          'query': 'getTempTitles'
        },
        success(data) {
            data.map((item) => {
                $("#templatesSelect").append("<option value='" + item.id + "'>" + item.title + "</option>")
            })
        }
    })
})

$('#templateLoadBtn').click((e)=>{
    let templateId = $('#templatesSelect').val()
        $.ajax({
            url: 'vendor/index.php',
            method: 'GET',
            dataType: 'json',
            cache: false,
            data: {
                'query': 'getTempContent',
                'params': templateId
            },
            success (data){
                $('#templateContent').val(data.content)
            }
        })
})

$('#logoutBtn').click(function (e){
    e.preventDefault()
    $.ajax({
        url: 'vendor/index.php',
        method: 'POST',
        dataType: 'json',
        cache: false,
        data: {
            'userAction': 'logout'
        },
        success(data) {
            if (data.status){
                location.href = data.url
            }
        }
    })
})