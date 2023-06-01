$(() => {
  let $weight = $('#weight').val();
  let $height = $('#height').val();

  $('#weight, #height').keypress(() => {
    if (($weight != "") || ($height != "")) {
      $('button').addClass('disabled');
    } else {
      $('button').addClass('enabled');
    }
  });

  if (($weight != "") && ($height != "")) {
    $('.bmi').addClass('d-block');
  } else {
    $('.bmi').addClass('d-none');
  }
});
