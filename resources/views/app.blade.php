<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>South Park TV</title>

        <!-- подключаем файл со стилями -->
        @vite('resources/css/app.scss')
    </head>
    <body>
        <header>
            <h1 class="header"><span>S</span>outh <span>P</span>ark <span>TV</span></h1>
        </header>
        <main>
            <div id="app"></div>
        </main>
        <footer class="box" style="margin-left: 10%; height: 80px; background-color: #4b4b4b; display: flex; justify-content: space-around;">
            <h2 style="color: white;">Сайт сделан Аникином Валерием и Литвиновым Никитой 2023</h2>
            <!-- подключаем файл с vue js -->
            @vite('resources/js/index.js')
        </footer>
    </body>
</html>
