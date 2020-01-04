<!doctype html>
<?php
    $appName = 'Citatmaskinen';
    $appVersion = '3.0';
    $appTitle = $appName . " " . $appVersion;
    $appAuthor = "André 'MG' Wisén";

    $info = $appName . ' är ett (dryckes)spel som jag utvecklade då jag kände mig sentimental.<br><br>
    Är du född i början av 90-talet så minns du säkert tiden då internet dök upp i var och varrannans hem.<br><br>
    Du kanske själv minns någon viral internetvideo från tidigt 2000-tal?<br><br>
    <b>Slumpa fram ett citat och se om du vet vart citatet kommer ifrån!</b>
    ';

    $rules = '
            <p>
                <b>Slumpa fram ett citat.</b>
                <br><br>
                Försök ange källan till citatet.<br>
                Det kan vara från en person, ett YouTube-klipp,<br>en film, en TV-serie eller något helt annat.
                <div class="alert alert-primary" role="alert">För citatet <b>"Plånkan is at home"</b> är både "Ove Sundberg" och "Solsidan" rätta svar.</div>
                Nedan följer några exempel på spelregler. Såklart går det att ändra på dessa. Det går ju att ta fler klunkar en just en (1) :)

            </p>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#easy">En åt gången</a>
                    </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#medium">Lagspel</a>
                    </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#hard">Free 4 All</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="easy" class="container tab-pane active"><br>
                        <p>
                            En person åt gången gissar källan till citatet.<br><br>

                            Personen tar <b>en (1)</b> klunk om den inte kan ange källan till citatet.
                            <br><br>
                            Nästa persons tur!
                        </p>
                    </div>
                    <div id="medium" class="container tab-pane fade"><br>
                        <p>
                            Dela upp er i två (eller fler) olika lag.<br><br>

                            Det första laget gissar källan till citatet. Det andra laget väntar.
                            <br><br>
                            Alla i laget tar <b>en (1)</b> klunk om laget inte kan ange källan till citatet.
                            <br><br>
                            Nästa lags tur!

                        </p> 
                    </div>
                    <div id="hard" class="container tab-pane fade"><br>
                        <p>
                            Alla personer gissar källan till citatet.<br><br>

                            <b>Nu gäller det att skrika högtst och först!</b><br>    
                            Om den som gissade hade rätt så tar alla andra <b>en (1)</b> klunk var!<br><br>
                            Men, om den som gissade hade fel så tar den <b>tre (3)</b> klunkar!
                            <br><br>
                            Nästa omgång!
                        </p>
                    </div>
                </div>
    ';

?>

<html>

    <head>
        <!-- Meta -->
        <title>
            <?php echo $appTitle;?>
        </title>
        <meta charset="UTF-8">
        <meta name="description" content="<?php echo $appTitle;?>">
        <meta name="keywords" content="Citat, Citatmaskin, Citatmaskinen,Meme,Memes,Mejmej,Mejmejs,Random,Slump,Slumpmässiga">
        <meta name="author" content="<?php echo $appAuthor;?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="./favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
        <link rel="manifest" href="./favicons/site.webmanifest">
        <link rel="mask-icon" href="./favicons/safari-pinned-tab.svg" color="#563d7c">
        <link rel="shortcut icon" href="./favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="./favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!--  JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <!-- Custom CSS -->
        <link href="./css/custom.css" rel="stylesheet">

    </head>

    <!-- Main content -->
    <body class="text-center">
        <div class="quote">
            <img class="mb-4" src="./logos/logo_300x300.png" alt="" width="72" height="72">
            <div class="alert alert-primary" role="alert">
                <h4 class="alert-heading"></h4>
                <h2><b><p id="id-quote"><?php echo $appTitle;?></p></b></h2>
                <p id="id-source">
                    <?php echo $info;?>
                </p>
            </div>

            
            <button class="btn btn-lg btn-primary btn-block" onclick="getQuote();" type="submit">Nytt Citat</button>
            <button class="btn btn-lg btn-outline-primary btn-block" onclick="getSource();" type="submit">Svar</button>
        
            <p class="mt-3 mb-3">
                <code data-toggle="modal" data-target="#modal-info"><a href="#modal-info">Info</a></code>
                <br>
                <code data-toggle="modal" data-target="#modal-rules"><a href="#modal-rules">Dryckesregler</a></code>
                <br>
                <code><a href="https://forms.gle/8JeM1H9GHnLDq41t5" target="_blank">Bidra med citat</a></code>
                <br>
                <code><a href="https://vadfanskajagdricka.se" target="_blank">vadfanskajagdricka.se</a></code>
            </p>

            <p class="mt-5 mb-3 text-muted">
                Skapad av <a href="https://andrewisen.se/" target="_blank">André Wisén</a> - <a href="http://github.com/andrewisen/citatmaskinen" target="_blank">GitHub Repo</a>
            </p>
        </div>
    
    </body>

    <!-- Modals -->
    <div class="modal fade" id="modal-info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <?php echo $info;?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok, jag fattar!</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-rules" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Spelregler</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo $rules;?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok, jag fattar!</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script>
        function loadQuotes() {
            // Credit: https://stackoverflow.com/a/7431565
            var quotes = []
            $(document).ready(function() {
                $.ajax({
                    type: "GET",
                    // url: "./files/data-dev.txt",
                    url: "./files/data.txt",
                    dataType: "text",
                    success: function(data) {
                        processData(data);
                    }
                });
            });

            function processData(allText) {
                var allTextLines = allText.split(/\r\n|\n/);
                var headers = allTextLines[0].split(';');

                for (var i = 0; i < allTextLines.length; i++) {
                    var data = allTextLines[i].split(';');
                    if (data.length == headers.length) {
                        var tarr = [];
                        for (var j = 0; j < headers.length; j++) {
                            //tarr.push(headers[j]+":"+data[j]);
                            tarr.push(data[j]);
                        }
                        quotes.push(tarr);
                    }
                }

            }
            return quotes;
        }

        function getQuote() {
            /**
             * Deprecated
             * divSource.style.display = "none";
             * divLink.style.display = "none";
             */

            if (quotes === undefined || quotes.length == 0) {
                alert("Det var allt! Det finns inga fler citat :(");
            } else {
                index = Math.floor(Math.random() * (quotes.length));
                quote = quotes[index][0];
                source = quotes[index][1];
                url = quotes[index][2];

                document.getElementById("id-quote").innerHTML = quote;
                document.getElementById("id-source").innerHTML = "";

                /**
                 * Deprecated
                 * document.getElementById("tempLink").href = "#";
                 */
                quotes.splice(index, 1);
            }
            
        }

        function getSource() {
            /**
             * Deprecated
             * divSource.style.display = "block";
             * divLink.style.display = "block";
             */

            document.getElementById("id-source").innerHTML = "<hr><a href='" + url + "' target='_blank'>" + source + "</a>";

            /**
             * Deprecated
             * document.getElementById("tempLink").href = randLink;
             */
        }

        /**
         * So-called Main function
         * 
         * Declares global variables and loads quotes from Database
         * @quotes Array
         */

        var quotes = loadQuotes();
        var divSource = document.getElementById("div-source");

        var index = 0;
        var quote = "";
        var source = "";
        var url = "";
    </script>
</html>