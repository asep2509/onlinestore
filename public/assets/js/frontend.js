var nomor_telepon = $('#pulsa_nomor_telepon').val();
if(nomor_telepon == ''){
	$('#pulsa_nominal').prop('disabled', 'disabled');
}
$('#pulsa_nomor_telepon').keyup(function(){
	if($('#pulsa_nomor_telepon').val().length > 5){
	$('#pulsa_nominal').prop('disabled', false);
	}
})
$('#pulsa_nomor_telepon').keydown(function(){
	if($('#pulsa_nomor_telepon').val().length > 5){
	$('#pulsa_nominal').prop('disabled', true);
	}
})

$('#content').html('<p>sdsdss</p>')

$('#qsearch').focus(function(){
	$('#qsearch-r').removeClass('hidden');
})
$('#qsearch').blur(function(){
	$('#qsearch-r').addClass('hidden');
})
$('#cart-shopping').mouseup(function(){
	$('#cart-session').removeClass('hidden');
})
$('#cart-shopping').mousedown(function(){
	$('#cart-session').addClass('hidden');
})
$('#cart-shopping').blur(function(){
	$('#cart-session').addClass('hidden');
})
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll > 200) {
        $("#imaginary_container2").removeClass("hidden");
        $("#nav-mobile").addClass("darken-3");
    } else {
        $("#second-nav").removeClass("hidden");
        $("#imaginary_container2").addClass("hidden");
        $("#nav-mobile").addClass("darken-3");
    }
});