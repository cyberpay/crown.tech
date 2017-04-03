<?php include "./include/header.php"; ?>

    <main role="main" class="default">
        <?php include "./include/bg1.php"; ?>

        <div class="content">

            <div class="col-4-1 col-3-1-md col-full-width-sm sidebar">
                <h1 class="small" data-text="Timestamp a document">Timestamp a document</h1>

                <?php include "./include/soc-sites.php" ?>

                <h3 class="md-up-only">Protect your ideas, products and dreams on the blockchain</h3>

            </div>

            <div class="col-4-3 col-3-2-md col-full-width-sm">

                <div class="col-full-width thin-content">

                    <h2>Timestamping: the future of patenting</h2>
                    <p>
                        <strong>Time stamping is the process of creating a proof that something (in particular, a digital
                            file) existed at some point in time. This can be very useful in a lot of situations. For
                            instance, to prove authorship of a manuscript, song or other digital work: If you create a
                            time stamp before you publish the work and then someone tries to "steal" it, you can use the
                            time stamp to prove that you had the piece before everyone else.</strong> Or, if you rent
                        a flat (could also be a car or something else, it does not really matter), you can take pictures
                        of any damage present and time-stamp it. This allows you to prove later on that you were not
                        the originator of the damage, since it was already present on the date when you moved in.
                    </p>

                </div>

                <div class="light-content no-heading">

                    <p>
                        We have implemented the timestamping feature to the Crown blockchain. Since Crown has merged
                        mining with Bitcoin, the timestamped digital file is also timestamped within the Bitcoin blockchain!
                    </p>
                    <p>
                        Crown allows to store arbitrary 32-byte hashes into the blockchain, so that existence of the
                        hashed data at a certain point in time can be proven. This is done in two (or three, depending
                        on the point of view) steps:
                    </p>

                    <iframe class="youtube" src="https://www.youtube.com/embed/xeWPSApbzEw"></iframe>

                    <h2><span class="bg-num">01 </span>Hash your data:</h2>
                    <p class="break-words">
                        As the first step, you have to obtain the actual hash you want to store. On a GNU/Linux system,
                        this can be done by the 'sha256sum' utility. If you are on Windows, just download this hashing
                        utility - http://www.nirsoft.net/utils/hash_my_files.html. Upload the document and with right
                        click copy the SHA-256 checksum.
                    </p>
                    <h4>Assuming</h4>
                    <p class="break-words">
                        that your data is in <strong>'myfile.pdf'</strong>, this works as follows: <strong>$ sha256sum
                        myfile.pdf cde94e3ef4915554596bed1fe043fb20ed2278d18dbbab6b131851062d6ea7e1 myfile.pdf</strong>
                        The long hex string is the 32-byte SHA-256 hash that you can store into the blockchain in the next step.
                    </p>

                    <h2><span class="bg-num">02 </span>Timestamp the hash</h2>
                    <p>Given your hash, you can use Crown's 'timestamp' RPC command to store it into the blockchain in a special transaction. This costs the usual transaction fee required for the Crown network, but has no extra cost.</p>
                    <p>Open the RPC console via "Help -> Debug window -> Console". If your wallet is encrypted, you have to unlock it first:</p>
                    <p><strong>> walletpassphrase "Your long passphrase" 60</strong></p>
                    <p>(60 means that the wallet will be unlocked for 60 seconds, you can use any number you like.)</p>
                    <p>Then, you can issue the actual timestamping command together with your hex string. For instance:</p>
                    <p class="break-words"><strong>> timestamp cde94e3ef4915554596bed1fe043fb20ed2278d18dbbab6b131851062d6ea7e1 663e70d27124be861106255c41f2c40850499a2c1deef38d202e920d0b725103</strong></p>
                    <p>The resulting hex string is the transaction ID of the timestamping tx. Your data is now sent to the network, and will be recorded permanently in the blockchain as soon as that transaction is confirmed. As soon as the next Crown block is merge-mined with a valid Bitcoin block, there will even be a "hash link" between your data and the Bitcoin blockchain.</p>


                    <h2><span class="bg-num">03 </span>Verifing the timestamp</h2>
                    <p>Finally, let us verify that your hash is indeed stored into the blockchain. For this, you can query for the timestamping transaction ID:</p>
                    <p class="break-words">> getrawtransaction 663e70d27124be861106255c41f2c40850499a2c1deef38d202e920d0b725103 010000000117eaa6ab8c5d526b35afa9c6028596f28ed2aa62ac6a907f3e8cb073481631d00100 00006a47304402201330ce81cfa69edc234e1b2333498700931e795b0b28adca8a62ad75fe4b0c 8a022049fe0ac3c76eea895c7f1d2237e3a21e4e653c18c5965a329243c408a7068d7e0121028b 27353568e497c5bf1e29a1fdb766bc40f8d6967aa4b86b20d3ca7f1da8a775ffffffff02f06e1b 55860400001976a914a329bfb1ac5972736feb8316587e40263adb612e88ac0000000000000000 226a20cde94e3ef4915554596bed1fe043fb20ed2278d18dbbab6b131851062d6ea7e100000000</p>
                    <p>As you can see, the hash is contained literally in the transaction (last line) and thus is also part of the blockchain. Note that you may need to run your Crown client with the '-txindex' option to look up by txid, or you may need to query the transaction via the block containing it or an online service. In any case, your hash data is permanently recorded in the blockchain and such a query can be used to prove this fact to the world.</p>

                    <h4>Simple guide:</h4>
                    <table class="default thin-th">
                        <tr>
                            <th>1</th>
                            <td>
                                Download and install HasMyfiles <a href="http://www.nirsoft.net/utils/hash_my_files.html" target="_blank">http://www.nirsoft.net/utils/hash_my_files.html</a>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>
                                Hash your file and copy the 256-SHA checksum<br>
                                <img src="./media/guides/timestamp-01.jpg" alt="guide step 2" class="preview">
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>
                                Use RPC command in the Debug Window and insert: timestamp b16df95a6e21879537caf5dd64794cf884e2e114316b1635b6843cf7c64bd6c2<br>
                                <img src="./media/guides/timestamp-02.jpg" alt="guide step 3" class="preview">
                            </td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>
                                Verify - The resulting hex string is the transaction ID of the timestamping tx. 5161187c9773d714ad3111e54848abefa22369b08bf1979832960c418c67a904
                            </td>
                        </tr>
                    </table>

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