// create a new user by triggering event
$('#btn_save').click(function(e){
    e.preventDefault();

    let name     = $('#name').val();
    let email    = $('#email').val();
    let password = $('#password').val();
    let balance  = $('#balance').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "POST",
        url: URL.save,
        data: {
            name:     name,
            email:    email,
            password: password,
            balance:  balance
        },
        dataType: "json",
        success: function (data) {
            alert('User successfully created.');
        },
        error: function(data, status, error) {
            let response = JSON.parse(data.responseText);

            alert(response.errors)
        }
    });
});