$(() => {
  let $weight = $('#weight').val();
  let $height = $('#height').val();

  if (($weight == "") || ($height == "")) {
    $('.bmi').addClass('d-none');
    $('button').addClass('disabled');
  } else if (($weight != "") || ($height != "")) {
    $('.bmi').addClass('d-block');
    $('button').addClass('enabled');
  }
});
