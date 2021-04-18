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
        <h1>PHP data types </h1>
        <p>Like all programming languages there are many forms of data that PHP supports </p>
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
        <h2>Starting a PHP project </h2>
            
            
</div>

    
        <!--<form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
            <div class="codeEditorDiv">
                <textarea class="textarea" name="editor" id="editor"></textarea>
                <button class="button" id="run">Run</button>
                <div id="result"></div>
            </div>
  </div>
      
            <script type="text/javascript" >
           
            $(document).ready(function() {
                var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
                mode: "application/x-httpd-php",
                theme: "dracula",
                lineNumbers: true });
                editor.setSize(700,200);

                editor.setValue('');

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
    
           
       
        <!--<form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
    
    </div>
    
        </form>
    </body>

</html>