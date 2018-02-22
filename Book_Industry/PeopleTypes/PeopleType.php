<?php
include '/var/www/html/AnkushDeora/Book_Industry/PeopleTypes/author.php';
 class TypesOfPeople
   {
        private $publisher;
        private $author;
        private $illustrator;
        private $editor;
    
        function __construct()
        {
            

            $this->author   = new author();
            $auth_details = $this->author->a_details($author1);
            $this->author =$auth_details;

            $this->publisher   = new publisher();
            $publ_details = $this->publisher->a_details($publisher1);
            $this->publisher =$publ_details;


            $this->illustrator   = new illustrator();
            $ill_details = $this->illustrator->a_details($illustrator1);
            $this->illustrator =$ill_details;


            $this->editor   = new editor();
            $edit_details = $this->editor->a_details($editor1);
            $this->editor =$edit_details;

        }   
    }

    $tpeople = new TypesOfPeople();

?>