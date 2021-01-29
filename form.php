<!DOCTYPE html>
<html>
    <head>
        <title>Editor</title>
        <link rel="stylesheet" href="style.css">
        <script src="codemirror/lib/codemirror.js"></script>
        <link rel="stylesheet" href="codemirror/lib/codemirror.css">
        <script src="codemirror/mode/javascript/javascript.js"></script>
        <script src="codemirror/mode/xml/xml.js"></script>
        <link href="codemirror/theme/dracula.css" rel="stylesheet"/>
        <script src="codemirror/addon/edit/closetag.js"></script>

    </head>
    <body>
        <form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <textarea class="textarea" name="preview-form-comment" id="preview-form-coment"></textarea>
            <br>
            <input type="submit" name="preview-form-submit" id = "preview-form-submit" value = "Submit">
        </form>
        <div id="preview-comment"></div>
    </body>

</html>