function activeS(ID,TP){
	$(".sgt_res").css('display','inline').html(' '+TP+'T');
	$(".inf_spost").css('display','none');
	$(".noload").css('display','none');
	$(".megabox").css('display','none');
	$(".ac_"+ID+"_"+TP).removeAttr('style');
	$(".noaudi").removeAttr('style');
}

function activeT(TP,ID){
	$(".noaudi").css('display','none');
	$(".megabox").css('display','none');
	$("#"+TP+ID).removeAttr('style');
}

function boxp(link){
	var url = '<iframe frameborder="0" scrolling="no" src="'+ link +'" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
	$(".onBox").html(url);
}

function boxStop(){
	$('.onBox').html('');
}