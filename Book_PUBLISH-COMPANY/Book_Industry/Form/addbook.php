<!DOCTYPE html>
<html lang="en">
		<head>
		<meta charset="UTF-8">
		<title>Types Of Book</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	</head>
	<body>
		
		<center>
		<form >
		 Select Book Which You Want To Add <select id ="book_type">
           <option value="Hardcover">Hardcover</option>
           <option value="PaperBack">PaperBack</option>
           <option value="Digital">Digital</option>
           <option value="Audio"> Audio</option>
           </select>
        </center>
	    </form>	

		<div id = "display_form"></div>

		<script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      	</script>

    <script type="text/javascript" src= "book_type.js"></script>
	</body>
</html>