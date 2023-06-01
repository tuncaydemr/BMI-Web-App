$(() => {
  let $weight = $('#weight').val();
  let $height = $('#height').val();

  $('#weight, #height').keyup(() => {
    if (($weight != "") || ($height != "")) {
      $('button').addClass('enabled');
    } else {
      $('button').addClass('disabled');
    }
  });

  if (($weight != "") && ($height != "")) {
    $('.bmi').addClass('d-block');
  } else {
    $('.bmi').addClass('d-none');
  }
});
