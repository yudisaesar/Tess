<body>
<input type="text" name="input" onkeyup="check(this.value)"/>
<input type="text" name="output" disabled="disabled"/>
</body>

<script type="text/javascript">
function check(input){
var out = '';
if(input >= 90){
out = 'Pemasaran 1';
}
else if(input >= 70){
out = 'Pemasaran 2';
}
else{
out = 'Pemasaran 3';
}
document.getElementsByName('output')[0].value = out;
}
</script>