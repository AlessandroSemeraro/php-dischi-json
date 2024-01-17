<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link rel="stylesheet" href="./style/style.css">

    <!--Axios-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!--VUE-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <title>Php-dischi-json</title>
</head>

<body>
    <div id="app">

        <header>
            <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png" alt="spotify logo">
        </header>
        <main>
            <div class="container">
                <ul>
                    <li class="my-card" v-for="(element, index) in albums">
                        <img class="album" :src="element.img" alt="image album">
                        <p class="title">{{ element.nome_album }}</p>
                        <p class="singer">{{ element.artista }}</p>
                        <p class="date">{{ element.anno}}</p>
                    </li>
                </ul>
            </div>


        </main>
    </div>





    <script src="./js/script.js"></script>
</body>

</html>