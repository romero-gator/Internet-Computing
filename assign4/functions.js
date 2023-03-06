function getPokemon() {
    
    var nickname = $('#nickname').val();
    var height = getCheckedElements('height');
    var weight = getCheckedElements('weight');
    var categories = getCheckedElements('category');
    var types = getCheckedElements('type');
    var region = $('#region').val();

    if (nickname == "" || types.length == 0 || categories.length == 0 || height.length == 0 || weight.length == 0) {
        $('#pokemon-container').css('display','none');
        if (nickname == "") {
            $('#invalid-nickname').removeClass('d-none');
        } else {
            $('#invalid-nickname').addClass('d-none');
        }
        if (types.length == 0) {
            $('#invalid-type').removeClass('d-none');
        } else {
            $('#invalid-type').addClass('d-none');
        }
        if (categories.length == 0) {
            $('#invalid-category').removeClass('d-none');
        } else {
            $('#invalid-category').addClass('d-none');
        }
        location.href = "#pokemon-form";
        return;
    } else {
        $('.form-error').addClass('d-none');
    }
    
    console.log(nickname);
    console.log(height);
    console.log(weight);
    console.log(categories);
    console.log(types);
    console.log(region);

    var index = matchStats(height, weight, categories, types, region);
    
    $('#pokemon-name').html(nickname);

    switch (index) {
        case 0:
            $('#species').html("Bulbasaur");
            $('#pokemon-img').attr("src","../Assets/images/bulbasaur.png");
            $('#pokemon-type').html("Grass/ Poison");
            $('#pokemon-category').html("Plant");
            $('#pokemon-region').html("Kanto");
            $('#pokemon-height').html("28 inches");
            $('#pokemon-weight').html("15.2 lbs");
            break;
        case 1:
            $('#species').html("Charmander");
            $('#pokemon-img').attr("src","../Assets/images/charmander.png");
            $('#pokemon-type').html("Fire/ Flying");
            $('#pokemon-category').html("Reptile");
            $('#pokemon-region').html("Kanto");
            $('#pokemon-height').html("24 inches");
            $('#pokemon-weight').html("18.7 lbs");
            break;
        case 2:
            $('#species').html("Squirtle");
            $('#pokemon-img').attr("src","../Assets/images/squirtle.png");
            $('#pokemon-type').html("Water");
            $('#pokemon-category').html("Reptile");
            $('#pokemon-region').html("Kanto")
            $('#pokemon-height').html("20 inches");
            $('#pokemon-weight').html("19.8 lbs");
            break;
        case 3:
            $('#species').html("Pikachu");
            $('#pokemon-img').attr("src","../Assets/images/pikachu.png");
            $('#pokemon-type').html("Electric");
            $('#pokemon-category').html("Mammal");
            $('#pokemon-region').html("Kanto");
            $('#pokemon-height').html("14 inches");
            $('#pokemon-weight').html("13.2 lbs");
            break;
        case 4:
            $('#species').html("Chikorita");
            $('#pokemon-img').attr("src","../Assets/images/chikorita.png");
            $('#pokemon-type').html("Grass");
            $('#pokemon-category').html("Plant");
            $('#pokemon-region').html("Johto");
            $('#pokemon-height').html("35 inches");
            $('#pokemon-weight').html("14.1 lbs");
            break;
        case 5:
            $('#species').html("Cyndaquil");
            $('#pokemon-img').attr("src","../Assets/images/cyndaquil.png");
            $('#pokemon-type').html("Fire");
            $('#pokemon-category').html("Mammal");
            $('#pokemon-region').html("Johto");
            $('#pokemon-height').html("20 inches");
            $('#pokemon-weight').html("17.4 lbs");
            break;
        case 6:
            $('#species').html("Totodile");
            $('#pokemon-img').attr("src","../Assets/images/totodile.png");
            $('#pokemon-type').html("Water");
            $('#pokemon-category').html("Reptile");
            $('#pokemon-region').html("Johto");
            $('#pokemon-height').html("24 inches");
            $('#pokemon-weight').html("20.9 lbs");
            break;
        case 7:
            $('#species').html("Treecko");
            $('#pokemon-img').attr("src","../Assets/images/treecko.png");
            $('#pokemon-type').html("Grass");
            $('#pokemon-category').html("Reptile");
            $('#pokemon-region').html("Hoenn");
            $('#pokemon-height').html("20 inches");
            $('#pokemon-weight').html("11 lbs");
            break;
        case 8:
            $('#species').html("Torchic");
            $('#pokemon-img').attr("src","../Assets/images/torchic.png");
            $('#pokemon-type').html("Fire/ Fighting");
            $('#pokemon-category').html("Bird");
            $('#pokemon-region').html("Hoenn");
            $('#pokemon-height').html("16 inches");
            $('#pokemon-weight').html("5.5 lbs");
            break;
        case 9:
            $('#species').html("Mudkip");
            $('#pokemon-img').attr("src","../Assets/images/mudkip.png");
            $('#pokemon-type').html("Water/ Ground");
            $('#pokemon-category').html("Fish");
            $('#pokemon-region').html("Hoenn");
            $('#pokemon-height').html("16 inches");
            $('#pokemon-weight').html("16.8 lbs");
            break;
        case 10:
            $('#species').html("Turtwig");
            $('#pokemon-img').attr("src","../Assets/images/turtwig.png");
            $('#pokemon-type').html("Grass/ Ground");
            $('#pokemon-category').html("Reptile");
            $('#pokemon-region').html("Sinnoh");
            $('#pokemon-height').html("16 inches");
            $('#pokemon-weight').html("22.5 lbs");
            break;
        case 11:
            $('#species').html("Chimchar");
            $('#pokemon-img').attr("src","../Assets/images/chimchar.png");
            $('#pokemon-type').html("Fire/ Fighting");
            $('#pokemon-category').html("Mammal");
            $('#pokemon-region').html("Sinnoh");
            $('#pokemon-height').html("20 inches");
            $('#pokemon-weight').html("13.7 lbs");
            break;
        case 12:
            $('#species').html("Piplup");
            $('#pokemon-img').attr("src","../Assets/images/piplup.png");
            $('#pokemon-type').html("Water");
            $('#pokemon-category').html("Bird");
            $('#pokemon-region').html("Sinnoh");
            $('#pokemon-height').html("16 inches");
            $('#pokemon-weight').html("11.5 lbs");
            break;
        case 13:
            $('#species').html("Snivy");
            $('#pokemon-img').attr("src","../Assets/images/snivy.png");
            $('#pokemon-type').html("Grass");
            $('#pokemon-category').html("Plant");
            $('#pokemon-region').html("Unova");
            $('#pokemon-height').html("24 inches");
            $('#pokemon-weight').html("17.9 lbs");
            break;
        case 14:
            $('#species').html("Tepig");
            $('#pokemon-img').attr("src","../Assets/images/tepig.png");
            $('#pokemon-type').html("Fire/ Fighting");
            $('#pokemon-category').html("Mammal");
            $('#pokemon-region').html("Unova");
            $('#pokemon-height').html("20 inches");
            $('#pokemon-weight').html("21.8 lbs");
            break;
        case 15:
            $('#species').html("Oshawott");
            $('#pokemon-img').attr("src","../Assets/images/oshawott.png");
            $('#pokemon-type').html("Water");
            $('#pokemon-category').html("Mammal");
            $('#pokemon-region').html("Unova");
            $('#pokemon-height').html("20 inches");
            $('#pokemon-weight').html("13 lbs");
            break;
        case 16:
            $('#species').html("Chespin");
            $('#pokemon-img').attr("src","../Assets/images/chespin.png");
            $('#pokemon-type').html("Grass/ Fighting");
            $('#pokemon-category').html("Plant");
            $('#pokemon-region').html("Kalos");
            $('#pokemon-height').html("16 inches");
            $('#pokemon-weight').html("19.8 lbs");
            break;
        case 17:
            $('#species').html("Fennekin");
            $('#pokemon-img').attr("src","../Assets/images/fennekin.png");
            $('#pokemon-type').html("Fire/ Psychic");
            $('#pokemon-category').html("Mammal");
            $('#pokemon-region').html("Kalos");
            $('#pokemon-height').html("16 inches");
            $('#pokemon-weight').html("20.7 lbs");
            break;
        case 18:
            $('#species').html("Froakie");
            $('#pokemon-img').attr("src","../Assets/images/froakie.png");
            $('#pokemon-type').html("Water/ Dark");
            $('#pokemon-category').html("Amphibian");
            $('#pokemon-region').html("Kalos");
            $('#pokemon-height').html("12 inches");
            $('#pokemon-weight').html("15.4 lbs");
            break;
        case 19:
            $('#species').html("Rowlet");
            $('#pokemon-img').attr("src","../Assets/images/rowlet.png");
            $('#pokemon-type').html("Grass/ Flying/ Ghost");
            $('#pokemon-category').html("Bird");
            $('#pokemon-region').html("Alola");
            $('#pokemon-height').html("12 inches");
            $('#pokemon-weight').html("3.3 lbs");
            break;
        case 20:
            $('#species').html("Litten");
            $('#pokemon-img').attr("src","../Assets/images/litten.png");
            $('#pokemon-type').html("Fire/ Dark");
            $('#pokemon-category').html("Mammal");
            $('#pokemon-region').html("Alola");
            $('#pokemon-height').html("16 inches");
            $('#pokemon-weight').html("9.5 lbs");
            break;
        case 21:
            $('#species').html("Popplio");
            $('#pokemon-img').attr("src","../Assets/images/popplio.png");
            $('#pokemon-type').html("Water");
            $('#pokemon-category').html("Mammal");
            $('#pokemon-region').html("Alola");
            $('#pokemon-height').html("16 inches");
            $('#pokemon-weight').html("16.5 lbs");
            break;
        case 22:
            $('#species').html("Grookey");
            $('#pokemon-img').attr("src","../Assets/images/grookey.png");
            $('#pokemon-type').html("Grass");
            $('#pokemon-category').html("Mammal");
            $('#pokemon-region').html("Galar");
            $('#pokemon-height').html("12 inches");
            $('#pokemon-weight').html("11 lbs");
            break;
        case 23:
            $('#species').html("Scorbunny");
            $('#pokemon-img').attr("src","../Assets/images/scorbunny.png");
            $('#pokemon-type').html("Fire");
            $('#pokemon-category').html("Mammal");
            $('#pokemon-region').html("Galar");
            $('#pokemon-height').html("12 inches");
            $('#pokemon-weight').html("9.9 lbs");
            break;
        case 24:
            $('#species').html("Sobble");
            $('#pokemon-img').attr("src","../Assets/images/sobble.png");
            $('#pokemon-type').html("Water");
            $('#pokemon-category').html("Reptile");
            $('#pokemon-region').html("Galar");
            $('#pokemon-height').html("12 inches");
            $('#pokemon-weight').html("8.8 lbs");
            break;
        case 25:
            $('#species').html("Sprigatito");
            $('#pokemon-img').attr("src","../Assets/images/sprigatito.png");
            $('#pokemon-type').html("Grass/ Dark");
            $('#pokemon-category').html("Mammal");
            $('#pokemon-region').html("Paldea");
            $('#pokemon-height').html("16 inches");
            $('#pokemon-weight').html("9 lbs");
            break;
        case 26:
            $('#species').html("Fuecoco");
            $('#pokemon-img').attr("src","../Assets/images/fuecoco.png");
            $('#pokemon-type').html("Fire/ Ghost");
            $('#pokemon-category').html("Reptile");
            $('#pokemon-region').html("Paldea");
            $('#pokemon-height').html("16 inches");
            $('#pokemon-weight').html("21.6 lbs");
            break;
        case 27:
            $('#species').html("Quaxly");
            $('#pokemon-img').attr("src","../Assets/images/quaxly.png");
            $('#pokemon-type').html("Water/ Fighting");
            $('#pokemon-category').html("Bird");
            $('#pokemon-region').html("Paldea");
            $('#pokemon-height').html("20 inches");
            $('#pokemon-weight').html("13.4 lbs");
            break;
        default:
            break;
    }

    $('#pokemon-container').css("display", "flex");
    location.href = "#pokemon-img";
}

