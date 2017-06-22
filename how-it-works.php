<?php include "./include/header.php"; ?>

<main role="main" class="how">
    <?php include "./include/bg2.php"; ?>

    <div class="content">

        <div class="col-4-1 col-3-1-md col-full-width-sm sidebar">
            <h1 class="col-2-1-sm" data-text="How it works">How it works</h1>

            <?php include "./include/soc-sites.php" ?>

            <h3 class="col-2-1-sm">Crown is a token of exchange and a computer program</h3>

            <a class="box" href="#how-it-works-1">
                What is crown?
            </a>
            <a class="box" href="#how-it-works-2">
                Ok, but what do I need to get started?
            </a>
            <a class="box" href="#how-it-works-3">
                But I don't have any crw yet, so how do I get them?
            </a>
            <a class="box" href="#how-it-works-4">
                What else can I do with Crown?
            </a>
            <a class="box" href="#how-it-works-5">
                Where can I learn more?
            </a>
        </div>

        <div class="col-4-3 col-3-2-md col-full-width-sm thin-content">
            <h2 id="how-it-works-1"><span class="bg-num">01 </span>What is Crown</h2>
            <p class="initial-letter">
                Crown is based on the same revolutionary set of technologies as Bitcoin – built around
                the blockchain and cryptography: the technological odd-couple who make “trustless transactions”
                possible. Just as Bitcoin is both a token of exchange and also a computer program,
                Crown is a token of exchange and a computer program.
            </p>
            <p>
                The trustless transaction part, where the computer program transfers the token from one address
                to another on the blockchain, is enabled by the science of cryptography (cryptography can be
                thought of as a fancy word for mathematical equations that are designed to confuse people when
                they are run forward, and then clarify things when they are run backward – but they can’t be run
                backward without a key).
            </p>
            <p>
                Crown includes capabilities of both the DASH and Bitcoin protocols, but there are important
                differences between Crown and both DASH and Bitcoin. The most important differences from
                Bitcoin are that (1) Crown confirms transactions more quickly, and (2) has an additional
                layer of security provided by Tron network masternodes. The most important difference from
                DASH is that Crown can be merge-mined with Bitcoin so that it has the capability to leverage
                the security provided by the bitcoin network’s hashpower.
            </p>
            <p>
                This is a brief description of what Crown is now – but where everything will really get
                fun and interesting is if we are able to make Crown into what we think it could be. For more
                on our vision for Crown, please check out Crown Atomic.
            </p>
        </div>

        <div class="light-content wide">
            <a class="fancy-button overflowed-top" href="./papers">Crown papers</a>
            <div class="col-2-1 col-full-width-sm left" id="how-it-works-2">
                <h2><span class="bg-num">02 </span>Ok, but what do I need to get started?</h2>
                <p class="initial-letter">
                    To get started using Crown, all you need to do is download the wallet.
                </p>
                <p>
                    The wallet holds your addresses and your private keys to unlock the CRW held in those addresses.
                    The actual CRW is just an entry in the blockchain – so it’s existence is independent of your wallet.
                    But no one can access an address without the address and the key.
                </p>
                <div class="button-container">
                    <a class="button" href="./wallet">Download wallet</a>
                </div>
                <h4>You will want to back-up<br>your wallet</h4>
                <p>
                    People talk about coins being burned – and they don’t mean they have literally been burned (obviously).
                    A burned wallet is one where the key has been lost. Why don’t people just say keyless? Well, it doesn’t
                    sound as dramatic to admit losing your keys…
                </p>
                <p>
                    In addition to storing your addresses and keys to those addresses, the wallet is also what sends the
                    messages to the network to make changes to what is in those addresses. You transact from the wallet.
                </p>
                <p>
                    A CRW transaction is just the act of sending a message saying move CRW from one of your addresses
                    to another address (which may or may not be yours).
                </p>
                <p>
                    If you were at a store, you could send the CRW to the store owner’s wallet to purchase a pizza for instance.
                    At this point, the value of CRW is low enough that you might be spending 1,000 CRW on the pizza – but you could do it.
                </p>
                <p>
                    The great thing about transacting with CRW (and other coins) is that the transaction cost is tiny – hundredths
                    of a percent instead of entire percentage points. Functionally, it is like spending or receiving cash, but without
                    the cash part. This is a real mindbender –and one reason why it is useful to understand at least a little bit of
                    why the cryptographic systems work.
                </p>
                <p>
                    One important goal for the Crown team over time will be to build wide acceptance of CRW -- because low transaction
                    costs aren’t very useful if there isn’t anyone to transact with. This is one of the challenges for all crypto-currencies.
                </p>
            </div>
            <div class="col-2-1 col-full-width-sm right" id="how-it-works-3">
                <h2><span class="bg-num">03 </span>But I don‘t have any CRW yet, So how do I get them?</h2>
                <p class="initial-letter">
                    There are only two ways to get an initial stake of CRW: trade or mine. Mining is its own specialized
                    activity and will be treated separately – but this isn’t how the vast majority of us will get our coins.
                </p>
                <p>
                    Most of us will trade for the CRW. And being the one receiving CRW in a trade either means that
                    you are accepting CRW for goods or services, or buying them on an exchange.
                </p>
                <div class="button-container">
                    <a class="button" href="./trade-crown">Trade Crown</a>
                </div>
            </div>
            <div class="col-2-1 col-full-width-sm right" id="how-it-works-4">
                <h2><span class="bg-num">04 </span>What else can I do with Crown?</h2>
                <p class="initial-letter">
                    We mentioned at the beginning that Crown is a sort of hybrid system which uses a token in running
                    a computer program that encrypts and decrypts messages using keys and stored the data regarding the
                    tokens in a shared public database called a blockchain. This sort of a system has many potential uses.
                </p>
                <h4>Trons</h4>
                <p>
                    Right now, users are encouraged to set up what we call Trons. Users with 10,000 CRW can run the
                    Crown program in server mode. These Tron servers provide additional security to the network, but
                    they also could represent a distributed pool of computing capacity for running applications. For now
                    though, 45% of the block confirmation rewards go to the Tron servers for their role in confirming
                    transactions on the network through a modified proof-of-stake algorithm.
                </p>
                <div class="button-container">
                    <a class="button" href="./trons">Set up a Tron</a>
                </div>
            </div>
        </div>

        <div class="col-4-1 sidebar md-up-only">

            <h3>You may share us on Social Media. We will appreciate it</h3>

        </div>

        <div class="col-4-3 col-full-width-sm thin-content" id="how-it-works-5">
            <h2><span class="bg-num">05 </span>Where can I learn more?</h2>
            <p class="initial-letter thin-i-l">
                If you are interested in understanding the code and the structure of the program,
                check out the project on Github.
            </p>
            <a class="fancy-button" href="https://github.com/Crowndev/crowncoin" target="_blank">Crown on GitHub</a>

            <p class="initial-letter thin-i-l">
                If you are interested in the community discussion and updates on Crown, it’s
                worth checking on Crown on Bitcointalk.
            </p>
            <a class="fancy-button" href="https://bitcointalk.org/index.php?topic=815487.0" target="_blank">Community discussion</a>

            <p>
                If you would like to send the development team<br>a question or idea, just send a note to
            </p>
            <a class="contact-hyperlink" href="mailto:info@crown.tech">info<br>@crown.tech</a>
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