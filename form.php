<?php
$comment = null;

// if submit pressed and its not empty
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['editor'])) {
    $comment = $_POST['editor'];

}
// need something for if it is empty
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Editor</title>
        <link rel="stylesheet" href="style.css">
        <script src="codemirror/lib/codemirror.js"></script>
        <link rel="stylesheet" href="codemirror/lib/codemirror.css">
        <script src="codemirror/mode/javascript/javascript.js"></script>
        <script src="codemirror/mode/xml/xml.js"></script>
        <script src="codemirror/mode/php/php.js"></script>
        <link href="codemirror/theme/dracula.css" rel="stylesheet"/>
        <script src="codemirror/addon/edit/closetag.js"></script>

    </head>
    <body>
        <form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <textarea class="textarea" name="editor" id="editor"><?php echo $comment; ?></textarea>
            <script>
            var editor = CodeMirror.fromTextArea
            (document.getElementById('editor'), {
                mode: "xml",
                theme: "dracula",
                lineNumbers: true,
                autoCloseTags: true
            }); 
        </script>
            <br>
            <input type="submit" name="preview-form-submit" id = "preview-form-submit" value = "Submit">
        </form>
        <div id="preview-comment"><?php echo $comment; ?></div>
        <div id="code">
        <form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
    </div>
    
        </form>
    </body>

</html>