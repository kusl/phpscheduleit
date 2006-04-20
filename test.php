<html>
<head>
<script src="functions.js" type="text/javascript"></script>
<script>
function exportMenu() {
	document.getElementById('export_menu').style.visibility = "visible";
}
</script>
<style type="text/css">
.export_menu {
	visibility:hidden;
}
</style>
</head>
<body>
<a href="javascript:void(0);" onclick="javascript:showDivHere('export_menu', event);" onmouseout="javascript:hideSummary('export_menu');">export</a>

<div id="export_menu" class="export_menu" onmouseover="javascript:this.style.visibility='visible';">
<table>
	<tr>
		<td>iCalendar</td>
	</tr>
	<tr>
		<td>vCalendar</td>
	</tr>
</table>
</div>
</body>
</html>