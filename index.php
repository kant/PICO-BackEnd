<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <form action="processDeCSSearch.php" method="get"> 
            DeCS Extractor for keyword
            <br>
            <table>
                <tbody>
                    <tr><td>KeyWord</td>
                        <td><input type="text" name="keyword" placeholder="dengue" /> </td></tr>
                    <tr><td>Position (number)</td>
                        <td><input type="text" name="position" placeholder="1" /> </td></tr>
                    <tr><td>Languages (es,en,pt)</td>
                        <td><input type="text" name="languages" placeholder="en,es,pt" /> </td></tr>
                </tbody></table>

            <input type="submit" name="submit" />
        </form>
        <br><br><br><br>
        <form action="processResultsNumber.php" method="get"> 
            Number of results of query<br>
            <table><tbody>
                    <tr><td>Query</td>
                        <td><input type="text" name="query" placeholder="dengue and zika" /> </td></tr>
                    <tr><td><input type="submit" name="submit" /></td></tr>
                </tbody></table>

        </form>


        <a href="index.php"></a>
    </body>
</html>