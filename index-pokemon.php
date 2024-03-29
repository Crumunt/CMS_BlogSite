<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="index.js" defer></script>
</head>
<body>

<input type="text" name="" id="pokemonName">
<button onclick="fetchPokemon()">Get Pokemon</button>
<img src="" alt="Pokemon Image" id="pokemonSprite" style="display: none">

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Weight</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td id="id"></td>
            <td id="name"></td>
            <td id="type"></td>
            <td id="weight"></td>
        </tr>
    </tbody>
</table>

</body>
</html>