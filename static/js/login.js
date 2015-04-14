$(document).ready(function(){
    $('#login_form').validate({
        onfocusout: function(element){
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
            }
        },
        highlight: function(label){
            $(label).closest('.control-group').addClass('error');
            $(label).closest('.control-label').removeClass('success');
        },
        success: function(label){
            $(label).closest('.control-group').addClass('success');
            $(label).closest('.control-group').removeClass('error');
        },
        submitHandler: function(){
        var data  = $('#login_form').serialize() ;
        $.ajax(login_submit_url , {
            data : data ,
            type : "POST" ,
            success : onSuccess ,
            error : onError 
        });
        return false ;
        }
    });
});

function onSuccess(data)
{
    data = JSON.parse(data) ;
    if(data.success)
    {
        alert('successful login') ;
        window.location.href = home_url;
    }
    else
    {
        alert('failed to login , check mail and password') ;
    }
}

function onError (data)
{
    alert("something went wrong ") ;
}