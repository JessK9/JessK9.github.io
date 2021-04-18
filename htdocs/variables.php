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
        <h2>PHP variables </h2>
        <h3> What is a variable? </h3>
        <p>In programming a variable is used to store one or multiple values, they are useful when you want to store the result of a function, equation, calulation
        or more and then want to use that value in another part of the program. So far all of the code examples have just been compiling and displaying code however 
        there is much more you can do.
        </p>
        <p> In order to tell the compiler that you are creating a PHP variable, it must start with a $ sign and then the desired name of the variable. The variable name is 
        usually associated with the value it is holding, so in the example below $firstName holds the name Mary and $lastName holds the name Smith. When using echo to print the 
        result of variables instead of a string, there is no need for a '='.
        </p>

            
            
</div>

    
        <!--<form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
            <div class="codeEditorDiv">
                <textarea class="textarea" name="editor" id="editor"></textarea>
                <button class="button" id="run">Run</button>
                <div id="result"></div>
            </div>
  </div>
      
            <script type="text/javascript" >
            var hi = 6;
            $(document).ready(function() {
                var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
                mode: "php",
                theme: "dracula",
                lineNumbers: true });
                editor.setSize(700,200);
                
                editor.setValue("<?php\n$firstName = 'Mary';\n$lastName = 'Smith';\necho $firstName;\n?>");

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

           
          
        </script>
    
           
       
    
    </div>
    
        </form>
    </body>

</html>