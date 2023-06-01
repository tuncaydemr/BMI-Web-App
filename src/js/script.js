$(() => {
  let $weight = $('#weight').val();
  let $height = $('#height').val();

  $('#weight, #height').keypress(() => {
    if (($weight != "") || ($height != "")) {
      $('button').addClass('disabled');
      $('button').removeClass('enabled');
    } else {
      $('button').addClass('enabled');
      $('button').removeClass('disabled');
    }
  });

  if (($weight != "") && ($height != "")) {
    $('.bmi').addClass('d-block');
  } else {
    $('.bmi').addClass('d-none');
  }
});
