$(document).ready(function(){
    var codeEditorElement = $(".textarea")[0];
    var code = document.getElementById("code-editor").value;

    $(document).on('click', '#run', function() {
        $("#error").html("").hide();
        var editorCode = code.getValue();

        if(editorCode != '') {
            $.ajax({
                url: 'file-write.php',
                type: 'POST',
                dataType: 'json',
                data: {"input":editorCode},
                success:function(response) {},
                complete:function(){
                    $.ajax({
                        url: 'code-editable.php',
                        type: 'GET',
                        success:function(response){
                            console.log("response:  "+response);
                            $("#result").html(response)	;
                        },
                        error:function(){
                            console.log("error: "+response);
                            }
                    });
                }
            });
        } else {
            $("#error").html("Code should not be empty").show();

        }

    });
});