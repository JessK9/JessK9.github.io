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
       <h2>Loops </h2>
       <h3> While loops </h3>
       <p>In programming, loops are used to repeat a piece of code for a number of times until a desired outcome or process has been completed.
           There are two main types: while and for loops, while loops specify a condition and continue to run as long as the condition is met. In 
           the example below, two variables are stated, $i and $num. The loop means while $i is less than $num, continue running through the loop 
           and print the current value of $i. Line 7 is an incrementer so each time the while loop is run, $i is incremented by 1 and it continues to be 
           incremented whilst $i is less than $num.
       </p>
       <div class="codeEditorDiv">
                <textarea class="textarea" name="editor" id="editor"></textarea>
                <button class="button" id="run">Run</button>
                <div id="result"></div>
       <h3> For loops</h3>
       <p>For loops are similar to while loops, but instead of having a condition that needs to be, a start and end point is stated 
           as well as the incrementer. In the exmaple below it will run through the loop as long as $i is less than $num, and the result 
           will be exactly the same as the while loop above.</p>
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
                
                editor.setValue("<?php\n$i = 1;\n$num = 10;\nwhile($i < $num)\n{\necho $i;\n$i++; \n}\n?>");

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
                
                editor.setValue("<?php\n$num = 10;\nfor($i = 1;$i < $num; $i++) \n{\necho $i;\n}\n?>");

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