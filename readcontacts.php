<?php
    require "header.php";
?>


    <main>        
        <div class="wrapper-main">
            <section class="section-contacts">
                <h1>Contact</h1>
                <?php //include('includes/readcontacts.inc.php');
                    include 'includes/readcontacts.inc.php';

                    foreach($addresses as $address){
                        echo address;
                    }


                ?>


            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>

