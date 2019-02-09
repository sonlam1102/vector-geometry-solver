$(document).ready(function ( ) {

    // -----------Row 1-----------------------------
	//moi
    $("#math_cong").click(function ( ) {
        insertText('+');
    });
    $('#math_tru').click(function () {
        insertText('-');
    });
    $('#math_cham').click(function () {
        insertText('.');
    });
	$('#math_bac2').click(function () {
        wrapText('(', ')^2');
    });
	$('#math_bacn').click(function () {
        wrapText('(', ')^n');
    });
	

    // -----------Row 2-----------------------------


	//moi
	$('#math_nhan').click(function () {
        insertText('*');
    });
	$('#math_splash').click(function () {
        insertText('/');
    });
	$('#math_chia').click(function () {
        insertText('\u00F7');
    });
	 $('#math_frac').click(function () {
        wrapText('(', ')/()');
    });
    // -----------Row 3-----------------------------

    $('#math_br_l').click(function () {
        insertText('(');
    });
	$('#math_br_r').click(function () {
        insertText(')');
    });
	$('#math_sqrt').click(function () {
        wrapText('sqrt(', ')');
    });
    $('#math_sqrtn').click(function () {
        wrapText('root( ', ', n)');
    });
	$('#math_equal').click(function () {
        insertText('=');
    });
	$('#math_vector').click(function () {
        wrapText('Vector[',',]');
    });
    ClickGiai();
});
function wrapText(before, after) {
    var range = $('#txtEquation').getSelection();
    $('#txtEquation').replaceSelection(before + range.text + after);
}
function insertText(piece) {
    var range = $('#txtEquation').getSelection();
    $('#txtEquation').replaceSelection(piece);
}
function ClickGiai(){
	$('#step_solve').on("click", function(){
		var debai = $('#txtEquation').val();
		$.ajax({
			type: 'POST',
			url: 'runbat.php',
			data:{
				debai:debai
			},
			success: function(data){
				//data="$$ ta\\ có\\ :\\\\B $$";
				var render = "<script>"+
                        "MathJax.Hub.Queue([\"Typeset\", MathJax.Hub]);"+
                        "<\/script>"
				data = data.concat(render);
				$('#txtResult').html(data);
				//Preview.Update();
			},
			error: function(){
				
			}
		});
	})
}
//style="background-image: url(img/background-content.jpg); "
