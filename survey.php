<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Survey Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_survey.css">
    <link rel="stylesheet" href="style_article.css">
    <link rel="stylesheet" href="style_about.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="script.js"></script>
    <link rel="shortcut icon" href="pics\completed-task.ico" type="image/x-icon">
</head>

<body class="survey fade-in">

    <nav role='navigation'>
        <a data-page="home" class="" href="index.php">Home</a>
        <a data-page="solution" class="" href="solution.php">Solution</a>
        <a data-page="survey" class="active" href="survey.php">Survey</a>
        <a data-page="about" class="" href="about.php">About</a>
    </nav>

    <div class="title_div">
        <img src="pics\Logo.png" alt="Kilecy">
        <h1 id="title" class="title_survey">Survey</h1>
    </div>

    <script>
        window.onpageshow = function() {
            var survey_form = document.getElementById("survey_form");
            survey_form.reset();
        }
    </script>

    <form action="thanks.php" method="POST" name="survey_form" id="survey_form">
        <table>
            <tr>
                <td>
                    <label for="first_name">First name: </label>
                </td>
                <td class="center">
                    <input type="text" name="first_name" id="first_name" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="last_name">Last name:</label>
                </td>
                <td class="center">
                    <input type="text" name="last_name" id="last_name" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email address :</label>
                </td>
                <td class="center">
                    <input type="email" name="email" id="email" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tel_number">Telephone Number: </label>
                </td>
                <td class="center">
                    <input type="tel" name="tel_number" id="tel_number" pattern="[0-9]{11}" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="comments">Comments :</label>
                </td>
                <td class="center">
                    <textarea name="comments" id="comments" cols="50" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="center">
                    <input type="submit" name="submit_btn">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>