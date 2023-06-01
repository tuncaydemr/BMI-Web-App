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
      $('button').prop('disabled', false);
    } else {
      $('button').prop('disabled', true);
    }
  });
});
