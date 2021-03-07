<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Test page</title>
    </head>
    <body>
        <form>
            <tr>
                <div id="textFieldBlock">
                    <label for="testTextfield">Test Label for textfield</label><br>
                    <input type="textfield" id="testTextField" value="Test TextField"/>
                </div>
            </tr>
            <tr>
                <div id="buttonBlock">
                    <input type="button" id="testButton" value="Test Button"/>
                </div>
            </tr>
            <tr>
                <input type="checkbox" id="hideTextField" onclick="changeVisibility('textFieldBlock', checked)"/>Hide TextField
                <input type="checkbox" id="hideButton" onclick="changeVisibility('buttonBlock', checked)"/>Hide Button
            </tr>
        </form>
        <script type="text/javascript" language="JavaScript">
            function changeVisibility(divId, visible){
                document.getElementById(divId).style.display = visible ? "none": "block";
            }
        </script>
    </body>
</html>