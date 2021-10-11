<table class="table table-light table-striped table-hover">
    <thead>
        <th scope="col">GOOD</th>
        <th scope="col">name</th>
        <th scope="col">quantity</th>
        <th scope="col">price</th>
        <th scope="col">total</th>
        <th scope="col">Add product</th>
    </thead>
    <tbody>
        <?php
            require_once( '../database/connect.php' );
            $query = "SELECT * FROM `goods`";
            $result = mysqli_query( $link, $query )
                or die( "Error: " . mysqli_error( $link ) );
            
            $count = 1;

            while( $row = mysqli_fetch_array( $result ) ) {
                echo '<tr>';
                    echo '<th scope="row">' . $count . '</th>';
                    echo '<td>' . $row['Goodname'] . '</td>';
                    echo '<td>' . $row['Goodquantity'] . '</td>';
                    echo '<td>' . $row['Goodprice'] . ' тг</td>';
                    echo '<td>' . $row['Goodprice'] * $row['Goodquantity'] . ' тг</td>';
                    echo '<td>';
                        echo '<form action="../operations/insertGoods.php" method="POST">';
                            echo '<input type="number" min="1"  name="amount">';
                            echo '<button type="submit" class="btn btn-outline-dark m-1">Buy</button>';
                            echo '<input type="hidden" value="'. $row['GoodID'] . '" name="good">';
                        echo '</form>';
                    echo '</td>'; 
                echo '</tr>';

                $count++;
            }
        ?> 
    </tbody>
</table>