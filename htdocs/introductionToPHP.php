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
            <h2>Introduction to PHP</h2>
            <p><u>What is PHP?</u></p>
            <p>PHP is a HTML-embedded server-side web scripting language, which means 
                PHP code can be used in a HTML file of a web page to make that website better. A web page that is written in HTML is called ‘static’ 
                which means the web browser sends a HTTP request to the web server and the server sends the response. The server is doing nothing else and 
                the web page remains the same until the user refreshes it. 
</p>
<p>             These websites are simple to design but are limited in capability, so if you are wanting a 
                website that just displays information then a static website is better than a dynamic, however if you want the website to be interactive or allow user 
                personalisation then a dynamic website is best. Dynamic sites behave differently so instead of having a simple back and forth request to the server and 
                web browser, the web browser sends a HTTP request to the server, which then calls an application program in response to the HTTP request.<p>

                <p>Below is an example of PHP code, it is printing "Hello World!" and is enclosed in special PHP tags which tell the browser that
                    it is PHP. If you press the Run button it will print Hello World! Try editing the text within the quotation marks and see what happens!
                </p>
            
</div>

    
        <!--<form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
            <div class="codeEditorDiv">
                <textarea class="textarea" name="editor" id="editor"></textarea>
                <button class="button" id="run">Run</button>
                <button class="button" id="clear">Clear</button>
                <div id="result"></div>
            </div>
  </div>
      
            <script type="text/javascript" >
           
            $(document).ready(function() {
                var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
                mode: "application/x-httpd-php",
                theme: "dracula",
                lineNumbers: true });
                editor.setSize(700,150);

                editor.setValue('<?php\necho "Hello World!"\n?>');

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
                                    },
                                    error:function() {
                                        alert("The code is incorrect, try changing and running it again!");
                                    }
                                });
                            }
                            })
                        
                    }
                });

                $(document).on('click', '#clear', function()
                {
                    editor.setValue('');

                });

            });

           
          
        </script>
    
           
       
        <!--<form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
    
    </div>
    
        </form>
    </body>

</html>