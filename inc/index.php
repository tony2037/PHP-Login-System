
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />
    <title>Index</title>
</head>
<body>
    <!-- jQuery is required -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit-icons.min.js"></script>

    <div class="uk-section uk-container uk-text-center">
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-gird="">
            <form class="uk-form-stacked">

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="email" placeholder="email@email.com" required="required">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="password" placeholder="Your password" required="required">
                    </div>
                </div>

                <div class="uk-margin">
                <button class="uk-button uk-button-default" type="submit">Submit</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>