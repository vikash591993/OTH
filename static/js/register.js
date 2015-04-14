/*$.validator.addMethod("mobilenumber", function(mobile_number, element) {
    return this.optional(element) || mobile_number.match(/^[789][0-9]{9}$/);
}, "Please specify a valid phone number");
*/
$(document).ready(function() {
    /*$('#register_form').submit(function(){
     console.log("i m here");
     var data = $('#register_form').serialize() ;
     
     $.ajax(register_submit_url  , {
     data : data ,
     type : "POST" ,
     success : onSuccess_register ,
     error : onError 
     });
     return false ;
     });*/
    $('#register_form').validate({
        onfocusout: function(element) {
            this.element(element);
        },
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                minlength: 6,
                required: true
            },
            name: {
                minlength: 6,
                required: true
            },
            phone: {
                minlength:10,
                required: true
            },
            roll:{
                required: true
            }     
        },
        highlight: function(label) {
            $(label).closest('.control-group').addClass('error');
            $(label).closest('.control-group').removeClass('success');
        },
        success: function(label) {
            $(label).closest('.control-group').addClass('success');
            $(label).closest('.control-group').removeClass('error');
        },
        submitHandler: function() {
            var data = $('#register_form').serialize();
            var url = register_submit_url;
            //$('.loading_image').show();
            $.ajax(url, {
                data: data,
                success: onSuccess_register,
                error: onError_register,
                type: "POST"
            });
            return false;
        }
    });

});

function onSuccess_register(data)
{
    data = JSON.parse(data);
    if (data.success)
    {
        alert("successful registration ");
        window.location.href = login_url;
    }
    else
    {
        alert("registration failed ");
    }
}

function onError_register(data)
{
    alert("encountere error ");
}