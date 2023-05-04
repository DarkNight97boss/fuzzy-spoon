(function($)
{var login={elem_form:$('#login-form'),elem_submit:$('#form-submit'),toggle_loading_icon:function()
{login.elem_submit.find('input').toggleClass('hidden');login.elem_submit.find('span').toggleClass('hidden');},animate_error:function()
{login.elem_form.addClass('animated shake');login.elem_form.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function()
{login.elem_form.removeClass('animated shake');});},init:function()
{login.elem_form.on('submit',function(e)
{e.preventDefault();login.toggle_loading_icon();$(':input',login.elem_form).prop('disabled',true);$.ajax({type:'POST',dataType:'text',url:'ajax/login',data:{u:login.elem_form.find('input')[0].value,p:login.elem_form.find('input')[1].value},success:function(data)
{if(data=='OK')
{window.location.href='me';return;}
this.error();},error:function()
{login.animate_error();login.toggle_loading_icon();login.elem_form.find('input')[0].select();$(':input',login.elem_form).prop('disabled',false);}});return false;});}}
login.init();})(jQuery);