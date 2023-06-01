$(() => {
  let $weight = $('#weight').val();
  let $height = $('#height').val();

  $('#weight, #height').keyup(() => {
    if (($weight != "") || ($height != "")) {
      $('button').attr('enabled');
    } else {
      $('button').attr('disabled');
    }
  });

  if (($weight != "") && ($height != "")) {
    $('.bmi').addClass('d-block');
  } else {
    $('.bmi').addClass('d-none');
  }
});
