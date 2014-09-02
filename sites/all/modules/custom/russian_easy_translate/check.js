checked=false;
function checkAll(id) {
	var parent = document.getElementById(id);
	if (parent.elements) {
		if (checked == false) { checked = true; }
		else { checked = false; }
		for (var i = 0; i < parent.elements.length; i++) {
			parent.elements[i].checked = checked;
		}
	}
}
