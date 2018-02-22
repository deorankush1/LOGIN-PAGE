$(function(){

    $("#people_type").change(function(){

        var people_type = $(this).val();
        console.log(people_type);

        switch(people_type)
        {
            case "Author" :
                    $("#display_form").load("http://local.test.in/AnkushDeora/Book_Industry/Form/f_author.php");
                    console.log(people_type);
                    break;
            case "Publisher" :
                    $("#display_form").load("http://local.test.in/AnkushDeora/Book_Industry/Form/f_publisher.php");
                    console.log("paperback");
                    break;
            case "Editor" :
                    $("#display_form").load("http://local.test.in/AnkushDeora/Book_Industry/Form/f_editor.php");
                    console.log("digital");
                    break;
            case "Illustrator" :
                    $("#display_form").load("http://local.test.in/AnkushDeora/Book_Industry/Form/f_illustrator.php");
                    console.log("audio");
                    break;
        }


    });
});