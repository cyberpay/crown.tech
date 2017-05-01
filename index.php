<?php include "./include/header.php"; ?>

<main role="main" class="hp">

    <div class="content">

        <span class="title">introducing crown</span>
        <h1 data-text="A Digital Commodity &#38; Application Platform">A Digital Commodity &#38; Application Platform</h1>

        <?php include "./include/statistics.php"; ?>
        <div class="market-cap">
            <div class="label">market cap:</div>
            <div class="val"><?php echo number_format($market_cap, 0, ',', ' '); ?></div>
            <div class="unit">USD</div>
        </div>

        <a class="fancy-button" href="<?php echo $root ?>about-crown">learn more</a>

    </div>

    <div class="round-container">
        <div class="round"></div>
        <div class="rotating">
            <div class="labels">
                <span class="label" data-pos="1" data-val="0">price</span>
                <span class="label active" data-pos="2" data-val="1">market cap</span>
                <span class="label" data-pos="3" data-val="2">trons</span>
                <span class="label" data-pos="4" data-val="3">available supply</span>
                <span class="label" data-pos="5"></span>
                <span class="label" data-pos="6"></span>
                <span class="label" data-pos="7"></span>
                <span class="label" data-pos="8"></span>
                <span class="label" data-pos="9"></span>
                <span class="label" data-pos="10"></span>
                <span class="label" data-pos="11"></span>
                <span class="label" data-pos="12" data-val="4">total supply</span>
            </div>
            <div class="points">
                <span class="point"></span>
                <span class="point"></span>
                <span class="point"></span>
                <span class="point"></span>
                <span class="point"></span>
                <span class="point"></span>
                <span class="point"></span>
                <span class="point"></span>
                <span class="point"></span>
                <span class="point"></span>
                <span class="point"></span>
                <span class="point"></span>
            </div>
        </div>
        <div class="value" data-val="0">
            <span class="unit">USD</span>
            <span class="val"><?php echo $crw_usd_price; ?></span>
        </div>
        <div class="value active" data-val="1">
            <span class="unit">USD</span>
            <span class="val"><?php echo number_format($market_cap, 0, ',', ' '); ?></span>
        </div>
        <div class="value" data-val="2">
            <span class="unit">&nbsp;</span>
            <span class="val"><?php echo $t; ?></span>
        </div>
        <div class="value" data-val="3">
            <span class="unit">CRW</span>
            <span class="val"><?php echo number_format($avasupply, 0, ',', ' '); ?></span>
        </div>
        <div class="value" data-val="4">
            <span class="unit">CRW</span>
            <span class="val">42&nbsp;000&nbsp;000</span>
        </div>
    </div>

    <ul class="bg-layers">
        <li class="layer castle" data-depth=".03">
            <img class="center-right background" src="./media/graphic/background/hp-castle.jpg" alt="background">
        </li>
        <li class="layer knight" data-depth=".2"><img src="./media/graphic/background/knight.png" alt="background knight" class="bottom-right"></li>
    </ul>

    <?php include "./include/values_bottom.php"; ?>

</main>

<footer class="bottom hp">
    <?php include "./include/footer-compact.php"; ?>
</footer>

<?php include "./include/footer-def.php"; ?>
<script src="./js/jquery.parallax.min.js" type="application/javascript"></script>
<script> $(".bg-layers").parallax();</script>
