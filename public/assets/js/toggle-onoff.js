function toggleonfoff_init() {
    $("div.input.toggle-onoff input:hidden").parent("div").children("i.fa").removeClass("fa-toggle-on").addClass("fa-toggle-off");
    $("div.input.toggle-onoff input:hidden[value='True']").parent("div").children("i.fa").removeClass("fa-toggle-off").addClass("fa-toggle-on");
}
$("div.input.toggle-onoff").click(function() {
    console.log($(this).children("input:hidden").val());
    var value = $(this).children("input:hidden").val();
    if( value == "True" ) {
        $(this).children("input:hidden").val("False");
        $(this).children("i.fa").removeClass("fa-toggle-on").addClass("fa-toggle-off");
    } else {
        $(this).children("input:hidden").val("True");
        $(this).children("i.fa").removeClass("fa-toggle-off").addClass("fa-toggle-on");
    }
});
$(document).ready(function() { 
    toggleonfoff_init();
});
