<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="css/navbar.css" class="rel">
<link rel="stylesheet" href="css/image.css" class="rel">

<?php
include 'navbar.php'
?>
<div class="container-fluid">
    <div class="row intro py-1" style="background-color: sandybrown">
        <div class="heading text-center my-5">
            <h2><b>you can start </b></h2>
            <h1> YOUR TRANSACTION</h1>
            <
            <div class="container-fluid">
                <div class="row activity text-center">
                    <div class="nature">
                        <img src="image/person.jpg" alt="create user" class="img-al">
                        <br>
                        <div class="bottom">
                            <a href="createuser.php" > <button style="background-color: mediumvioletred">Create user</button></a>
                        </div>
                    </div>
                    <div class="nature">
                        <img src="image/bank.jpg" alt="do transaction" class="img-al">
                        <br>
                        <div class="bottom">
                            <a href="transfermoney.php"> <button style="background-color: mediumvioletred">Do Transaction</button></a>
                        </div>
                    </div>
                    <div class="nature">
                        <img src="image/history.jpg" alt="history of transaction" class="img-al">
                        <br>
                        <div class="bottom">
                            <a href="transactionhistory.php"><button style="background-color: mediumvioletred"> view the history </button></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="home">
        <a class="next" href="index.php" <button style="background-color: mediumvioletred">Back to Dashboard</button></a>
    </div>

    <div>

        <footer class="text-center mt-5 py-2">
            <p>@spark bank private limited  made by <b>Ramyabl@2000</b><br> spark foundation</p>
    </div>