<?php
$comment = null;

// if submit pressed and its not empty
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['editor'])) {
    //want to do something here to recognise and implement the PHP as well as HTML
    $comment = $_POST['editor'];
    
}
// need something for if it is empty
?>


<
<!DOCTYPE html>
<html>
    <head>
        <title>Editor</title>
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
    <ul>
        <li><a href="index.html">Home Page</a></li>
        <li><a href="introductionToPHP.html">Introduction to PHP</a></li>
        <li><a href="introductionToHTML.html">Introduction to HTML</a></li>
        <li><a href="introductionToCSS.html">Introduction to CSS</a></li>


    </ul>
    
        <form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <textarea class="textarea" name="editor" id="editor"></textarea>
        </form>
            <script type="text/javascript" >
           
            $(document).ready(function() {
                var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
                mode: "application/x-httpd-php",
                theme: "dracula",
                lineNumbers: true });

                //editor.setValue("hi");

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
        <form>
            <br>
            <input type="submit" name="preview-form-submit" id = "editor" value = "Submit">
       <button id="run">Run</button>
        </form>
        <div id="result"></div>
        <div id="preview-comment"><?php echo $comment; ?></div>
        <div id="code"></div>
        <form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
    </div>
    
        </form>
    </body>

</html>