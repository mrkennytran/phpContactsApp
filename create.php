<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Create Contact</h1>
                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyfields"){
                            echo '<p class="signuperror">Fill in all fields!</p>';

                        } else if($_GET["error"] == "invaliduidmail"){
                            echo '<p class="signuperror">Invalid username and e-mail!</p>';

                        } else if($_GET["error"] == "invaliduid"){
                            echo '<p class="signuperror">Invalid username!</p>';

                        } else if($_GET["error"] == "invalidmail"){
                            echo '<p class="signuperror">Invalid e-mail!</p>';

                        }else if($_GET["error"] == "passwordcheck"){
                            echo '<p class="signuperror">Your passwords do not match!</p>';

                        }else if($_GET["error"] == "usertaken"){
                            echo '<p class="signuperror">Username is already taken!</p>';
                        }
                    } else if(isset($_GET["signup"])){
                        echo '<p class="signupsuccess">Signup successful!</p>';
                    }
                ?>
                <form class="form-signup" action="includes/create.inc.php" method="post"> 
                    <input type="text" name="firstname" placeholder="Firstname">    
                    <input type="text" name="lastname" placeholder="Lastname">    
                    <input type="text" name="nickname" placeholder="Nickname">    
                    <input type="text" name="company" placeholder="Company">    
                    <input type="text" name="website" placeholder="Website">    
                    <input type="text" name="notes" placeholder="Notes">    
                    <input type="text" name="street" placeholder="Street">    
                    <input type="text" name="city" placeholder="City">    
                    <input type="text" name="state" placeholder="State">    
                    <input type="text" name="zipcode" placeholder="Zipcode">    
                    <input type="text" name="country" placeholder="Country">    

                    <input type="text" name="emails" placeholder="Emails">    
                    <input type="text" name="phone_numbers" placeholder="Phone Numbers">    

                    <button type="submit" name="create-submit">Create</button>
                </form>
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>
