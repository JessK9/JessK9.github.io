<?php
$comment = null;

// if submit pressed and its not empty
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['editor'])) {
    $comment = $_POST['editor'];
   
}
// need something for if it is empty
?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP Self-Tutor</title>
        <link rel="stylesheet" href="style.css">
        <script src="codemirror/lib/codemirror.js"></script>
        <link rel="stylesheet" href="codemirror/lib/codemirror.css"> 
        <script src="codemirror/mode/javascript/javascript.js"></script>
        <script src="codemirror/mode/xml/xml.js"></script>
        <script src="codemirror/mode/clike/clike.js"></script>
        <script src="codemirror/mode/php/php.js"></script>
        <link href="codemirror/theme/dracula.css" rel="stylesheet"/>
        <script src="codemirror/addon/edit/closetag.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
        <!--above, not hosting jQuery but using CDN, go through benefits of using this way -->
        
    </head>
    <body>
    <div class="header">
        <h1>PHP self-tutor </h1>
</div>
        
    <ul>
        <li><a href="form.php">Home Page</a></li>
        <li><a href="helloWorld.php">Hello World!</a><li>
        <li><a href="introductionToPHP.php">Introduction to PHP</a></li>
        <li><a href="introductionToHTML.php">Introduction to HTML</a></li>
        <li><a href="introductionToCSS.php">Introduction to CSS</a></li>
        <li><a href="test1.php">Assessment 1</a></li>
        <li><a href="">Syntax and Comments</a><li>
        <li><a href="">Variables</a><li>
        <li><a href="">Scope</a><li>
      
        <li><a href="">Data Types</a><li>
        <li><a href="">Mathematical functions</a><li>
        <li><a href="">Constants and operators</a><li>
        <li><a href="">Conditional and switch statements</a><li>
        <li><a href="">Loops</a><li>
        <li><a href="">Functions</a><li>
        <li><a href="">Arrays</a><li>
        <li><a href="">Classes</a><li>
        <li><a href="">Forms</a><li>
        <li><a href="">MySQL database</a><li>

    </ul>
<div class="float-container">
    <div class="float-child">
        <p>Welcome to PHP self-tutor!</p>
        <p>Use the navigation bar to the right to select a topic, if you are new to PHP and programming start at the very first chapter,
            'Introduction to PHP' and go from there, each chapter is designed to teach users with no programming 
            background with opportunities for users to consolidate their learning through code exercises.<p>
        
            </div>
</div>
    
        <!--<form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
           
</div>
      
            
    
           
       
    
    </div>
    
        </form>
    </body>

</html>