function getCheckedElements(name) {
    var elements = document.getElementsByName(name);
    var checkedElements = [];
    for (const e of elements) {
        if (e.checked) {
            checkedElements.push(e.value);
        }
    }
    return checkedElements;
}

function matchStats(height, weight, categories, types, region) {
    var pokedex = Array(28).fill(0);
    console.log(pokedex);

    switch (height[0]) {
        case "Short":
            pokedex[3]++;
            pokedex[18]++;
            pokedex[19]++;
            pokedex[22]++;
            pokedex[23]++;
            pokedex[24]++;
            break;
        case "Average":
            pokedex[2]++;
            pokedex[5]++;
            pokedex[7]++;
            pokedex[8]++;
            pokedex[9]++;
            pokedex[10]++;
            pokedex[11]++;
            pokedex[12]++;
            pokedex[14]++;
            pokedex[15]++;
            pokedex[16]++;
            pokedex[17]++;
            pokedex[20]++;
            pokedex[21]++;
            pokedex[25]++;
            pokedex[26]++;
            pokedex[27]++;
            break;
        case "Tall":
            pokedex[0]++;
            pokedex[1]++;
            pokedex[4]++;
            pokedex[6]++;
            pokedex[13]++;
            break;
        default:
            break;
    }

    switch (weight[0]) {
        case "Light":
            pokedex[7]++;
            pokedex[8]++;
            pokedex[19]++;
            pokedex[20]++;
            pokedex[22]++;
            pokedex[23]++;
            pokedex[24]++;
            pokedex[25]++;
            break;
        case "Average":
            pokedex[0]++;
            pokedex[1]++;
            pokedex[3]++;
            pokedex[4]++;
            pokedex[5]++;
            pokedex[9]++;
            pokedex[11]++;
            pokedex[12]++;
            pokedex[13]++;
            pokedex[15]++;
            pokedex[18]++;
            pokedex[21]++;
            pokedex[27]++;
            break;
        case "Heavy":
            pokedex[2]++;
            pokedex[6]++;
            pokedex[10]++;
            pokedex[14]++;
            pokedex[16]++;
            pokedex[17]++;
            pokedex[26]++;
            break;
        default:
            break;
    }

    for (i = 0; i < categories.length; i++) {
        switch (categories[i]) {
            case "Reptile/ Amphibian":
                pokedex[1]++;
                pokedex[2]++;
                pokedex[6]++;
                pokedex[7]++;
                pokedex[10]++;
                pokedex[18]++;
                pokedex[24]++;
                pokedex[26]++;
                break;
            case "Fish":
                pokedex[9]++;
                break;
            case "Bird":
                pokedex[8]++;
                pokedex[12]++;
                pokedex[19]++;
                pokedex[27]++;
                break;
            case "Mammal":
                pokedex[3]++;
                pokedex[5]++;
                pokedex[11]++;
                pokedex[14]++;
                pokedex[15]++;
                pokedex[17]++;
                pokedex[20]++;
                pokedex[21]++;
                pokedex[22]++;
                pokedex[23]++;
                pokedex[25]++;
                break;
            case "Plant":
                pokedex[0]++;
                pokedex[4]++;
                pokedex[13]++;
                pokedex[16]++;
                break;
            default:
                break;
        }
    }

    for (i = 0; i < types.length; i++) {
        switch (types[i]) {
            case "Grass":
                pokedex[0]++;
                pokedex[4]++;
                pokedex[7]++;
                pokedex[10]++;
                pokedex[13]++;
                pokedex[16]++;
                pokedex[19]++;
                pokedex[22]++;
                pokedex[25]++;
                break;
            case "Fire":
                pokedex[1]++;
                pokedex[5]++;
                pokedex[8]++;
                pokedex[11]++;
                pokedex[14]++;
                pokedex[17]++;
                pokedex[20]++;
                pokedex[23]++;
                pokedex[26]++;
                break;
            case "Water":
                pokedex[2]++;
                pokedex[6]++;
                pokedex[9]++;
                pokedex[12]++;
                pokedex[15]++;
                pokedex[18]++;
                pokedex[21]++;
                pokedex[24]++;
                pokedex[27]++;
                break;
            case "Electric":
                pokedex[3]++;
                break;
            case "Poison":
                pokedex[0]++;
                break;
            case "Flying":
                pokedex[1]++;
                pokedex[19]++;
                break;
            case "Ground":
                pokedex[9]++;
                pokedex[10]++;
                break;
            case "Fighting":
                pokedex[8]++;
                pokedex[11]++;
                pokedex[14]++;
                pokedex[16]++;
                pokedex[27]++;
                break;
            case "Dark":
                pokedex[18]++;
                pokedex[20]++;
                pokedex[25]++;
                break;
            case "Ghost":
                pokedex[19]++;
                pokedex[26]++;
                break;
            case "Psychic":
                pokedex[17]++;
                break;
            default:
                break;
        }
    }

    switch (region) {
        case "Kanto":
            pokedex[0]++;
            pokedex[1]++;
            pokedex[2]++;
            pokedex[3]++;
            break;
        case "Johto":
            pokedex[4]++;
            pokedex[5]++;
            pokedex[6]++;
            break;
        case "Hoenn":
            pokedex[7]++;
            pokedex[8]++;
            pokedex[9]++;
            break;
        case "Sinnoh":
            pokedex[10]++;
            pokedex[11]++;
            pokedex[12]++;
            break;
        case "Unova":
            pokedex[13]++;
            pokedex[14]++;
            pokedex[15]++;
            break;
        case "Kalos":
            pokedex[16]++;
            pokedex[17]++;
            pokedex[18]++;
            break;
        case "Alola":
            pokedex[19]++;
            pokedex[20]++;
            pokedex[21]++;
            break;
        case "Galar":
            pokedex[22]++;
            pokedex[23]++;
            pokedex[24]++;
            break;
        case "Paldea":
            pokedex[25]++;
            pokedex[26]++;
            pokedex[27]++;
            break;
        default:
            for (i = 0; i < pokedex.length; i++) {
                pokedex[i]++;
            }
            break;
    }

    var max = 0;
    for (i = 0; i < pokedex.length; i++) {
        if (pokedex[i] > max) {
            max = pokedex[i];
        }
    }

    console.log(pokedex);

    var potentials = [];
    for (i = 0; i < pokedex.length; i++) {
        if (pokedex[i] == max) {
            potentials.push(i);
        }
    }

    console.log(potentials);
    return potentials[getRandInt(potentials.length)];
}

function getRandInt(max) {
    return Math.floor(Math.random() * max);
}