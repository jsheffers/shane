var active_color = '#777'; 
var inactive_color = '#666';

jQuery(document).ready(function($) {
  $("#webform-client-form-8 input.form-text, #webform-client-form-8 .form-textarea").css("color", inactive_color);
  var default_values = new Array();
  $("#webform-client-form-8 input.form-text, #webform-client-form-8 .form-textarea").focus(function() {
    if (!default_values[this.id]) {
      default_values[this.id] = this.value;
    }
    if (this.value == default_values[this.id]) {
      this.value = '';
      this.style.color = active_color;
    }
    $(this).blur(function() {
      if (this.value == '') {
        this.style.color = inactive_color;
        this.value = default_values[this.id];
      }
    });
  });
});