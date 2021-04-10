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

    if (loc_result == 'Brampton'){
        replace_option(movies_results, brampton);
    }
    else if (loc_result == 'North York'){
        replace_option(movies_results, northyork);
    }
    else if (loc_result == 'Mississauga'){
        replace_option(movies_results, sauga);
    }
    else if (loc_result == 'Markham'){
        replace_option(movies_results, markham);
    }
}

function replace_option(movies, city){
    var options = document.getElementById('movies');
    for (var i = 0; i < city.length; i++){
        if (movies[i].style.display == "none"){
            movies[i].style.display = "block";
        }
        movies[i].text = city[i];
        options[i].value = city[i];
    }
    for (var j = city.length; j < movies.length; j++){
        movies[j].style.display = "none";
    }
}

function getMaxDate(){
    var date = new Date();
    var setMax = date.getFullYear() + '-' + ("0" + (date.getMonth() + 2)).slice(-2)  + '-' + ("0" + date.getDate()).slice(-2);
    var setMin = date.getFullYear() + '-' + ("0" + (date.getMonth() + 1)).slice(-2)  + '-' + ("0" + date.getDate()).slice(-2);
    document.getElementById('date').setAttribute('max', setMax);
    document.getElementById('date').setAttribute('min', setMin);

}