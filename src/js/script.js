$(() => {
  let $weight = $('#weight').val();
  let $height = $('#height').val();

  if (($weight == "") || ($height == "")) {
    $('.bmi').addClass('d-none');
  } else {
    $('.bmi').addClass('d-block');
  }

  $('#weight, #height').on('input', function() {
    let inputValue = $(this).val();
    if (inputValue.trim() !== '') {
      $('#myButton').prop('disabled', false);
    } else {
      $('#myButton').prop('disabled', true);
    }
  });
});
