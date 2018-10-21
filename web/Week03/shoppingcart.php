<html>
    <head>
        <title>Books</title>
        <link rel="stylesheet" type="text/css" href="shopping.css">
    </head>
    <body>     
        <div class="wrapper">
            <div id="table">
                <form action="cart.php" method="post">
                    <center><h1>Legendary books for sale!</h1></center>
                    <br />
                    <table>
                        <tr>
                            <th></th>
                            <th>Book</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                        <tr>
                            <td><img src="notw.jpg" alt="notw" width="85px" height="95px"></td>
                            <td>The Name of the Wind</td>
                            <td>$15.00</td>
                            <td>
                                <input type="number" name="books[]" id="book-notw" value="The Name of the Wind" min="0" max="2000">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="wmf.jpg" alt="wmf" width="85px" height="95px"></td>
                            <td>Wise Mans Fear</td>
                            <td>$15.00</td>
                            <td>
                                <input type="number" name="books[]" id="book-wmf" value="Wise Mans Fear" min="0" max="2000">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="dos.jpg" alt="dos" width="85px" height="95px"></td>
                            <td>The Doors of Stone</td>
                            <td>$15.00</td>
                            <td>
                                <input type="number" name="books[]" id="book-dos" value="The Doors of Stone" min="0" max="2000">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="wok.jpg" alt="wok" width="85px" height="95px"></td>
                            <td>Way of Kings</td>
                            <td>$15.00</td>
                            <td>
                                <input type="number" name="books[]" id="book-wok" value="Way of Kings" min="0" max="2000">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="wod.jpg" alt="Wod" width="85px" height="95px"></td>
                            <td>Words of Radiance</td>
                            <td>$15.00</td>
                            <td>
                                <input type="number" name="books[]" id="book-wor" value="Words of Radiance" min="0" max="2000">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="ob.jpg" alt="ob" width="85px" height="95px"></td>
                            <td>Oathbringer</td>
                            <td>$15.00</td>
                            <td>
                                <input type="number" name="books[]" id="book-ob" value="Oathbringer" min="0" max="2000">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="mb.jpg" alt="mb" width="85px" height="95px"></td>
                            <td>Mistborn</td>
                            <td>$15.00</td>
                            <td>
                                <input type="number" name="books[]" id="book-mb" value="Mistborn" min="0" max="2000">
                            </td>
                        </tr>
                    </table>
                    <center><input type="submit" name="Submit" value="Submit">
                    </center>
                </form>
            </div>
        </div>
    </body>
</html>