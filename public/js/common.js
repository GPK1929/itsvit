$(document).ready(function() {
	$('.toggle-btn').click(function(){
		alert('fsdfdsfsd');

		// $(".sidebar-h, .main-wrapp, .crumb-wrap").toggleClass("active");
		// if ($('.sidebar-h').hasClass('active')) {
		// 	$('.sidebar-v').css('opacity', '0')
		// } else {
		// 	$('.sidebar-v').css({'opacity': '1', 'transition': 'all .9s ease'})
		// }
	});

	
	$('[data-toggle="tooltip"]').tooltip();

	// popup on page instance
	$(".set-mnu").click(function() {
		var th = $(this).parent(),
		flag = th.has('.settings-mnu').length;

		$('.settings-mnu:visible').hide(0).remove();

		if (!flag) {
			$('.settings-mnu').clone().appendTo(th).fadeIn('fast');
		}

	});

	// hover on page user
	$(".material-icons").mouseover(function() {
  	$(this).parent().prev().find('div:nth-child(' + ($(this).index() + 1) + ')').css({'color':'#1565c0'});
 	})
 	$(".material-icons").mouseout(function() {
  	$(this).parent().prev().find('div:nth-child(' + ($(this).index() + 1) + ')').css({'color':'#525252'});
 	});


 	$('#option').click(function(event) {
  	if(this.checked) {
      $(':checkbox').each(function() {
          this.checked = true;
      });
  	}	else {
    $(':checkbox').each(function() {
          this.checked = false;
      });
	  }
	});




});