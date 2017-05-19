<?php include "./include/header.php"; ?>

    <main role="main" class="default">
        <?php include "./include/bg1.php"; ?>

        <div class="content">

            <div class="col-4-1 col-3-1-md col-full-width-sm sidebar">
                <h1 class="small" data-text="Crown Wallet">Crown Wallet</h1>

                <?php include "./include/soc-sites.php" ?>

                <h3 class="md-up-only">Download our wallet and start using Crown</h3>

            </div>

            <div class="col-4-3 col-3-2-md col-full-width-sm">

                <div class="col-full-width thin-content">

                    <h2>Download our wallet</h2>
                    <p>
                        The Crown wallet enables you to send and receive Crowns. Please make sure, that you always have
                        the latest version of our wallet.
                    </p>

                </div>

                <div class="light-content no-heading">
				
					<h2>Desktop Wallets</h2>

                    <div class="col-2-1 col-full-width-xs center-align">
                        <img src="./media/icons/windows.png" alt="Windows" class="windows-ico">
                        <span class="name">Windows</span>
                        <a class="button half" target="_blank" href="https://github.com/Crowndev/crowncoin/releases/download/v0.12.0.61/crown-177.3-i686-w64-mingw32.tar.gz">32 bit</a>
						<a class="button half" target="_blank" href="https://github.com/Crowndev/crowncoin/releases/download/v0.12.0.61/crown-177.4-x86_64-w64-mingw32.tar.gz">64 bit</a>
                    </div>
                    <div class="col-2-1 col-full-width-xs center-align">
                        <img src="./media/icons/linux.png" alt="Linux" class="linux-ico">
                        <span class="name">Linux</span>
                        <a class="button half" target="_blank" href="https://github.com/Crowndev/crowncoin/releases/download/v0.12.0.61/crown-177.5-i686-pc-linux-gnu.tar.gz">32 bit</a>
						<a class="button half" target="_blank" href="https://github.com/Crowndev/crowncoin/releases/download/v0.12.0.61/crown-177.6-x86_64-unknown-linux-gnu.tar.gz">64 bit</a>
                    </div>
                    <div class="col-2-1 col-full-width-xs center-align">
                        <img src="./media/icons/apple.png" alt="Mac OS" class="apple-ico">
                        <span class="name">Mac OS</span>
                        <a class="button full" target="_blank" href="https://github.com/Crowndev/crowncoin/releases/download/v0.12.0.61/crown-177.7-x86_64-apple-darwin11.tar.gz">Download</a>
                    </div>
                    <div class="col-2-1 col-full-width-xs center-align">
                        <img src="./media/icons/rpi.png" alt="Raspberry Pi" class="rpi-ico">
                        <span class="name">RPi (ARM)</span>
                        <a class="button full" target="_blank" href="https://github.com/Crowndev/crowncoin/releases/download/v0.12.0.61/crown-177.1-arm-linux-gnueabihf.tar.gz">Download</a>
                    </div>
					<div class="col-2-1 col-full-width-xs center-align">
                        <img src="./media/icons/bootstrap.png" alt="Bootstrap" class="bootstrap-ico">
                        <span class="name">Bootstrap</span>
                        <a class="button full" target="_blank" href="http://txexplorer.infernopool.com/CRWbootstrap.zip">Download</a>
                    </div>
					
					<h2>Mobile CrownPay Wallets</h2>
					
					<div class="col-2-1 col-full-width-xs center-align">
                        <img src="./media/icons/android.png" alt="Android" class="android-ico">
                        <span class="name">Android</span>
                        <a class="button full" target="_blank" href="https://play.google.com/store/apps/details?id=com.crownpay.wallet">Download</a>
                    </div>
					
					<div class="col-2-1 col-full-width-xs center-align">
                        <img src="./media/icons/apple.png" alt="iOS" class="apple-ico">
                        <span class="name">iOS</span>
                        <a class="button full" target="_blank">Coming soon!</a>
                    </div>
					
					<h2>Paper Wallet</h2>
					
                    <div class="col-2-1 col-full-width-xs center-align">
                        <img src="./media/icons/paper.png" alt="Paper" class="paper-ico">
                        <span class="name">Paper</span>
                        <a class="button full" href="./paper_wallet/index.html" target="_blank">Download</a>
                    </div>
					
					<h2>Payment Processors</h2>
					
					<div class="col-2-1 col-full-width-xs center-align">
                        <img src="./media/icons/coinpayments.png" alt="Coinpayments" class="coinpayments-ico">
                        <span class="name">CoinPayments</span>
                        <a class="button full" href="https://www.coinpayments.net/supported-coins" target="_blank">Visit Website</a>
                    </div>

                    <h2>Download and install the wallet</h2>

                    <p>
                        First of all it is necessary to download our wallet above. When you have downloaded it,
                        synchronize it with the network and block history. The synchronization time will depend on
                        the speed of your computer and your internet connection. This process is necessary to start
                        receiving or sending payments as well as mining new coins.
                    </p>

                    <h2>Check if your wallet is synchronized</h2>

                    <p>
                        If you would like to see your wallet's synchronization status, you can find it in it's bottom right corner.
                    </p>

                    <h2>Synchronize it with the Crown network</h2>
                    <p>
                        The number of blocks in the history should exceed 20000 blocks. As soon as you see a green row
                        on entire length, you are fully synchronized. In order to overcome the long process of synchronization,
                        open your wallet often or leave it open.
                    </p>

                    <h2>CRW wallet is synchronized</h2>
                    <p>
                        Congratulations! Your wallet is ready for its first transaction. Now its time for its securing.
                        This step is very important for the protections of your Crowns if somebody gets your wallet.
                    </p>

                    <h2>How to load up the Crown paper wallet</h2>

                    <iframe class="youtube" src="https://www.youtube.com/embed/4K_xe8nyAas?rel=0"></iframe>

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