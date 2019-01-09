$(function() {
	
$('.submit-form').click(function(){
  var _self = $(this);
  _self.addClass('loading').removeClass('success');
  
  setTimeout(function(){
    _self.removeClass('loading').addClass('success');
  },2000);
}) 


$('#form-search').keyup(function() {
		txt = $(this).val();
			// ajax tìm kiếm
			$.ajax({
				url: 'module/fetch.php',
				type: 'get',
				dataType: 'text',
				data: {search: txt},
				success:function(data) {
					$('#result1,#result').html(data);
							console.log(data);

				}
			})
		});

});

