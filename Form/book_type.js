$(function(){

    $("#book_type").change(function(){

        var booktype = $(this).val();

        switch(booktype)
        {
            case "Hardcover" :
                    $("#display_form").load("http://local.test.in/Book_Industry/Form/f_hardcover.php");
                    console.log("hardcover");
                    break;
            case "Paperback" :
                    $("#display_form").load("http://local.test.in/AnkushDeora/Book_Industry/Form/f_paperback.php");
                    console.log("paperback");
                    break;
            case "Digital" :
                    $("#display_form").load("http://local.test.in/AnkushDeora/Book_Industry/Form/f_digital.php");
                    console.log("digital");
                    break;
            case "Audio" :
                    $("#display_form").load("http://local.test.in/AnkushDeora/Book_Industry/Form/f_audio.php");
                    console.log("audio");
                    break;
        }

    });
});