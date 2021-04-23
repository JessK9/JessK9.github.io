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
        <script src="codemirror/mode/css/css.js"></script>
        <script src="codemirror/mode/htmlmixed/htmlmixed.js"></script>
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
            <h2>Introduction to CSS</h2>
            <p><u>What is CSS?</u><p>
                <p> CSS stands for Cascading Style Sheet and contains the design for webpages. It is useful when a webpage has many HTML or PHP files
                    associated as it means instead of copying and pasting the design onto each file, there is only one file containg the design elements that all other
                    pages will use. This is time efficient and means if an element of the design is changed, it only has to be changed in one file and not in every file.
            </p>        
            <p> Each webpage will have a link to the CSS file in the head, the editor below has a CSS file called 'style.css' and a link tag is used to link the CSS and HTML / PHP file together.
            </p>
            <p>
                In the example below p stands for paragraph and so any paragraph on a webpage will have a font size of 15px and will be grey. It can also be used for elements with a specific id
                and this begins with a # and then the id. Classes can also be selected and these begin with a period (.) and then the name of the class, see the example below.
            </p>    
            
            
</div>

    
        <!--<form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
            <div class="codeEditorDiv">
                <textarea class="textarea" name="editor" id="editor"></textarea>
                <button class="button" id="clear">Clear</button>
            </div>
  </div>
      
            <script type="text/javascript" >
           
            $(document).ready(function() {
                var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
                mode: "text/x-css",
                theme: "dracula",
                lineNumbers: true });
                editor.setSize(700,200);

                editor.setValue('p {\n font-size: 15px;\n color: grey;\n}\n\n#id {\n padding: 20px;\n}\n\n.class {\n text-align: left;\n color: green;\n}');

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