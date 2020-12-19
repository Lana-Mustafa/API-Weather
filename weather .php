<html>
    <head>
        <meta charset="utf-8">
        <title>Weather</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script>
            $(document).ready(function() {


                $('form').submit(function() {
                    $.get('http://api.openweathermap.org/data/2.5/weather?q=' + $('#weather_input').val() + '&units=metric&appid=506c04c8964f81d05743f45f600991e8', function(weather) {
                        var html_str = '';
                        html_str +='<table class="table table-success table-striped table-hover" border="2">';
                        html_str +='<tr class="table-info"><th>Data</th><th class="table-success">Value</th></tr>';
                        html_str += "<tr class='table-info'><td>City Name</td><td><h2>" + weather.name + "</h2></td></tr>";
                        html_str += "<tr class='table-info'><td class='table-success'>Temp</td><td class='table-success'><h3>" + weather.main.temp.toFixed(0) + " Celsius</h3></td></tr>";
                        html_str += "<tr class='table-info'><td class='table-success'>Humidity</td><td class='table-success'><h3>" + weather.main.humidity.toFixed(0) + " %</h3></td></tr>";
                        html_str += "<tr class='table-info'><td class='table-success'>Minimum Temp</td><td class='table-success'><h3>" + weather.main.temp_min.toFixed(0) + " Celsius</h3></td></tr>";
                        html_str += "<tr class='table-info'><td class='table-success'>Maximum Temp</td><td class='table-success'><h3>" + weather.main.temp_max.toFixed(0) + " Celsius</h3></td></tr>";
                        html_str += "<tr class='table-info'><td class='table-success'>Wind Speed</td><td class='table-success'><h3>" + weather.wind.speed.toFixed(0) + " m/sec</h3></td></tr>";



                        // html_str += "<h3>Humidity: " + weather.main.humidity.toFixed(0) + " %</h3>";
                        html_str +='</table>';

                        $('#weather_loc').append(html_str);
                    }, "json");
                    return false;
                });

            });
        </script>
    </head>
    <body>
        <div id="container">

            <div id="weather_loc">
                <form action="/" method="POST">
                    <input id="weather_input" class="form-control mb-3" type="text" name="city" placeholder="Enter City">
                    <input type="submit" value="Search Weather" class="btn btn-primary">
                </form>

            </div>

        </div><!--end container-->
    </body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</html>


