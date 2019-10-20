let loading;

function showLoading() {
  loading = setTimeout(showPage, 500);
}

function showPage() {
  $('#loader').css('display', 'none');
  $('#page').css('visibility', 'visible');

  $('#title-container').addClass('animateTitle');
  $('#title-container').css('visibility', 'visible');
}
