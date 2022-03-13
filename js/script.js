function showmovie() { //Boleh ubah nama function
    // $('#movie-list').html('');
    
    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey' : '7f31e438',
            's' : 'Harry Potter'
        },
        success: function(result) {
            if(result.Response == "True") {
                let movies = result.Search;

                $.each(movies, function(i, data) {
                    $('.box-film gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center').append(
                        
                            '<div class="box-film-info">' +
                                '<img class="film" src='+ data.Poster+' >' +
                                '<div class="text-film">'+ data.Title+'</div>' +
                                '<img src="img/rate.svg" alt="">' +
                            '</div>'
                        
                    );
                });

                $('#search-input').val('');

            } else {
                $('#movie-list').html(`
                <div class="col">
                    <h1 class="text-center">`+ result.Error +`</h1>
                </div>
                `)
            }
        }
    });
}

// $('#search-button').on('click', function() {
//     searchMovie();
// });

// $('#search-input').on('keyup', function(e) {
//     if (e.keyCode === 13) {
//         searchMovie();
//     }
// });

$(document).ready(function () {
    showmovie();    
});