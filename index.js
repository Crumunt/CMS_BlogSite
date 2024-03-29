// function getStat() {

//     const xhr = new XMLHttpRequest();

//     const p = document.querySelector('p.document');
//     xhr.onreadystatechange = function() {
//         // console.log(JSON.parse(this.responseText));   
//         p.innerHTML = JSON.parse(this.responseText)
//     }

//     xhr.open('GET', 'https://api.mangadex.org/statistics/manga/8b34f37a-0181-4f0b-8ce3-01217e9a602c')
//     xhr.setRequestHeader('CONTENT-TYPE', 'application/json')

//     xhr.send();
// }

// getStat();

// fetch('https://api.mangadex.org/statistics/manga/8b34f37a-0181-4f0b-8ce3-01217e9a602c')
//     .then(response => response.json())
//     .then(data => console.log(data))
//     .catch(error => console.log(error))

// fetchPokemon();

async function fetchPokemon() {

    const pokemonName = document.getElementById('pokemonName').value.toLowerCase();

    const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokemonName}`)

    if(!response.ok) {
        throw new Error('Pokemon does not exist')
    }

    const data = await response.json();
    console.log(data)
    const pokemonSprite = data.sprites.front_default;
    const imageElement = document.getElementById('pokemonSprite')

    imageElement.src = pokemonSprite
    imageElement.style.display = 'block'

    const pokemonID = data.id
    const name = data.name
    const type = data.types[0].type.name
    const weight = data.weight

    document.getElementById('id').textContent = pokemonID
    document.getElementById('name').textContent = name
    document.getElementById('type').textContent = type
    document.getElementById('weight').textContent = weight
}