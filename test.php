<html>
<head>
<script language="JavaScript" type="text/javascript" src="functions.js"></script>
<script>
function showHere(parent, id) {
	var element = document.getElementById(id);
	var x;
	var y;
	
	x = parent.offsetLeft;
	y = parent.offsetTop;
	element.style.left = parseInt(x) + "px";
    element.style.top = parseInt(y-60) + "px";
	element.style.display = "inline";
}
</script>

<style type="text/css">
.export_menu {
	display:none;
	position:absolute;
	width:35px;
	height:60px;	
}
</style>
</head>
<body style="margin-top:200px;">
<a href="javascript:void(0);" onClick="showHere(this, 'export_menu', event);">export</a>

<div id="export_menu" class="export_menu" onMouseOut="showHide('export_menu');">
<table width="35">
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