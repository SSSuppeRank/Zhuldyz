<table class="table table-light table-striped table-hover">
    <thead>
        <th scope="col">GOOD</th>
        <th scope="col">name</th>
        <th scope="col">quantity</th>
        <th scope="col">price</th>
        <th scope="col">total</th>
        <th scope="col">Purchases</th>
    </thead>
    <tbody>
        <?php
            require_once( '../database/connect.php' );
            $query = "SELECT * FROM `goods`";
            $result = mysqli_query( $link, $query )
                or die( "Error: " . mysqli_error( $link ) );
            
            $count = 1;

            while( $row = mysqli_fetch_array( $result ) ) {
                if( $row['Goodavailability'] == true ) {
                    echo '<tr>';
                        echo '<th scope="row">' . $count . '</th>';
                        echo '<td>' . $row['Goodname'] . '</td>';
                        echo '<td>' . $row['Goodquantity'] . '</td>';
                        echo '<td>' . $row['Goodprice'] . ' тг</td>';
                        echo '<td>' . $row['Goodprice'] * $row['Goodquantity'] . ' тг</td>';
                        echo '<td>';
                            if( isset( $_SESSION['inSystem'] ) && $_SESSION['inSystem'] ) {
                                echo '<form action="../operations/putAway.php" method="POST">';
                                    echo '<input type="number" min="1" max="' . $row['Goodquantity'] . '"  name="amount">';
                                    echo '<button type="submit" class="btn btn-outline-dark m-1">Sold</button>';
                                    echo '<input type="hidden" value="'. $row['GoodID'] . '" name="good">';
                                echo '</form>';
                            }
                            else {
                                echo "Pls. Log in!";
                            }
                        echo '</td>'; 
                    echo '</tr>';
                }

                $count++;
            }
        ?> 
    </tbody>
</table>