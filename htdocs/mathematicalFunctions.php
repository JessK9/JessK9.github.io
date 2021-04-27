<!DOCTYPE html>
<html>
    <head>
        <title>Introduction to PHP</title>
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
        <li><a href="startPHPproject.php">Starting a PHP project</a><li>
        <li><a href="syntaxAndComments.php">Syntax and Comments</a><li>
        <li><a href="variables.php">Variables</a><li>
        <li><a href="scope.php">Scope</a><li>
        <li><a href="dataTypes.php">Data Types</a><li>
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
        <h1>Mathematical Functions </h1>
        <p>In the previous chapter, data types, the boolean var_dump(is_int)) was used to see if the variable was
         an integer or not. As well as seeing the type of data, it is possible to do mathematical equations and functions
          on data that exists. There are other types of mathematical functions, see php.net for the entire list of 
        possible functions but some are highlighted below</p>
        <h2>rand</h2>
        <p>'rand' generates a random integer, the minimum number and maximum number can be specified so a random number 
            will be generated between the min and max numbers. The following code will produce a number between 2 and 7, that includes 
        both 2 and 7 in the range. If it is not specified and the brackets are left empty then a random number will be generated between 
    0 and the largest possible number (this is getrandmax())</p>
   <div class="codeEditorDiv">
                <textarea class="textarea" name="editor" id="editor"></textarea>
                <button class="button" id="run">Run</button>
                <div id="result"></div>
            
    <h2>sqrt</h2>
    <p>Another mathematical function is 'sqrt' which returns the square root of a number within the brackets. In the example below the 
        square root of 6 is calculated.</p>
        
        <div class="codeEditorDiv">
                <textarea class="textarea" name="editor1" id="editor1"></textarea>
                <button class="button" id="run1">Run</button>
                <div id="result1"></div>
            
    <h2>intdiv</h2>
    <p>This function takes two numbers and divides them togehter, it takes two integer numbers and the result generated is also a integer.
         If the second number given is larger than the first then 0 is returned because the two numbers are not divisible.
    </p>
            
        <div class="codeEditorDiv">
                <textarea class="textarea" name="editor2" id="editor2"></textarea>
                <button class="button" id="run2">Run</button>
                <div id="result2"></div>
</div>
</div>
    
        <!--<form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
          
  </div>
      
            <script type="text/javascript" >
           
            $(document).ready(function() {
                var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
                mode: "application/x-httpd-php",
                theme: "dracula",
                lineNumbers: true });
                editor.setSize(700,200);

                editor.setValue('<?php\necho rand(2,7);\n?>');

                $(document).on('click','#run', function()
                {
                    var editorCode = editor.getValue();
                    if(editorCode!= '') 
                    {
                        var editorCode = editor.getValue();
                        $.ajax({
                            type: "POST", 
                            url: 'writeCode.php',
                            data: {"input":editorCode},
                            success:function(response) {},
                            complete:function() {
                                $.ajax({
                                    url: 'readCode.php',
                                    type: "GET",
                                    success:function(response) {
                                        $('#result').html(response);
                                    }
                                })
                            }
                            })
                        
                    }
                });

            });

            $(document).ready(function() {
                var editor = CodeMirror.fromTextArea(document.getElementById('editor1'), {
                mode: "application/x-httpd-php",
                theme: "dracula",
                lineNumbers: true });
                editor.setSize(700,200);

                editor.setValue('<?php\necho sqrt(6);\n?>');

                $(document).on('click','#run1', function()
                {
                    var editorCode = editor.getValue();
                    if(editorCode!= '') 
                    {
                        var editorCode = editor.getValue();
                        $.ajax({
                            type: "POST", 
                            url: 'writeCode.php',
                            data: {"input":editorCode},
                            success:function(response) {},
                            complete:function() {
                                $.ajax({
                                    url: 'readCode.php',
                                    type: "GET",
                                    success:function(response) {
                                        $('#result1').html(response);
                                    }
                                })
                            }
                            })
                        
                    }
                });

            });
            $(document).ready(function() {
                var editor = CodeMirror.fromTextArea(document.getElementById('editor2'), {
                mode: "application/x-httpd-php",
                theme: "dracula",
                lineNumbers: true });
                editor.setSize(700,200);

                editor.setValue('<?php\necho intdiv(8,4);\n?>');

                $(document).on('click','#run2', function()
                {
                    var editorCode = editor.getValue();
                    if(editorCode!= '') 
                    {
                        var editorCode = editor.getValue();
                        $.ajax({
                            type: "POST", 
                            url: 'writeCode.php',
                            data: {"input":editorCode},
                            success:function(response) {},
                            complete:function() {
                                $.ajax({
                                    url: 'readCode.php',
                                    type: "GET",
                                    success:function(response) {
                                        $('#result2').html(response);
                                    }
                                })
                            }
                            })
                        
                    }
                });

            });

           
          
        </script>
    
           
       
        <!--<form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
    
    </div>
    
        </form>
    </body>

</html>