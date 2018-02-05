


<html>
<body>

<div id="printableArea">
    //insert your contents here... P250
</div>

 
<script>
function printDiv(divName) {
var printContents = document.getElementById(divName).innerHTML;
var originalContents = document.body.innerHTML;

document.body.innerHTML = printContents;

window.print();

document.body.innerHTML = originalContents;
}
</script>


    </body>

    </html>
