$(function() {

    $('#preloading').delay(1000).addClass("animated zoomOut");

    $('input#siren').mask('000 000 000');
    $('input#phone').mask('00 00 00 00 00');


    var regex = /.{2,}/;
    var regexSiren = /^(RCS )?([0-9]{3} ){2}[0-9]{3}$|^([0-9]{3} ){3}[0-9]{4}$/;
    var regexPhone = /^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/;
    var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


    function isFormValid() {
        return ($('.invalid').length == 0 &&
            $('#lastname').val().match(regex) &&
            $('#firstname').val().match(regex) &&
            $('#compagny').val().match(regex) &&
            $('#fonction').val().match(regex) &&
            $('#email').val().match(regexEmail) &&
            $('#phone').val().match(regexPhone) &&
            $('#siren').val().match(regexSiren));
    }


    $('form button[type="button"]').click(function() {
        if (isFormValid()) {
            $('.tabs .tab:eq(1)').removeClass('disabled');
            $('ul.tabs').tabs('select_tab', 'two');
        }
    });

    $('input.autocomplete').autocomplete({
        limit: 52,
        data: {
            "Macrosoft": null,
            "Macintosh": null,
            "Macbook": null,
            "Marshall": null,
            "Matuidi": null
        },
        onAutocomplete: function(item) {
            $.get("accord/" + item.toLowerCase(), function(data) {
                $("div#list").html(data);
            });

            $('input.autocomplete').parents(".animated").find('i').text('done').addClass('teal-text');


            if (isFormValid()) {
                $('form #one button').attr('disabled', false);
            }
        }
    });



    $('input.autocomplete').keyup(function(e) {
        if (e.which != 13) {
            $('form #one button').attr('disabled', true);
        }
    });

    $('input:not(".autocomplete")').on('keyup blur', function() {
        if (!isFormValid() && $('input.autocomplete').val() == "") {
            $('form #one button').attr('disabled', true);
        } else if ($('input.autocomplete').val() == "") {
            $('form #one button').attr('disabled', true);
        } else if (!isFormValid()) {
            $('form #one button').attr('disabled', true);
        } else {
            $('form #one button').attr('disabled', false);
        }
    });


    //email exist
    $('input[type="email"]').blur(function(e) {

        if ($('#email').val().match(regexEmail)) {

            $.get("already", { email: $(this).val() }, function(data) {
                if (data == 1) {
                    $('input[type="email"]').addClass('invalid');
                    $('#email').parents(".animated").find('i').text('warning').removeClass('teal-text').addClass('red-text');
                } else {
                    $('input[type="email"]').addClass('valid');
                    $('#email').parents(".animated").find('i').text('done').addClass('teal-text');
                }
            });

        } else {
            $('#email').parents(".animated").find('i').text('warning').removeClass('teal-text').addClass('red-text');
        }

    });

    $('div#two').on('change', ':checkbox.already', function() {
        if ($(this).is(":checked")) {
            $(this).parents('div.feature').find('p.marque').addClass('blue-text');
        } else {
            $(this).parents('div.feature').find('p.marque').removeClass('blue-text');
        }
    });

    $('div#two').on('change', ':checkbox.discover', function() {
        if ($(this).is(":checked")) {
            $(this).parents('div.feature').find('p.marque').addClass('teal-text');
        } else {
            $(this).parents('div.feature').find('p.marque').removeClass('teal-text');
        }
    });


    var nb = 0;
    $('.naviguations button#plus').click(function() {
        nb++;
        if (nb <= 5) {
            if (nb == 5) {
                $(this).addClass('light-blue');
                $(this).html('<i class="material-icons">check</i> Terminer');
            } else {
                $(this).removeClass('light-blue');
                $(this).html('<i class="material-icons">keyboard_arrow_right</i> Suivant');

                $('.naviguations button#moins').attr('disabled', false);
                $('#list section').addClass('hide')
                $('#list section:eq(' + nb + ')').removeClass('hide');
            }
        } else {
            $(this).attr('disabled', true);
            $('.tabs .tab').addClass('disabled');
            $('.tabs .tab:eq(2)').removeClass('disabled');
            $('ul.tabs').tabs('select_tab', 'three');

            $.ajax({
                url: 'register',
                method: "POST",
                data: $('form').serialize()
            });

        }
    });
    $('.naviguations button#moins').click(function() {
        nb--;
        if (nb >= 0) {
            $('.naviguations button#plus').attr('disabled', false);
            $('#list section').addClass('hide');
            $('#list section:eq(' + nb + ')').removeClass('hide');
        } else {
            $(this).attr('disabled', true);
        }
    });

});