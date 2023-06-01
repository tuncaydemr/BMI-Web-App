$(() => {
  let $weight = $('#weight').val();
  let $height = $('#height').val();

  $('#weight, #height').on('input', () => {
    if (($weight != "") || ($height != "")) {
      $('button').prop('disabled', false);
    } else {
      $('button').prop('disabled', true);
    }
  });

  if (($weight != "") && ($height != "")) {
    $('.bmi').addClass('d-block');
  } else {
    $('.bmi').addClass('d-none');
  }
});
