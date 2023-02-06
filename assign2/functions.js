function getPokemon() {
    
    var nickname = document.getElementById('nickname').value;
    var height = getCheckedElements('height');
    var weight = getCheckedElements('weight');
    var categories = getCheckedElements('category');
    var types = getCheckedElements('type');
    var region = document.getElementById('region').value;

    if (nickname == "" || types.length == 0 || categories.length == 0 || height.length == 0 || weight.length == 0) {
        document.getElementById('form-error').style.display = "initial";
        document.getElementById('pokemon-container').style.display = "none";
        return;
    } else {
        document.getElementById('form-error').style.display = "none";
    }
    
    console.log(nickname);
    console.log(height);
    console.log(weight);
    console.log(categories);
    console.log(types);
    console.log(region);

    var index = matchStats(height, weight, categories, types, region);
    console.log(index);

    
    document.getElementById('pokemon-name').innerHTML = nickname;

    switch (index) {
        case 0:
            document.getElementById('species').innerHTML = "Bulbasaur";
            document.getElementById('pokemon-img').src = "../Assets/images/bulbasaur.png";
            document.getElementById('pokemon-type').innerHTML = "Grass/ Poison";
            document.getElementById('pokemon-category').innerHTML = "Plant";
            document.getElementById('pokemon-region').innerHTML = "Kanto";
            document.getElementById('pokemon-height').innerHTML = "28 inches";
            document.getElementById('pokemon-weight').innerHTML = "15.2 lbs";
            break;
        case 1:
            document.getElementById('species').innerHTML = "Charmander";
            document.getElementById('pokemon-img').src = "../Assets/images/charmander.png";
            document.getElementById('pokemon-type').innerHTML = "Fire/ Flying";
            document.getElementById('pokemon-category').innerHTML = "Reptile";
            document.getElementById('pokemon-region').innerHTML = "Kanto";
            document.getElementById('pokemon-height').innerHTML = "24 inches";
            document.getElementById('pokemon-weight').innerHTML = "18.7 lbs";
            break;
        case 2:
            document.getElementById('species').innerHTML = "Squirtle";
            document.getElementById('pokemon-img').src = "../Assets/images/squirtle.png";
            document.getElementById('pokemon-type').innerHTML = "Water";
            document.getElementById('pokemon-category').innerHTML = "Reptile";
            document.getElementById('pokemon-region').innerHTML = "Kanto";
            document.getElementById('pokemon-height').innerHTML = "20 inches";
            document.getElementById('pokemon-weight').innerHTML = "19.8 lbs";
            break;
        case 3:
            document.getElementById('species').innerHTML = "Pikachu";
            document.getElementById('pokemon-img').src = "../Assets/images/pikachu.png";
            document.getElementById('pokemon-type').innerHTML = "Electric";
            document.getElementById('pokemon-category').innerHTML = "Mammal";
            document.getElementById('pokemon-region').innerHTML = "Kanto";
            document.getElementById('pokemon-height').innerHTML = "14 inches";
            document.getElementById('pokemon-weight').innerHTML = "13.2 lbs";
            break;
        case 4:
            document.getElementById('species').innerHTML = "Chikorita";
            document.getElementById('pokemon-img').src = "../Assets/images/chikorita.png";
            document.getElementById('pokemon-type').innerHTML = "Grass";
            document.getElementById('pokemon-category').innerHTML = "Plant";
            document.getElementById('pokemon-region').innerHTML = "Johto";
            document.getElementById('pokemon-height').innerHTML = "35 inches";
            document.getElementById('pokemon-weight').innerHTML = "14.1 lbs";
            break;
        case 5:
            document.getElementById('species').innerHTML = "Cyndaquil";
            document.getElementById('pokemon-img').src = "../Assets/images/cyndaquil.png";
            document.getElementById('pokemon-type').innerHTML = "Fire";
            document.getElementById('pokemon-category').innerHTML = "Mammal";
            document.getElementById('pokemon-region').innerHTML = "Johto";
            document.getElementById('pokemon-height').innerHTML = "20 inches";
            document.getElementById('pokemon-weight').innerHTML = "17.4 lbs";
            break;
        case 6:
            document.getElementById('species').innerHTML = "Totodile";
            document.getElementById('pokemon-img').src = "../Assets/images/totodile.png";
            document.getElementById('pokemon-type').innerHTML = "Water";
            document.getElementById('pokemon-category').innerHTML = "Reptile";
            document.getElementById('pokemon-region').innerHTML = "Johto";
            document.getElementById('pokemon-height').innerHTML = "24 inches";
            document.getElementById('pokemon-weight').innerHTML = "20.9 lbs";
            break;
        case 7:
            document.getElementById('species').innerHTML = "Treecko";
            document.getElementById('pokemon-img').src = "../Assets/images/treecko.png";
            document.getElementById('pokemon-type').innerHTML = "Grass";
            document.getElementById('pokemon-category').innerHTML = "Reptile";
            document.getElementById('pokemon-region').innerHTML = "Hoenn";
            document.getElementById('pokemon-height').innerHTML = "20 inches";
            document.getElementById('pokemon-weight').innerHTML = "11 lbs";
            break;
        case 8:
            document.getElementById('species').innerHTML = "Torchic";
            document.getElementById('pokemon-img').src = "../Assets/images/torchic.png";
            document.getElementById('pokemon-type').innerHTML = "Fire/ Fighting";
            document.getElementById('pokemon-category').innerHTML = "Bird";
            document.getElementById('pokemon-region').innerHTML = "Hoenn";
            document.getElementById('pokemon-height').innerHTML = "16 inches";
            document.getElementById('pokemon-weight').innerHTML = "5.5 lbs";
            break;
        case 9:
            document.getElementById('species').innerHTML = "Mudkip";
            document.getElementById('pokemon-img').src = "../Assets/images/mudkip.png";
            document.getElementById('pokemon-type').innerHTML = "Water/ Ground";
            document.getElementById('pokemon-category').innerHTML = "Fish";
            document.getElementById('pokemon-region').innerHTML = "Hoenn";
            document.getElementById('pokemon-height').innerHTML = "16 inches";
            document.getElementById('pokemon-weight').innerHTML = "16.8 lbs";
            break;
        case 10:
            document.getElementById('species').innerHTML = "Turtwig";
            document.getElementById('pokemon-img').src = "../Assets/images/turtwig.png";
            document.getElementById('pokemon-type').innerHTML = "Grass/ Ground";
            document.getElementById('pokemon-category').innerHTML = "Reptile";
            document.getElementById('pokemon-region').innerHTML = "Sinnoh";
            document.getElementById('pokemon-height').innerHTML = "16 inches";
            document.getElementById('pokemon-weight').innerHTML = "22.5 lbs";
            break;
        case 11:
            document.getElementById('species').innerHTML = "Chimchar";
            document.getElementById('pokemon-img').src = "../Assets/images/chimchar.png";
            document.getElementById('pokemon-type').innerHTML = "Fire/ Fighting";
            document.getElementById('pokemon-category').innerHTML = "Mammal";
            document.getElementById('pokemon-region').innerHTML = "Sinnoh";
            document.getElementById('pokemon-height').innerHTML = "20 inches";
            document.getElementById('pokemon-weight').innerHTML = "13.7 lbs";
            break;
        case 12:
            document.getElementById('species').innerHTML = "Piplup";
            document.getElementById('pokemon-img').src = "../Assets/images/piplup.png";
            document.getElementById('pokemon-type').innerHTML = "Water";
            document.getElementById('pokemon-category').innerHTML = "Bird";
            document.getElementById('pokemon-region').innerHTML = "Sinnoh";
            document.getElementById('pokemon-height').innerHTML = "16 inches";
            document.getElementById('pokemon-weight').innerHTML = "11.5 lbs";
            break;
        case 13:
            document.getElementById('species').innerHTML = "Snivy";
            document.getElementById('pokemon-img').src = "../Assets/images/snivy.png";
            document.getElementById('pokemon-type').innerHTML = "Grass";
            document.getElementById('pokemon-category').innerHTML = "Plant";
            document.getElementById('pokemon-region').innerHTML = "Unova";
            document.getElementById('pokemon-height').innerHTML = "24 inches";
            document.getElementById('pokemon-weight').innerHTML = "17.9 lbs";
            break;
        case 14:
            document.getElementById('species').innerHTML = "Tepig";
            document.getElementById('pokemon-img').src = "../Assets/images/tepig.png";
            document.getElementById('pokemon-type').innerHTML = "Fire/ Fighting";
            document.getElementById('pokemon-category').innerHTML = "Mammal";
            document.getElementById('pokemon-region').innerHTML = "Unova";
            document.getElementById('pokemon-height').innerHTML = "20 inches";
            document.getElementById('pokemon-weight').innerHTML = "21.8 lbs";
            break;
        case 15:
            document.getElementById('species').innerHTML = "Oshawott";
            document.getElementById('pokemon-img').src = "../Assets/images/oshawott.png";
            document.getElementById('pokemon-type').innerHTML = "Water";
            document.getElementById('pokemon-category').innerHTML = "Mammal";
            document.getElementById('pokemon-region').innerHTML = "Unova";
            document.getElementById('pokemon-height').innerHTML = "20 inches";
            document.getElementById('pokemon-weight').innerHTML = "13 lbs";
            break;
        case 16:
            document.getElementById('species').innerHTML = "Chespin";
            document.getElementById('pokemon-img').src = "../Assets/images/chespin.png";
            document.getElementById('pokemon-type').innerHTML = "Grass/ Fighting";
            document.getElementById('pokemon-category').innerHTML = "Plant";
            document.getElementById('pokemon-region').innerHTML = "Kalos";
            document.getElementById('pokemon-height').innerHTML = "16 inches";
            document.getElementById('pokemon-weight').innerHTML = "19.8 lbs";
            break;
        case 17:
            document.getElementById('species').innerHTML = "Fennekin";
            document.getElementById('pokemon-img').src = "../Assets/images/fennekin.png";
            document.getElementById('pokemon-type').innerHTML = "Fire/ Psychic";
            document.getElementById('pokemon-category').innerHTML = "Mammal";
            document.getElementById('pokemon-region').innerHTML = "Kalos";
            document.getElementById('pokemon-height').innerHTML = "16 inches";
            document.getElementById('pokemon-weight').innerHTML = "20.7 lbs";
            break;
        case 18:
            document.getElementById('species').innerHTML = "Froakie";
            document.getElementById('pokemon-img').src = "../Assets/images/froakie.png";
            document.getElementById('pokemon-type').innerHTML = "Water/ Dark";
            document.getElementById('pokemon-category').innerHTML = "Amphibian";
            document.getElementById('pokemon-region').innerHTML = "Kalos";
            document.getElementById('pokemon-height').innerHTML = "12 inches";
            document.getElementById('pokemon-weight').innerHTML = "15.4 lbs";
            break;
        case 19:
            document.getElementById('species').innerHTML = "Rowlet";
            document.getElementById('pokemon-img').src = "../Assets/images/rowlet.png";
            document.getElementById('pokemon-type').innerHTML = "Grass/ Flying/ Ghost";
            document.getElementById('pokemon-category').innerHTML = "Bird";
            document.getElementById('pokemon-region').innerHTML = "Alola";
            document.getElementById('pokemon-height').innerHTML = "12 inches";
            document.getElementById('pokemon-weight').innerHTML = "3.3 lbs";
            break;
        case 20:
            document.getElementById('species').innerHTML = "Litten";
            document.getElementById('pokemon-img').src = "../Assets/images/litten.png";
            document.getElementById('pokemon-type').innerHTML = "Fire/ Dark";
            document.getElementById('pokemon-category').innerHTML = "Mammal";
            document.getElementById('pokemon-region').innerHTML = "Alola";
            document.getElementById('pokemon-height').innerHTML = "16 inches";
            document.getElementById('pokemon-weight').innerHTML = "9.5 lbs";
            break;
        case 21:
            document.getElementById('species').innerHTML = "Popplio";
            document.getElementById('pokemon-img').src = "../Assets/images/popplio.png";
            document.getElementById('pokemon-type').innerHTML = "Water";
            document.getElementById('pokemon-category').innerHTML = "Mammal";
            document.getElementById('pokemon-region').innerHTML = "Alola";
            document.getElementById('pokemon-height').innerHTML = "16 inches";
            document.getElementById('pokemon-weight').innerHTML = "16.5 lbs";
            break;
        case 22:
            document.getElementById('species').innerHTML = "Grookey";
            document.getElementById('pokemon-img').src = "../Assets/images/grookey.png";
            document.getElementById('pokemon-type').innerHTML = "Grass";
            document.getElementById('pokemon-category').innerHTML = "Mammal";
            document.getElementById('pokemon-region').innerHTML = "Galar";
            document.getElementById('pokemon-height').innerHTML = "12 inches";
            document.getElementById('pokemon-weight').innerHTML = "11 lbs";
            break;
        case 23:
            document.getElementById('species').innerHTML = "Scorbunny";
            document.getElementById('pokemon-img').src = "../Assets/images/scorbunny.png";
            document.getElementById('pokemon-type').innerHTML = "Fire";
            document.getElementById('pokemon-category').innerHTML = "Mammal";
            document.getElementById('pokemon-region').innerHTML = "Galar";
            document.getElementById('pokemon-height').innerHTML = "12 inches";
            document.getElementById('pokemon-weight').innerHTML = "9.9 lbs";
            break;
        case 24:
            document.getElementById('species').innerHTML = "Sobble";
            document.getElementById('pokemon-img').src = "../Assets/images/sobble.png";
            document.getElementById('pokemon-type').innerHTML = "Water";
            document.getElementById('pokemon-category').innerHTML = "Reptile";
            document.getElementById('pokemon-region').innerHTML = "Galar";
            document.getElementById('pokemon-height').innerHTML = "12 inches";
            document.getElementById('pokemon-weight').innerHTML = "8.8 lbs";
            break;
        case 25:
            document.getElementById('species').innerHTML = "Sprigatito";
            document.getElementById('pokemon-img').src = "../Assets/images/sprigatito.png";
            document.getElementById('pokemon-type').innerHTML = "Grass/ Dark";
            document.getElementById('pokemon-category').innerHTML = "Mammal";
            document.getElementById('pokemon-region').innerHTML = "Paldea";
            document.getElementById('pokemon-height').innerHTML = "16 inches";
            document.getElementById('pokemon-weight').innerHTML = "9 lbs";
            break;
        case 26:
            document.getElementById('species').innerHTML = "Fuecoco";
            document.getElementById('pokemon-img').src = "../Assets/images/fuecoco.png";
            document.getElementById('pokemon-type').innerHTML = "Fire/ Ghost";
            document.getElementById('pokemon-category').innerHTML = "Reptile";
            document.getElementById('pokemon-region').innerHTML = "Paldea";
            document.getElementById('pokemon-height').innerHTML = "16 inches";
            document.getElementById('pokemon-weight').innerHTML = "21.6 lbs";
            break;
        case 27:
            document.getElementById('species').innerHTML = "Quaxly";
            document.getElementById('pokemon-img').src = "../Assets/images/quaxly.png";
            document.getElementById('pokemon-type').innerHTML = "Water/ Fighting";
            document.getElementById('pokemon-category').innerHTML = "Bird";
            document.getElementById('pokemon-region').innerHTML = "Paldea";
            document.getElementById('pokemon-height').innerHTML = "20 inches";
            document.getElementById('pokemon-weight').innerHTML = "13.4 lbs";
            break;
        default:
            break;
    }

    document.getElementById('pokemon-container').style.display = "flex";
    location.href = "#copyright";
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