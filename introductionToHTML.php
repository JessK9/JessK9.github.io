<!DOCTYPE html>
<html>
    <head>
        <title>Introduction to HTML</title>
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
        <li><a href="">Hello World!</a><li>
        <li><a href="introductionToPHP.php">Introduction to PHP</a></li>
        <li><a href="introductionToHTML.php">Introduction to HTML</a></li>
        <li><a href="introductionToCSS.php">Introduction to CSS</a></li>
        <li><a href="startPHPproject.php">Starting a PHP project</a><li>
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
        <h2>Introduction to HTML </h2>
        <p><u>What is HTML?</u></p>
        <p>Before we start learning about PHP, its important that we cover HTML as it helps greatly in the overall
            understanding of building webpages and how they run. HTML stands for Hypertext Markup Language and is used to display
            content and structure webpages.
        </p>
        <p> 
            First, start with a blank file in your chosen text editor or IDE and start with a DOCTYPE declaration which
            lets the browser know the file is HTML, then there is the starting HTML tag and at the end is a tag that indicates the end of the HTML code.
        </p>
        <p>
            Now we can start making a basic page! There are two more important tags here, the head which contains meta information and body tags which contains
            additional information and is where displayed content is located, in the example the title of the page is within the head tags and a heading (which is
            displayed on the webpage) is in the body tags.
        </p>

        <p>
            Have a go at changing the values in the editor!
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
</div>
      
            <script type="text/javascript" >
           
            $(document).ready(function() {
                var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
                mode: "application/x-httpd-php",
                theme: "dracula",
                lineNumbers: true });
                editor.setSize(700,200);

                editor.setValue("<!DOCTYPE html>\n<html>\n <head>\n <title> Webpage </title\n </head>\n <body>\n <h1> Hello World! </h1> \n </body>\n</html>");

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
    
    </div>
    
        </form>
    </body>

</html>