$(() => {
  let $weight = $('#weight').val();
  let $height = $('#height').val();

  $('#weight, #height').keyup(() => {
    if (($weight != "") || ($height != "")) {
      $('button').prop('disabled', false);
    } else {
      $('button').prop('enabled', false);
    }
  });

  if (($weight != "") && ($height != "")) {
    $('.bmi').addClass('d-block');
  } else {
    $('.bmi').addClass('d-none');
  }
});
