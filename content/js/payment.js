var CurrentWindow = "";

var PaymentWindow = {
    Start: function (id) {
        $('#overlay').fadeIn();
        $('#modal_' + id).fadeIn();
        CurrentWindow = id;
    },

    End: function (id) {
        $('#overlay').fadeOut();
        $("#modal_" + id).fadeOut();
    }
}

$('.credits-item').click(function () {
    PaymentWindow.Start($(this).data('modal'));
})

$('#overlay').click(function () {
    PaymentWindow.End(CurrentWindow);
});


var PopupPage = {
    OpenError: function () {
        var left = (screen.width / 2) - (700 / 2);
        var top = (screen.height / 2) - (600 / 2);
        return window.open("/Habbo/payment-error.html", "Habbo: Payment unsuccesfull", 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=700, height=600, top=' + top + ', left=' + left);
    }, 

    OpenSuccess: function (){
        var left = (screen.width / 2) - (700 / 2);
        var top = (screen.height / 2) - (600 / 2);
        return window.open("/Habbo/payment-success.html", "Habbo: Payment successful", 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=700, height=600, top=' + top + ', left=' + left);
    }
}

