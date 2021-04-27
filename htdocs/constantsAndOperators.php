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
        <h2>Constants</h2>
        <p>Constants are data values that stay the same, so if a variable is a constant then the data that the 
            variable 'holds' does not change. A literal constant is when something has been hard coded to produce a certain result, meanwhile 
            a variable can have it's value changed throughout execution. This can be seen when debugging a project by having breakpoints, 
            the value will change if a certain breakpoint has been hit.
        </p>
        <p>In the example below, height and width are fixed and when the code is run they do not change. However $area is not a fixed value, so if 
            you change the values of $height or $width, then area will also change.
        </p>
        <h2>Operators</h2>
        <p>An operator is something that tells the compiler do perform an act during runtime and there are different types of operators.</p>
        <h3>Arithmetic operators</h3>
        <p>These operators include adding, subtraction, multiplication, division and more advanced equations. In the example below the asterik indicates the two 
            values either side of it are being multiplied, and the result is stored in the variable $area<p>
        <p> + is used for adding <p>
        <p> - subtracts the value on the left from the value on the right of the sign</p>
        <p>/ divides the first value by the second value</p>
        <p> * is used for multiplication sums </p>
        <div class="codeEditorDiv">
                <textarea class="textarea" name="editor" id="editor"></textarea>
                <button class="button" id="run">Run</button>
                <div id="result"></div>


         <h3> Logical operators </h3>   
        <p>These operators are different to arithmetic operators because they deal with AND and OR logical operators. It is useful when a variable changes and a 
            specific result is required depending on the variable. There are three operators that are:
        </p>
        <p>&& this operator is the AND operator, so it is only called if the conditions for both operands are met. Instead of using '$$', it can be replaced with 'and'
             which act in the same exact way
        </p>
        <p>|| this is the OR operator, so unlike above where both conditions had to be true, here it is called if only one of the operands is true. It can also be replaced 
            with 'or' and the OR operator works the same way </p>

        <p>! this is the NOT operator, it is placed before the operand and it means that it is called if the operand or the result of 
            the operand is false.
        </p>

        <div class="codeEditorDiv">
                <textarea class="textarea" name="editor1" id="editor1"></textarea>
                <button class="button" id="run1">Run</button>
                <div id="result1"></div>

        <h3>Comparison operators </h3>
        <p>These operators are used to compare two values either side of the operator and are as follows:</p>
        <p>x > y    this is the greater than sign, so it returns true if x is greater than y</p>
        <p> x < y   this is the less than sign, so it returns true if x is less than y </p>
        <p> x = = y     this is the equal to sign, so it returns true if x is equal to or the same as y</p>
        <p> x != y      this is the not equal to sign, so it returns true if x is not equal to or the same as y </p>

        <div class="codeEditorDiv">
                <textarea class="textarea" name="editor2" id="editor2"></textarea>
                <button class="button" id="run2">Run</button>
                <div id="result2"></div>

</div>
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
                
                editor.setValue("<?php\n$height = 7;\n$width = 5;\n$area = $height * $width;\necho $area;\n?>");

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
                
                editor.setValue("<?php\nadd this\n?>");

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
                mode: "php",
                theme: "dracula",
                lineNumbers: true });
                editor.setSize(700,200);
                
                editor.setValue("<?php\n$height = 7;\n$width = 5;\n$area = $height * $width;\necho $area;\n?>");

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
    
           
       
    
    </div>
    
        </form>
    </body>

</html>