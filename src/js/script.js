$(() => {
  let $weight = $('#weight').val();
  let $height = $('#height').val();

  if (($weight == '') || ($height == '')) {
    $('.bmi').addClass('d-none');
  } else {
    $('.bmi').addClass('d-block');
  }

  $('#weight, #height').on('input', function() {
    if ($weight != '' || $height != '') {
      $('button').prop('disabled', false);
    } else {
      $('button').prop('disabled', true);
    }
  });
});
