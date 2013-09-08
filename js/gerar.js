$(document).ready(function() {
	$("#gera").submit(function(e) {
		e.preventDefault();
		$("#result").slideUp(function() {
			$("#result").load("gerar.php?q="+parseInt($("#q").val()), function() {
				$("#result").slideDown();
				$("#copiar").fadeIn();
			});
		});
	});
	$("#copiar").click(function() {
		selectText('result');
	});
});

function selectText(containerid) {
	if (document.selection) {
		var range = document.body.createTextRange();
		range.moveToElementText(document.getElementById(containerid));
		range.select();
	} else if (window.getSelection) {
		var range = document.createRange();
		range.selectNode(document.getElementById(containerid));
		window.getSelection().addRange(range);
	}
}
