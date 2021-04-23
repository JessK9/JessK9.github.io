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
        <li><a href="test1.php">Assessment 1</a></li>
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
        <h2>Assessment 1 </h2>
        <p>If you have completed the first three introductory chapters then have a go at this assessment! 
        To test your knowledge, read and answer the questions below.
        </p>
        <h3> Question 1: PHP </h3>
        <p>Within the PHP tags, write a program that will output a word or sentence into the result area</p>
            
        </div> <!--float-child -->

            <div class="codeEditorDiv">
                <textarea class="textarea" name="editor" id="editor"></textarea>
                <button class="button" id="run">Run</button>
                <div id="result"></div>
            
            <div class="float-child">
            <h3>Question 2: HTML </h3>
            <p>Make the output 'I'm a programmer' a smaller size </p>
            </div> <!--float child -->

            <textarea class="textarea" name="editor1" id="editor1"></textarea>
            <button class="button" id="run1">Run</button>
                <div id="result1"></div>
                
                <div class="float-child">
                <h3>Question 3: HTML/PHP </h3>
                <p> Below is a piece of code however it does not run - can you find and fix the error? </p>
                </div> <!--float child -->
                <textarea class="textarea" name="editor2" id="editor2"></textarea>
                <button class="button" id="run2">Run</button>
                <div id="result2"></div>
                
            </div><!-- codeEditorDiv-->
            </div> <!-- float container-->
            
  </div>

  


      
            <script type="text/javascript" >
           // Question 1
            $(document).ready(function() {
                var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
                mode: "application/x-httpd-php",
                theme: "dracula",
                lineNumbers: true });
                editor.setSize(700,200);

                editor.setValue('<?php\n\n?>');

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
            // Question 2
            $(document).ready(function() {
                var editor = CodeMirror.fromTextArea(document.getElementById('editor1'), {
                mode: "application/x-httpd-php",
                theme: "dracula",
                lineNumbers: true });
                editor.setSize(700,200);

                editor.setValue("<html>\n <body>\n <h1> I'm a programmer </h1> \n </body>\n</html>");

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
            //Question 3
            $(document).ready(function() {
                var editor = CodeMirror.fromTextArea(document.getElementById('editor2'), {
                mode: "application/x-httpd-php",
                theme: "dracula",
                lineNumbers: true });
                editor.setSize(700,200);

                editor.setValue('<?php\n\n?>');
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
        
    
    
        
    </body>

</html>