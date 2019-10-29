/* Project specific Javascript goes here. */
const BASE_URL = window.location.origin;

$('form').submit(function() {
  $('button').html(
      `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`,
  );
});

$(document).ready(function() {
  var query = $('input[type=text]').val();

  $('.mb-3').each(function() {
    if (!$(this).hasClass('verified')) {
      getInfo(query, this);
    }
  });

  function getInfo(query, element) {
    var http = new XMLHttpRequest();
    var post_url = BASE_URL + '/check_domain/';

    var title = $(element).find('h4');
    var url = $(element).find('.url').text();

    var params = `query=${query}&url=${url}`;

    http.open('POST', post_url, true);

    //Send the proper header information along with the request
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {//Call a function when the state changes.
      if (http.readyState == 4 && http.status == 200) {
        var obj = JSON.parse(http.responseText);
        $(title).text(obj['title']);
        if (obj['ssl'] === true) {
          $(title).append('<img class="ssl ml-2" src="../static/images/ssl.svg" alt="">')
        }
      }
    };
    http.send(params);
  }

});

