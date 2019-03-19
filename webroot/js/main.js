$('document').ready(function(){
    $('#add_movie, #add_genre, #signin_button').click(function(){
        window.location.href = "add";
    });
    $('#signin').click(function(){
        window.location.href = "/w2php502p1/user/add";
    });
    $('#update_movie').click(function(){
        window.location.href = "update";
    });
    $( ".check" ).on( "click", function() {
        if($( ".check:checked" ))
        {
            $('.submit').prop('disabled', false);
        }
        else
        {
            $('.submit').prop('disabled', true);
        }  
    });
    $('.table tr').click(function (event) {
        if (event.target.type !== 'radio') {
            $(':radio', this).trigger('click');
        }
    });
    $("input[type='radio']").change(function (e) {
        e.stopPropagation();
        $('.table tr').removeClass("highlight");        
        if ($(this).is(":checked")) {
            $(this).closest('tr').addClass("highlight");
        }     
    });
    $('#logout_button').click(function(){
        var res = confirm('Etes-vous sûr de vouloir vous déconnecter?');
        if(res){
            window.location.href = "/w2php502p1/user/logout";
        }
    });
    $('#login_button').click(function(){
        window.location.href = "login";
    });
    $('#delete_button').click(function(){
        res = confirm('Etes-vous sûr de vouloir vous désinscrire?');
        if(res){
            window.location.href = "delete";
        }
    });
});