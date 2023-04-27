$(document).ready(function() {
    // Initialize wizard

    // $('#firsttab').click();
    if ($('.form_select_opt').next().hasClass('form_select_opt')) {
      $('.form_select_opt').next('.form_select_opt').remove();
    }
    
    
    $('.wizard').bootstrapWizard({
      // Set progress bar class
      onInit: function() {
        $('.wizard-progress .progress-bar').addClass('bg-primary');
      },
      // Set progress bar width
      onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index + 1;
        var $percent = ($current / $total) * 100;
          // $('.form_select_opt').next().remove();

          // if ($('.form_select_opt').next().hasClass('form_select_opt')) {
          //   // $('.form_select_opt').next('.nice-select').remove();
          //   alert("class found");
          // }
          // else{
          //   alert("class not found");
          // }
          if ($('.form_select_opt').next().hasClass('form_select_opt')) {
            $('.form_select_opt').next('.form_select_opt').remove();
          }

        $('.wizard-progress .progress-bar').css({ width: $percent + '%' });
        // Enable or disable next and prev buttons based on tab position
        if ($current == 1) {
          $('.prev').addClass('disabled');
        } else {
          $('.prev').removeClass('disabled');
        }
        if ($current == $total) {
          $('.next').addClass('disabled');
          $('.complete').removeClass('disabled');
        } else {
          $('.next').removeClass('disabled');
          $('.complete').addClass('disabled');
        }
      },
      // Handle next button click
      onNext: function(tab, navigation, index) {
        var $valid = true;
        if (!$('.form-horizontal').valid()) {
          $valid = false;
        }
        return $valid;
      }
    });
  
    // Initialize form validation
    $('.form-horizontal').validate({
      errorPlacement: function(error, element) {
        error.insertAfter(element.closest('.col-sm-10'));
      },
      rules: {
        // Add rules for form fields
        'Step 1': 'required',
        'Step 2': 'required',
        'Step 3': 'required'
      },
      messages: {
        // Add messages for form fields
        'Step 1': 'Please enter Step 1',
        'Step 2': 'Please enter Step 2',
        'Step 3': 'Please enter Step 3'
      }
    });
  
    // Handle next button click
    $('.next').click(function() {
      $('.wizard').bootstrapWizard('next');
    });
  
    // Handle previous button click
    $('.prev').click(function() {
      $('.wizard').bootstrapWizard('previous');
    });
  
    // Handle complete button click
    $('.complete').click(function() {
      // Handle form submission
    });

    //remove extra ul after select
        
  });
  