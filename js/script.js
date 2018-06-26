$(document).ready(function() {
	if(jQuery("#img").length>0){
		new FadeGallery(jQuery("#img"),
		{control_event:"mouseover",auto_play:true,control:jQuery("ul#imgControl"),delay:2}
	)}
	
	$(window).scroll(function(){
		if ($(this).scrollTop() > 600) {
			$('.download_btn_content').css({'position':'fixed'});
		} else {
			$('.download_btn_content').css({'position':'absolute'});
		}
	});
    $(".buttonSelectListDownload a").hover(function(){
		thisID = $(this).attr("id");
		$(".buttonSelectListDownload a").removeClass("active");
		$(this).addClass("active");
		$(".select_list_download").removeClass("active");
		$("#L"+thisID).addClass("active");
	});

	$(".title_container li.btn_tabs").hover(function(){
		var myID = this.id;
		$(".title_container li.btn_tabs").removeClass('Select');
		$(this).addClass('Select');
		$(".list_content_block li.show_content").css({'display':'none'});
		$("#text"+myID).css({'display':'block'});
	});

	$(".NewsDizzComm .btnChoose div").hover(function(){
		var myID = this.id;
		$(".NewsDizzComm .btnChoose div").removeClass('Select');
		$(this).addClass('Select');
		$("#NewsDizzComm .listNews").css({'display':'none'});
		$("#text"+myID).css({'display':'block'});
	});
	$(".btnChoose div a").click(function(){return false;});
});
function Server(sv){
	$(".BXH").css({'display' : 'none', 'width' : '100%'});
	$("#"+sv).css({'display' : '', 'width' : '100%'});
	
}
