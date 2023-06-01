$(() => {
  let $weight = $('#weight').val();
  let $height = $('#height').val();

  $('#weight').on('input', () => {
    let $weight = $(this).val();
    if (($weight !== '')) {
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
