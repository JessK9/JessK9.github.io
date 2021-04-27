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
        <h2>Conditional statements</h2>
        <p>Conditional statements are used when you want to change the value of a variable and have different actions for different conditions. Here, 'if' statements are used 
            that tell the compiler to run a piece of code if the result of the statement is true. If it is not true, then the nested code is skipped and it is possible to have 
            if statements followed by many other if statements although commonly after an if statement is an 'else if' statement. This second else if statement is run if the first if 
            statement is not true and it can either have an expression but it does not need an expression to work.
        </p>
        <div class="codeEditorDiv">
                <textarea class="textarea" name="editor1" id="editor1"></textarea>
                <button class="button" id="run1">Run</button>
                <div id="result1"></div>
            
        <h2>Switch statements</h2>
        <p>A switch statement is used to control the value of a variable and allows it to be changed during program execution 
            depending on pre-defined cases. It works similar to conditional statements however rather than evaluating the conditions required 
            for an if-else chain, the switch immediately jumps to the case. Switch statements can also be used for more than two alternatives, whilst if-else are 
            normally only used for two and it takes much longer for execution if multiple if-else statements are used compared to switch statements.
        </p>
        <div class="codeEditorDiv">
                <textarea class="textarea" name="editor" id="editor"></textarea>
                <button class="button" id="run">Run</button>
                <div id="result"></div>
       
            
</div>

    
        <!--<form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
           
            
  </div>
      
            <script type="text/javascript" >
            var hi = 6;
            $(document).ready(function() {
                var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
                mode: "php",
                theme: "dracula",
                lineNumbers: true });
                editor.setSize(700,200);
                
                editor.setValue("<?php\n$i = 1;\nswitch($i) {\n case 0: $i == 6;\n break;\n case 1: $i == 2;\n break;\n}\n echo $i;\n?>");

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
                
                editor.setValue("<?php\n?>");

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