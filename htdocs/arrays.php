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
        <h2>Arrays</h2>
        <p>Arrays are data structures that store one or multiple values. They are useful when you don't want to assign 50 seperate variables 
            and can instead assign an array with a length of 50 that will store all of the 50 values. Arrays can store numbers, strings and objects and they have 
            an index that each value is represented by. This index start at 0 rather than 1, so the first value in the array will have an index 
            of 0 and the next 1 and so on.
        </p>
        <p>There are different ways to create arrays, the first is seen below. Here $numbers is an array that has 3 values in and the first value, 5 is printed 
            as well as the 3rd value which is a string, and a new line between to split them up. Remember that the index starts at 0 rather than 1 here.
        </p>
        <div class="codeEditorDiv">
                <textarea class="textarea" name="editor" id="editor"></textarea>
                <button class="button" id="run">Run</button>
                <div id="result"></div>
        <p>Another way to create an array does not involve determinng the length of the array before hand</p>
        <div class="codeEditorDiv">
                <textarea class="textarea" name="editor1" id="editor1"></textarea>
                <button class="button" id="run1">Run</button>
                <div id="result1"></div>
            

            
            
</div>

    
        <!--<form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
           
            
  </div>
      
            <script type="text/javascript" >
            
            $(document).ready(function() {
                var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
                mode: "php",
                theme: "dracula",
                lineNumbers: true });
                editor.setSize(700,200);
                
                editor.setValue("<?php\n$numbers = array(5,7,'Hello World!');\necho $numbers[0]; \necho '<br>';\necho $numbers[2];\n?>");

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
                mode: "php",
                theme: "dracula",
                lineNumbers: true });
                editor.setSize(700,200);
                
                editor.setValue("<?php\n$letters[0] = 'first';\n$letters[1] = 'second';\necho $letters[1];\n?>");

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

           
          
        </script>
    
           
       
    
    </div>
    
        </form>
    </body>

</html>