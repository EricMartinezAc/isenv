
	var form_register_index = document.getElementById('registrer_index');
	var form_auth_index = document.getElementById('auth_index');
		
		
	function setVisibleform_auth_index(){
		form_auth_index.style.display='block';
		form_register_index.style.display='none';
	}
	
	function setVisibleform_register_index(){
		form_auth_index.style.display='none';
		form_register_index.style.display='block';
	}