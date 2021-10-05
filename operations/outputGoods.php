<table class="table table-light table-striped table-hover">
    <thead>
        <th scope="col">GOOD</th>
        <th scope="col">name</th>
        <th scope="col">quantity</th>
        <th scope="col">price</th>
        <th scope="col">total</th>
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
                    echo '</tr>';
                }

                $count++;
            }
        ?> 
    </tbody>
</table>