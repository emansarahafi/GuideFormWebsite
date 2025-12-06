// Survey form validation
$(document).ready(function () {
    $('form').submit(function(e) {
        const checked = $("input[type=checkbox]:checked").length;
        
        if (!checked) {
            alert("Please select one checkbox to submit.");
            e.preventDefault();
            return false;
        }
    });
});
