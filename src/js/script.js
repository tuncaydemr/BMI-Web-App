$(() => {
  let $weight = $('#weight').val();
  let $height = $('#height').val();

  if (($weight == "") || ($height == "")) {
    $('.bmi').addClass('d-none');
  } else {
    $('.bmi').addClass('d-block');
  }
});
