<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casio Kalkulator</title>

    <style>
        body {
            margin: 0;
            background-color: Indigo;
            background-image: linear-gradient(to Indigo);
        }

        label {}

        table {
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
            background-color: rgba(0, 0, 0, 0.5);
        }

        input[type="submit"] {
            width: 85%;
            padding: 20px 40px;
            font-size: large;
            background-color: blueviolet;
            color: black;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
            outline-color: black;
            border: 3px solid black;
        }

        input[type="submit"]:hover {
            background-color: cadetblue;
        }


        input[type="Reset"] {
            font-style: unset;
            font-size: larger;
            width: 80%;
            padding: 20px 40px;
            background-color: blueviolet;
            color: black;
            font-weight: black;
            margin-bottom: 5px;
            border: 3px solid black;
            border-radius: 5px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
        }

        input[type="Reset"]:hover {
            background-color: green;
        }

        input [type="number"] {
            width: 200%;
            padding: 30px;
            font-size: 24px;
            font-weight: bold;
            border: 1px solid black;
            border-radius: 5px;
            border: 1px solid black;
            align-items: center;


        }
    </style>
</head>

<body>
    <h1>
        <center></center>
    </h1>

    <center>
        <form action="{{ route('proses.store') }}" method="post">
            @csrf
            <table border=1 width=450 height=400>

                <tr>
                    <td colspan=4>
                        <h1>
                            <center><font color="white">KALKULATOR CASIO</font></center>
                        </h1>
                    </td>
                </tr>
                <tr>
                    <td colspan=2><input type="number" name="a" id""></td>

                    <td colspan=2 rowspan=2>
                        <center><input type="reset" value="RESET" value="RESET" name="op"></center>
                    </td>

                </tr>

                <tr>
                    <td colspan=2><input type="number" name="b" id""></td>



                </tr>

                <tr>
                    <td colspan=4><center><font color="white">HASIL KALKULATOR CASIO</font></center></td>

                </tr>

                <tr>
                    <td>
                        <center><input type="submit" value="+" value="+" name="op"></center></td>
                    <td>
                        <center><input type="submit" value="-" value="-" name="op"></center></td>
                    <td>
                        <center><input type="submit" value="*" value="x" name="op"></center></td>
                    <td>
                        <center><input type="submit" value="/" value="/" name="op"></center></td>
                </tr>

                <tr>
                    <td colspan=4><center><font color="white">
                        Nama  : FahmaXIofi<br>
                        Kelas : XII PPLG2
                    </font></center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>