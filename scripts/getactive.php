<link rel="stylesheet" href="../styles.css">
 
<?php



require_once 'db.php';

function getactive($conn){
    $sql = "SELECT * from donate_req where status = '1' ";


    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=GetActiveQueryError");
        exit();
    }


    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);


    while($row = mysqli_fetch_assoc($result)) { ?>
        
        <div class="activeCards">

            <h1>
                <?php
                    echo($row['firstname']). ' ' . ($row['lastname']) . ' , ' . ($row['age']) ;
                ?>
            </h1>

            <br>

            <h2>
                <?php
                    echo "Phone No : ",($row['phone']) ;
                ?>
            </h2>

            <br>

            <h2>
                <?php
                    echo "Email : ",$row['email'] ;
                ?>
            </h2>

            <br>
            
            <h3>
                <?php
                    echo "Address : ",$row['address']  ;
                ?>
            </h3>

            <br>

            <h3>
                <?php
                    echo "Cured On (yyyy-mm-dd) : " ,$row['cured']  ;
                ?>
            </h3>

            <div class="buttonParent">

                <form action="./scripts/functions.php" method="POST">
                    <textarea 
                        name="sasta" 
                        id="sasta"
                        style="display:none">
                        <?php echo $row['id']?>
                    </textarea>
                    <button  
                            class="editButtons" 
                            type = "submit"
                            style="background-color:#E84855" 
                            name = "delete">
                        DELETE 
                    </button> 
                    
                    <button  
                            class="editButtons" 
                            type="submit"
                            style="background-color:#3185fc;" 
                            name = "process">
                        PROCESS 
                    </button>  

                </form>
            </div>
        </div>

<?php     }
    mysqli_stmt_close($stmt);

}

?>

