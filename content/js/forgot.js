

var Forgot = {

	Open: function ()
	{
		$('#overlay').fadeIn();
		$('#modal_forgot').fadeIn();
	},

	Close: function ()
	{
		$('#overlay').fadeOut();
		$('#modal_forgot').fadeOut();
	}
};

$('#overlay').click(function () {
    Forgot.Close();
});