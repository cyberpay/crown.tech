<?php include "./include/header.php"; ?>

    <main role="main" class="default">
        <?php include "./include/bg1.php"; ?>

        <div class="content">

            <div class="col-4-1 col-3-1-md col-full-width-sm sidebar">
                <h1 class="small" data-text="Register your name">Register your name</h1>

                <?php include "./include/soc-sites.php" ?>

                <h3 class="md-up-only">Register your unique name as your wallet address</h3>

            </div>

            <div class="col-4-3 col-3-2-md col-full-width-sm">

                <div class="col-full-width thin-content">

                    <h2>Name your crypto address</h2>

                    <p>We have introduced a system to map names to CRW addresses (i. e. scripts). Everyone can store their name on the Crown Blockchain. Simply choose your name, send a small fee to the Crown network and your name is registered with your wallet address.</p>

                </div>

                <div class="light-content">

                    <iframe class="youtube" src="https://www.youtube.com/embed/yV9Q8m7uHfM"></iframe>

                    <h2>Type following into the command line:</h2>

                    <table class="default thin-th">
                        <tr>
                            <th>1</th>
                            <td>
                                Type in: <mark>getnewaddress</mark><br>
                                <img src="./media/guides/register-name-01.jpg" alt="guide step 1" class="preview">
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>
                                Type: <mark>name_register my-cool-name “your address from the frist step” mxqptH4hnXrsBms2eGhmLsMjZRwKRdTGZP</mark><br>
                                <img src="./media/guides/register-name-02.jpg" alt="guide step 2" class="preview">
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>
                                You can also check the name : type in : <mark>setgenerate true 1 name_getaddress my-cool-name -> mxqptH4hnXrsBms2eGhmLsMjZRwKRdTGZP</mark>
                            </td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>
                                Or send transaction to name: <mark>sendtoname my-cool-name 5</mark>
                                You need to send some small fee to the Crown network.
                                <table class="nested">
                                    <tr><td>
                                            1-3 symbols - 500 CRW
                                        </td></tr>
                                    <tr><td>
                                            3-15 - 250 CRW
                                        </td></tr>
                                    <tr><td>
                                            15-30 - 100 CRW
                                        </td></tr>
                                    <tr><td>
                                            30-50 - 50 CRW
                                        </td></tr>
                                    <tr><td>
                                            50-100 - 25 CRW
                                        </td></tr>
                                </table>
                            </td>
                        </tr>
                    </table>

                </div>

                <div class="col-full-width thin-content">

                    <p>*) Internally, this works by using OP_RETURN outputs for name claims / registrations to store the relevant data. This can be compared technically a bit to how Counterparty and Mastercoin work.</p>
                    <p>*) The system will be first come, first serve. I. e., everyone is free to register any still unclaimed name, and the first to do so for any name can set the corresponding CRW address.</p>
                    <p>*) Once registered, the mapping between name and address is fixed. (It is possible to implement an update in the future that allows owners to change their names, but that is not part of the current plan.)</p>

                </div>

            </div>

        </div>

    </main>

    <footer class="bottom-left md-up-only">
        <?php include "./include/copyright.php"; ?>
    </footer>
    <footer class="mobile">
        <?php include "./include/footer-compact.php"; ?>
    </footer>

<?php include "./include/footer-def.php"; ?>