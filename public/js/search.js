$(document).ready(function() {
    $("#search-input").on('keyup', function() {
        var value = $(this).val().toLowerCase();

        $('.cards').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    $('#option').change(function(){
        $('.cards').hide();
        $('.' + $(this).val()).show();

        if($(this).val() === 'Сите'){
            $('.cards').show();
        }
    })

});