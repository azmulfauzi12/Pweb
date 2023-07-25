$(document).ready(function(){

	show();
	hide();
	toggle();
	hover();

});

function show(){
	$("#bgoption_home").click(function(){
		$("#home_content").fadeIn(500);
		$("#profile_content").fadeOut(500);
		$("#history_content").fadeOut(500);
		$("#account_content").fadeOut(500);
		$("#simulation_content").fadeOut(500);
		$("#help_content").fadeOut(500);
		$("#jadwal_content").fadeOut(500);
		$("#deskripsi_content").fadeOut(500);
		hidemenu();
	});

	$("#bgoption_profile").click(function(){
		$("#home_content").fadeOut(500);
		$("#profile_content").fadeIn(500);
		$("#history_content").fadeOut(500);
		$("#account_content").fadeOut(500);
		$("#simulation_content").fadeOut(500);
		$("#help_content").fadeOut(500);
		$("#jadwal_content").fadeOut(500);
		$("#deskripsi_content").fadeOut(500);
		hidemenu();
	});
	
	$("#bgoption_history").click(function(){
		$("#home_content").fadeOut(500);
		$("#profile_content").fadeOut(500);
		$("#history_content").fadeIn(500);
		$("#account_content").fadeOut(500);
		$("#simulation_content").fadeOut(500);
		$("#help_content").fadeOut(500);
		$("#jadwal_content").fadeOut(500);
		$("#deskripsi_content").fadeOut(500);
		hidemenu();
	});

	$("#bgoption_account").click(function(){
		$("#home_content").fadeOut(500);
		$("#profile_content").fadeOut(500);
		$("#history_content").fadeOut(500);
		$("#account_content").fadeIn(500);
		$("#simulation_content").fadeOut(500);
		$("#help_content").fadeOut(500);
		$("#jadwal_content").fadeOut(500);
		$("#deskripsi_content").fadeOut(500);
		hidemenu();
	});

	$("#bgoption_simulasi").click(function(){
		$("#home_content").fadeOut(500);
		$("#profile_content").fadeOut(500);
		$("#history_content").fadeOut(500);
		$("#account_content").fadeOut(500);
		$("#simulation_content").fadeIn(500);
		$("#help_content").fadeOut(500);
		$("#jadwal_content").fadeOut(500);
		$("#deskripsi_content").fadeOut(500);
		hidemenu();
	});

	$("#bgoption_help").click(function(){
		$("#home_content").fadeOut(500);
		$("#profile_content").fadeOut(500);
		$("#history_content").fadeOut(500);
		$("#account_content").fadeOut(500);
		$("#simulation_content").fadeOut(500);
		$("#help_content").fadeIn(500);
		$("#jadwal_content").fadeOut(500);
		$("#deskripsi_content").fadeOut(500);
		hidemenu();
	});

	$("#button-ubah-password").click(function(){
		$("#account_setting").fadeOut(500);
		$("#account_setting_password").fadeIn(500);
	});

	$("#button-edit-profile").click(function(){
		$("#account_setting").fadeOut(500);
		$("#account_setting_edit").fadeIn(500);
	});

	$("#button-jadwal").click(function(){
		$("#account_jadwal").fadeIn(500);
		$("#button-jadwal").fadeOut(500);
	});

	$("#button-deskripsi").click(function(){
		$("#form_deskripsi").fadeIn(500);
		$("#button-deskripsi").fadeOut(500);
	});

	$(".button-back").click(function(){
		$("#account_setting").fadeIn(500);
		$("#account_setting_password").fadeOut(500);
		$("#account_setting_edit").fadeOut(500);
	});

	$(".button-back-jadwal").click(function(){
		$("#button-jadwal").fadeIn(500);
		$("#account_jadwal").fadeOut(500);
	});

	$(".button-back-deskripsi").click(function(){
		$("#button-deskripsi").fadeIn(500);
		$("#form_deskripsi").fadeOut(500);
	});


	//profile tentor
	$("#bgoption_jadwal").click(function(){
		$("#home_content").fadeOut(500);
		$("#profile_content").fadeOut(500);
		$("#history_content").fadeOut(500);
		$("#account_content").fadeOut(500);
		$("#jadwal_content").fadeIn(500);
		$("#help_content").fadeOut(500);
		$("#deskripsi_content").fadeOut(500);
		hidemenu();
	});

	$("#bgoption_deskripsi").click(function(){
		$("#home_content").fadeOut(500);
		$("#profile_content").fadeOut(500);
		$("#history_content").fadeOut(500);
		$("#account_content").fadeOut(500);
		$("#jadwal_content").fadeOut(500);
		$("#help_content").fadeOut(500);
		$("#deskripsi_content").fadeIn(500);
		hidemenu();
	});
}

function hide(){
	// $("#close_daftar").click(function(){
	// 	$("#daftar").hide("explode", {pieces: 16}, 500);
	// 	$('#backgroundWrapper').css("display","none");
	// });

	
	// $("#close_login").click(function(){
	// 	$("#login_form").hide("explode", {pieces: 16}, 500);
	// 	$('#backgroundWrapper').css("display","none");
	// });
}

function toggle(){
	$("#menuLogout").click(function(){
		$("#menu_profile").toggle("drop", {direction : "up"}, 500);
	});
}

function hover(){

	$("#option_home_profile").hover(
		function() {
    		$("#bgoption_home").show("slide", {direction : "left"}, 500);
  		}
	);

	$("#option_profile").hover(
		function() {
    		$("#bgoption_profile").show("slide", {direction : "left"}, 500);
  		}
	);

	$("#option_history").hover(
		function() {
    		$("#bgoption_history").show("slide", {direction : "left"}, 500);
  		}
	);

	$("#option_account").hover(
		function() {
    		$("#bgoption_account").show("slide", {direction : "left"}, 500);
  		}
	);

	$("#option_simulasi").hover(
		function() {
    		$("#bgoption_simulasi").show("slide", {direction : "left"}, 500);
  		}
	);

	$("#option_help").hover(
		function() {
    		$("#bgoption_help").show("slide", {direction : "left"}, 500);
  		}
	);

	$("#option_jadwal").hover(
		function() {
    		$("#bgoption_jadwal").show("slide", {direction : "left"}, 500);
  		}
	);

	$("#option_deskripsi").hover(
		function() {
    		$("#bgoption_deskripsi").show("slide", {direction : "left"}, 500);
  		}
	);

	$(".bgoption").hover(
		function() {
    		$(this).show("slide", {direction : "left"}, 500);
  		},
		function() {
    		$(this).hide("slide", {direction : "left"}, 500);
    		hidemenu();
  		}
	);
}

function hidemenu(){
	$('#bgoption_home').hide("slide", {direction : "left"}, 500);
	$('#bgoption_profile').hide("slide", {direction : "left"}, 500);
	$('#bgoption_history').hide("slide", {direction : "left"}, 500);
	$('#bgoption_account').hide("slide", {direction : "left"}, 500);
	$('#bgoption_simulasi').hide("slide", {direction : "left"}, 500);
	$('#bgoption_jadwal').hide("slide", {direction : "left"}, 500);
	$('#bgoption_deskripsi').hide("slide", {direction : "left"}, 500);
	$('#bgoption_help').hide("slide", {direction : "left"}, 500);
}