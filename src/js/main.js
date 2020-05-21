$(document).ready(function() {

  var container = $('.main-content')

  var source = $('#song-template').html();
  var template = Handlebars.compile(source);

  $.ajax({
    url:'http://localhost/php-ajax-dischi/src/php/songs-ajax.php',
    method: 'GET',
    success: function(res) {
      for (var i=0; i < res.length; i++) {
        var context = {
          img: res[i].img,
          title: res[i].title,
          artist: res[i].artist,
          year: res[i].year
        }

        console.log(output);
        var output = template(context);

        container.append(output);
      }
    },
    error: function() {
      console.log('Errore chiamata')
    }
  });

});
