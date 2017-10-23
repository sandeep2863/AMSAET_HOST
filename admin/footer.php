<script type="text/javascript" src="js/npm.js"></script>
		<script src="../js/bootstrap.jquery.js"></script>
	    <script src="../js/bootstrap.min.js"></script>
	    <script src="../js/forms.js"></script>
        <script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>

</body>
</html>