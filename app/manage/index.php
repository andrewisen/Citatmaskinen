<html>

    <head>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </head>
	<style>
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
		}

		tr:nth-child(even) {
		background-color: #dddddd;
		}
	</style>
    <body>
    	<p id="quotes-id">Quotes goes here:</p>
    </body>
</html>

<script>
	
    function loadQuotes() {
        var quotes = []
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                // url: "./files/data-dev.txt",
                url: "./../files/data.txt",
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
            	quoteString += "<tr>";
                var data = allTextLines[i].split(';');
                if (data.length == headers.length) {
                    var tarr = [];
                    quoteString += "<td>" + i + "</td>";
                    for (var j = 0; j < headers.length; j++) {
                        //tarr.push(headers[j]+":"+data[j]);
                        //etarr.push(data[j]);
                        if (j==2){
                        	quoteString += '<td><a href="' + data[j] + '" target="_blank">' + data[j] + '</a></td>';
                        } else {
                        	quoteString += "<td>" + data[j] + "</td>";
                        }
                    }
                    //quoteString += "<br>";
                    quoteString += "</tr>";
                }
            }
            quoteString += "</table>";
            document.getElementById("quotes-id").innerHTML = quoteString;
        }
    }
    var quoteString = "<table><tr><th>ID</th><th>Citat</th><th>Källa</th><th>Länk till citat</th></tr>";
    loadQuotes();
</script>