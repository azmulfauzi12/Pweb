$(document).ready(function(){

	show();
	hide();
	toggle();

});

function show(){
	$("#signup").click(function(){
		$("#daftar").show("drop", {direction : "up"}, 500);
		$('#backgroundWrapper').css("display","block");

	});

	$("#login").click(function(){
		$("#login_form").show("drop", {direction : "up"}, 500);
		$('#backgroundWrapper').css("display","block");
	});

	
}

function hide(){
	$("#close_daftar").click(function(){
		$("#daftar").hide("explode", {pieces: 16}, 500);
		$('#backgroundWrapper').css("display","none");
	});

	
	$("#close_login").click(function(){
		$("#login_form").hide("explode", {pieces: 16}, 500);
		$('#backgroundWrapper').css("display","none");
	});
}

function toggle(){
	$("#menuContent1").click(function(){
		$("#deskripsi1").toggle("slide", {direction : "up"}, 500);
	});

	$("#menuContent2").click(function(){
		$("#deskripsi2").toggle("slide", {direction : "up"}, 500);
	});

	$("#menuContent3").click(function(){
		$("#deskripsi3").toggle("slide", {direction : "up"}, 500);
	});

	$("#menuContent4").click(function(){
		$("#deskripsi4").toggle("slide", {direction : "up"}, 500);
	});

	$("#menuContent5").click(function(){
		$("#deskripsi5").toggle("slide", {direction : "up"}, 500);
	});
}
