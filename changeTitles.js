function change_titles(){

    var brampton = ['Enola Holmes', 'Mulan', '47 Meters Down: Uncaged', 
                    'Avengers: Endgame', 'Jurassic World', 'Deadpool', 
                    'The Lion King', 'Despicable Me', 'Knives Out'];
    var northyork = ['Interstellar', 'Jumanji: The Next Level', 'Bird Box',
                    'Deadpool', 'Avengers: Endgame', 'Joker', 'The Lion King',
                    'Mulan'];
    var sauga = ['Jumanji: The Next Level', 'Avengers: Endgame', 'Enola Holmes',
                'Deadpool', 'Despicable Me', 'Interstellar', 'Grown Ups', 
                '47 Meters Down: Uncaged', 'Joker', 'The Hunger Games', 
                'The Lion King', 'Knives Out', 'Jurassic World'];
    var markham = ['Interstellar', 'Joker', 'Mulan', 'Deadpool', 'Enola Holmes',
                    'Jumanji: The Next Level', '47 Meters Down: Uncaged', 
                    'The Lion King', 'Avengers: Endgame', 'Jurassic World'];

    var loc = document.getElementById("theatres");
    var loc_result = loc.options[loc.selectedIndex].value;

    var movies_results = document.getElementById("movies").options;

    if (loc_result == 1){
        replace_option(movies_results, brampton);
    }
    else if (loc_result == 2){
        replace_option(movies_results, northyork);
    }
    else if (loc_result == 3){
        replace_option(movies_results, sauga);
    }
    else if (loc_result == 4){
        replace_option(movies_results, markham);
    }
}

function replace_option(movies, city){
    console.log("working");
    for (var i = 0; i < city.length; i++){
        if (movies[i].style.display == "none"){
            movies[i].style.display = "block";
        }
        movies[i].text = city[i];
    }
    for (var j = city.length; j < movies.length; j++){
        movies[j].style.display = "none";
    }
}