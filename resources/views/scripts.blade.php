<script>
	jQuery(document).ready(function(){
		jQuery('.lara-b4-form').submit(function(){
			var btn = jQuery(this).find('.loader-on-submit-btn');
			if(btn){
			
				prepareLaraB4Btn(btn,{
					loaderOnSubmit:true
				});
			}
		});

		jQuery('.lara-b4-input').change(function(){
			var config = {};
			if(jQuery(this).hasClass('lara-b4-input-hide-error')){
				config.hideErrorOnChange = true;
			}
			prepareLaraB4Input(jQuery(this),config);
		})
	});

	function prepareLaraB4Btn(btn,config = {}){
		if(config.loaderOnSubmit){
			var btn_content = btn.html();
			btn.html('<span class="d-inline-flex align-items-center"><span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>'+btn.data('loading-text')+'</span>');
		}
	}

	function prepareLaraB4Input(input,config = {}){
		if(config.hideErrorOnChange){
			input.closest('.form-group').find('.invalid-feedback').remove();
		}
	}
	
  		
</script>