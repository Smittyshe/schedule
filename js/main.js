
//datepicker settings
$(document).ready(function() {
$('.datepicker').pickadate({
    formatSubmit: 'yyyy/mm/dd',
    firstDay: 1,
    hiddenName: false,
    closeOnSelect: true,
    closeOnClear: true
})
});

//tinyMCE

tinymce.init({
    fontsize_formats: "9px 10px 11px 12px 13px 14px 15px 16px 17px 18px 19px 20px 21px 22px 23px 24px 25px 26px 27px 28px 29px 30px 31px 32px 36px 38px 40px",
    selector: "textarea#elm1",
    theme: "modern",
    height:"380",
    cleanup : true,


    plugins: [
        "advlist autolink link image lists charmap preview hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table contextmenu directionality emoticons template paste textcolor autosave"
    ],
    content_css: "css/content.css",
    toolbar: "fullscreen | insertfile undo redo | styleselect | fontselect fontsizeselect bold italic | alignleft aligncenter alignright alignjustify bullist numlist outdent indent | l      ink image | preview media fullpage | forecolor backcolor emoticons",
    style_formats: [
        {title: 'H1 title', inline: 'h1'},
        {title: 'H2 title', inline: 'h2'},
        {title: 'H3 title', inline: 'h3'},
        {title: 'H4 title', inline: 'h4'},
        {title: 'H5 title', inline: 'h5'}

    ]



});

//project name edit panel position handler
$(document).ready(function(){
    var $parent_width = $('.edit_panel').parent().width();
    var $box_width = $(".edit_panel").width();
    var $margin = ($parent_width - ($box_width+20)) / 2;
    $(".edit_panel").css("left", $margin+"px");
});

$(window).resize(function() {
    var $parent_width = $('.edit_panel').parent().width();
    var $box_width = $(".edit_panel").width();
    var $margin = ($parent_width - ($box_width+20)) / 2;
    $(".edit_panel").css("left", $margin+"px");

});

//show-hide project edit panel

$(document).ready(function() {
    $( ".name" ).click(function () {
        var $box = $(this).children(".edit_panel");
        if ( $box.is( ":visible" ) ) {
            $box.fadeOut(80);
        }
        else if ($box.is(":hidden") && $(".edit_panel").is(":visible"))
        {
            $(".edit_panel").fadeOut();
            $box.fadeIn(80);
        }
        else
        {
            $box.fadeIn(80);
        }
    });


});

//scroll button

$(document).ready(function() {
        var outer = $('.timeline-box');
        var target = $('#current');
        var y = target.parent().index();//the number of the day in the month
        var x = target.index();//the number of the month in the timeline
        var width = 0;
        $(".timeline-box .month:first").nextUntil($("#current").parent()).andSelf().each(function(index) {
            width += $(this).width();
        });
        var holder_width_inc = (outer.width()/2)+15;
        var scroll_width = (width + (x*30))-holder_width_inc;
        outer.scrollLeft(Math.max(0, scroll_width));
});

$(document).ready(function() {
    $( ".scroll-button").click(function () {
        var outer = $('.timeline-box');
        var target = $('#current');
        var y = target.parent().index();//the number of the day in the month
        var x = target.index();//the number of the month in the timeline
        var width = 0;
        $(".timeline-box .month:first").nextUntil($("#current").parent()).andSelf().each(function(index) {
            width += $(this).width();
        });
        var holder_width_inc = (outer.width()/2)+15;
        var scroll_width = (width + (x*30))-holder_width_inc;
        outer.scrollLeft(Math.max(0, scroll_width));
    });
});


//edit panel mouseup

$(document).mouseup(function (e)
{
    var container = $(".edit_panel");
    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        $(".edit_panel").fadeOut(80);
    }

    $('.edit_panel').click(function(mouseup){
        mouseup.stopPropagation();
    });

});





//============================

$(document).ready(function() {
$( ".p_name a" ).click(function () {
    var $box = $(this).siblings(".file_drop");
    if ( $box.is( ":visible" ) ) {
        $box.fadeOut(80);
    }
    else if ($box.is(":hidden") && $(".p_name .file_drop").is(":visible"))
    {
        $(".p_name .file_drop").fadeOut();
        $box.fadeIn(80);
    }
    else {
        $box.fadeIn(80);
    }
});
});

$(document).ready(function() {
    $( ".close" ).click(function () {$(this).parent().fadeOut(200);});
});

$(document).ready(function() {
    $(".btAdd").click(function () {
        var $box = $(".add-section");
        $box.fadeIn(200);
    });


});

$(document).ready(function() {
    $('.add-project form input[type=checkbox]').click(function()
    {
        if ($(this).hasClass('checked') || $(this).attr("checked")){$(this).removeClass('checked').removeAttr('class').removeAttr('checked');} else {$(this).addClass('checked');};
    });


    $(".reset").click(function() {
        $inputValues=0;
        $('.add-project input[type=text]').each(function() {

            if ($(this).val()!=="") {
                $inputValues++;
            }


        })
        if ($inputValues > 0
            || $(".add-project form").find("input[type=checkbox]").hasClass('checked')
            || $(".add-project form").find("textarea").val()
            || $(".add-project form").find("input[type=checkbox]").is(':checked'))
        {$("#confirmOverlay").fadeIn(200);}



        $("#confirmButtons .yes").click(function() {

        $(".add-project form").find("input[type=text], textarea").val("");
        $(".add-project form").find("input[type=checkbox]").removeAttr("checked").removeClass('checked');
        $("#confirmOverlay").fadeOut(200);

    });

     $("#confirmButtons .no").click(function() {
        $("#confirmOverlay").fadeOut(200);
    });

});
});


$(document).ready(function() {
    $(".remove").click(function()
    {
        $("#confirmOverlay2").fadeIn(200);
    });

    $("#confirmOverlay2 #confirmButtons .no").click(function()
    {
        $("#confirmOverlay2").fadeOut(200);
    });

});


$(document).ready(function() {
    $( ".close-project" ).click(function ()
    {
        $(".add-project form").find("input[type=checkbox]").removeAttr("checked").removeClass('checked');
        $(".add-project form").find("input[type=text], textarea").val("");
        $("#input_main_form_table tbody tr td .picker__day").removeClass("-disabled");
        $(".add-section").fadeOut(200);


    });
});

//Project edit button clicked
$(document).ready(function() {
    $(".edit").click(function ()
    {
        id = $(this).parent().parent().attr('id');
        location.href='http://localhost/schedule/index.php?id='+id+'&action=edit';
    });
});

//Project edit page close button
$(document).ready(function() {
    $(".redirect_back").click(function ()
    {
        id = $(this).parent().parent().attr('id');
        location.href='http://localhost/schedule/index.php';
    });
});



//Project delete button clicked
$(document).ready(function() {
    $(".delete_yes").click(function ()
    {
        id = $(this).parent().parent().attr('id');
        location.href='http://localhost/schedule/index.php?id='+id+'&action=delete';
    });
});




