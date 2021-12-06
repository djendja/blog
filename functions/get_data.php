<?php include 'db_connection.php';?>
    <?php 

        $sql_layout= "SELECT * FROM layout;";
        $sql_single="SELECT * FROM single_page";

        
        function get_data($sql) {

             $result=mysqli_query($conn,$sql);
            $resultCheck=mysqli_num_rows($result);

            $layoutData=[];

            if($resultCheck>0) {
                while($layouts=mysqli_fetch_all($result,MYSQLI_ASSOC)) : 
                // echo $row['title'] . $row['subtitle'] . $row['logo'];
                //    array_push($layoutData,$layouts);
                $layoutData=$layouts[0];

            ?>
                <pre><?php print_r($layouts) ?></pre>
            <?php  endwhile; 

            }
            return $layoutData;
        } 
    ?>
    
    <?php 
    
    function database($sql_query) {
        $datarray=[];

        $result=mysqli_query($conn,$sql_query);



        while($row=mysqli_fetch_array($result)) {
            $dataarray=$row[0];
            ?>
    <pre><?php print_r($row); ?></pre>
<?php  

        }; 
    }
    
    ?>

<?php echo "cao"; ?>

<?php $funkcija2=database($sql_single); echo $funkcija2;?>

<?php $home=get_data($sql_layout); 
echo $home;?>

