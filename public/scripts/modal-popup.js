$('#experience-popup').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var title = button.data('title');
    var text = button.data('text');
    var imgSrc= button.data('img')

    var modal = $(this);
    modal.find('.modal-img').attr('src', imgSrc);
    modal.find('.modal-title').text(title);
    modal.find('.modal-text').text(text);
    // modal.find('.modal-img').src(imgSrc);
  })