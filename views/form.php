<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/script.js"></script>
    <title>Бактерии</title>
</head>
<body>
    <div class="form">
        <div class="form">
            <form id="form" class="form_body">
                <h1 class="form_title">Бактерии</h1>
                <div class="form_item">
                    <label for="red_number" class="form_label">Введите количество красных бактерий*:</label>
                    <input type="number" id="red_number" name="red" class="form_input _req">
                </div>
                <div class="form_item">
                    <label for="green_number" class="form_label">Введите количество зелёных бактерий*:</label>
                    <input type="number" id="green_number" name="green" class="form_input _req">
                </div>
                <div class="form_item">
                    <label for="tact_number" class="form_label">Введите количество тактов*:</label>
                    <input type="number" id="tact_number" name="tact" class="form_input _req">
                </div>
                <div class="form_item">
                    <button type="submit" id="button" class="form_button">Расчитать</button>
                </div>
                <table class="table">
                    <thead>
                        <th>Green</th>
                        <th>Red</th>
                    </thead>
                    <tbody class="tbody">
                        
                    </tbody>
                </table>
            </form> 
        </div>
    </div>
</body>
</html>