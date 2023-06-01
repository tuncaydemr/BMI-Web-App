$(() => {
  let $weight = $('#weight').val();
  let $height = $('#height').val();

  $('#weight, #height').keypress(() => {
    if (($weight != "") || ($height != "")) {
      $('button').addClass('enabled');
    } else {
      $('button').addClass('disabled');
    }
  });

  if (($weight != "") || ($height != "")) {
    $('.bmi').addClass('d-block');
    $('button').addClass('disabled');
  } else {
    $('.bmi').addClass('d-none');
    $('button').addClass('enabled');
  }
});
