<!Doctype>
<html>
<head></head>
<body>

<script type="text/javascript">

            function capitalize(textboxid, str) {
                // string with alteast one character
                if (str && str.length >= 1) {
                    var firstChar = str.charAt(0);
                    var remainingStr = str.slice(1);
                    str = firstChar.toUpperCase() + remainingStr;
                }
                document.getElementById(textboxid).value = str;
            }

        </script>

<input type="text" onkeyup="capitalize(this.id , this.value);" name="name" id="name" />


</body>
</html>