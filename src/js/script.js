$(() => {

  
  $('#weight, #height').keypress(() => {
    let $weight = $('#weight').val();
    let $height = $('#height').val();

    if (($weight != "") || ($height != "")) {
      $('.bmi').addClass('d-block');
      $('button').addClass('disabled');
    } else {
      $('.bmi').addClass('d-none');
      $('button').addClass('enabled');
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
