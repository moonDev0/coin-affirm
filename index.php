<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Landing page for Cryptocurrency company" />
    <meta name="author" content="Rizki Mulyawan & Jose Angel Rey" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <!-- ScrollReveal Js -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="./js/scroll-reveal.js" defer></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/favicon.svg" type="image/x-icon" />

    <!-- Styles -->
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="css/style.css">

    <title>Cryptocurrency company</title>
</head>

<body>
    <div class="main-container">
        <!-- Main header -->
        <header class="main-header">
            <div class="header-container">
                <!-- Header navbar -->
                <nav class="main-header-navbar">
                    <div class="logoimg"><div><img src="./img/logo.png" alt="CRAPPO logo" class="main-header-navbar__logo" />
                     </div> <div class="logo-txt">&nbsp; CRYPTO AFFIRM</div></div>

                    <ul class="main-header-navbar__nav">
                        <li class="main-header-navbar__nav__item">
                            <a href="#products" class="main-header-navbar__nav__link">Products</a>
                        </li>
                        <li class="main-header-navbar__nav__item">
                            <a href="#features" class="main-header-navbar__nav__link">Features</a>
                        </li>
                        <li class="main-header-navbar__nav__item">
                            <a href="#about" class="main-header-navbar__nav__link">About</a>
                        </li>
                        <li class="main-header-navbar__nav__item">
                            <a href="#contact" class="main-header-navbar__nav__link">Contact</a>
                        </li>
                    </ul>

                    <div class="main-header-navbar__login">
                        <a href="./ums" class="main-header-navbar__login__login-btn">Login</a>
                        <a href="./ums/register.php" class="main-header-navbar__login__register-btn">Register</a>
                    </div>
                </nav>

                <!-- Header content -->
                <div class="main-header-content-container">
                    <div class="main-header-content-principal">
                        <div class="discount-section">
                            <span class="discount-section__discount">75% SAVE</span>
                            <span class="discount-section__description">For the Black Friday weekend</span>
                        </div>
                        <h1 class="main-header-content-principal__title">
                            Fastest & <span>secure</span> platform to invest in
                            <span>crypto</span>
                        </h1>
                        <p class="main-header-content-principal__description">
                            Buy and sell cryptocurrencies, trusted by 10M wallets with over
                            $30 billion in transactions.
                        </p>
                        <a href="#" class="main-header-content-principal__btn">Try for FREE <i
                                class="fas fa-angle-right"></i></a>
                    </div>
                    <img src="./assets/header-assets/header-Illustration.svg" alt="" class="
                main-header-content-principal__illustration" />
                </div>
            </div>
        </header>

        <!-- Main content -->

        <main class="main-content">
            <!-- Why us section -->
            <section class="why-us-wrapper">
                <!-- Stats -->
                <div class="stats-section">
                    <div class="stats-section__reference">
                        <i class="fas fa-chart-line"></i>
                        <h3 class="stats-section__reference__title">$30B</h3>
                        <p class="stats-section__reference__description">
                            Digital Currency Exchanged
                        </p>
                    </div>
                    <div class="stats-section__reference">
                        <i class="fas fa-user"></i>
                        <h3 class="stats-section__reference__title">10M+</h3>
                        <p class="stats-section__reference__description">
                            Trusted Wallets Investor
                        </p>
                    </div>
                    <div class="stats-section__reference">
                        <i class="fas fa-globe"></i>
                        <h3 class="stats-section__reference__title">195</h3>
                        <p class="stats-section__reference__description">
                            Countries Supported
                        </p>
                    </div>
                </div>

                <!-- Why us -->
                <div class="why-us-section" id="about">
                    <div class="why-us-section__content">
                        <h2 class="why-us-section__content__title">
                            Why you should choose <span>CRYPTO AFFIRM</span>
                        </h2>
                        <p class="why-us-section__content__description">
                            Experience the next generation cryptocurrency platform. No
                            financial borders, extra fees, and fake reviews.
                        </p>
                        <a href="#" class="why-us-section__content__btn">Learn More</a>
                    </div>
                    <img src="./assets/why-us-section-assets/why-us-Illustration.svg" alt="" class="
                why-us-section__illustration          " />
                </div>

                <!-- Benefits -->
                <div class="benefits-section">
                    <h2 class="benefits-section__title">
                        Check how much you can <span>earn</span>
                    </h2>
                    <p class="benefits-section__description">
                        Let’s check your hash rate to see how much you will earn today,
                        Exercitation veniam consequat sunt nostrud amet.
                    </p>

                    <div class="card-info">
                        <h4 class="card-info__title">ESTIMATED 24 HOUR REVENUE:</h4>
                        <p class="card-info__description">0.055 130 59 ETH <span>($1275)</span></p>
                        <span class="card-info__advice">Revenue will change based on mining difficulty and Ethereumprice.</span>
                    </div>
                </div>
            </section>
            
            <section class="three-cards">
                <div><h1>hello world</h1></div>

            </section>
            <!-- Cryptocurrencies section -->
            <section class="cryptocurrencies-section" id="products">
                <h2 class="cryptocurrencies-section__title">
                    Trade securely and market the high growth cryptocurrencies.
                </h2>
                <div class="cryptocurrencies-info-cards">
                    <div class="info-card">
                        <i class="fab fa-bitcoin"></i>
                        <h3 class="info-card__title">Bitcoin <span>BTC</span></h3>
                        <p class="info-card__description">
                            Digital currency in which a record of transactions is
                            maintained.
                        </p>
                        <a href="#" class="info-card__btn">Start mining <i class="fas fa-angle-right"></i></a>
                    </div>
                    <div class="info-card">
                        <i class="fab fa-ethereum"></i>
                        <h3 class="info-card__title">Ethereum <span>ETH</span></h3>
                        <p class="info-card__description">
                            Blockchain technology to create and run decentralized digital
                            applications.
                        </p>
                        <a href="#" class="info-card__btn">Start mining <i class="fas fa-angle-right"></i></a>
                    </div>
                    <div class="info-card">
                        <img src="./assets/others/litecoin-icon.svg" alt="" class="info-card__icon" />
                        <h3 class="info-card__title">Litecoin <span>LTC</span></h3>
                        <p class="info-card__description">
                            Cryptocurrency that enables instant payments to anyone in the
                            world.
                        </p>
                        <a href="#" class="info-card__btn">Start mining <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </section>

            <!-- Features section -->
            <section class="features-section" id="features">
                <h2 class="features-section__title">
                    Market sentiments, portfolio, and run the infrastructure of your
                    choice
                </h2>

                <article class="invest-smart-article">
                    <div class="invest-smart-article__content">
                        <h3 class="invest-smart-article__content__title">Invest Smart</h3>
                        <p class="invest-smart-article__content__description">
                            Get full statistic information about the behaviour of buyers and
                            sellers will help you to make the decision.
                        </p>
                        <a href="#" class="invest-smart-article__content__btn">Learn More</a>
                    </div>

                    <img src="./assets/features-section-assets/features-section-invest.svg" alt="Crypto stats" class="invest-smart-article__graphic" />
                </article>

                <article class="detailed-stats-article">
                    <div class="detailed-stats-article__content">
                        <h3 class="detailed-stats-article__content__title">
                            Detailed Statistics
                        </h3>
                        <p class="detailed-stats-article__content__description">
                            View all mining related information in realtime, at any point at
                            any location and decide which polls you want to mine in.
                        </p>
                        <a href="#" class="detailed-stats-article__content__btn">Learn More</a>
                    </div>

                    <img src="./assets/features-section-assets/features-section-statistic.svg" alt="Detailed statistics"  class="detailed-stats-article__graphic" />
                </article>

                <article class="grow-profit-article">
                    <div class="grow-profit-article__content">
                        <h3 class="grow-profit-article__content__title">
                            Grow your profit and track your investments
                        </h3>
                        <p class="grow-profit-article__content__description">
                            Use advanced analytical tools. Clear TradingView charts let you
                            track current and historical profit investments.
                        </p>
                        <a href="#" class="grow-profit-article__content__btn">Learn More</a>
                    </div>

                    <img src="./assets/features-section-assets/features-section-table.svg" alt="Profit graphic" class="grow-profit-article__graphic" />
                </article>
            </section>
        </main>

        <!-- Call To Action -->
        <aside class="cta-section" id="contact">
            <div class="cta-section__content">
                <h3 class="cta-section__content__title">Start mining now</h3>
                <p class="cta-section__content__description">
                    Join now with CRYPTO AFFIRM to get the latest news and start mining now
                </p>
            </div>
            <div class="cta-section__subscribe">
                <input type="email" class="cta-section__subscribe__input" placeholder="Enter your email" />
                <a href="#" class="cta-section__subscribe__btn">Subscribe</a>
            </div>
        </aside>

        <!-- Main footer -->
        <footer class="main-footer">
            <div class="footer-container foot">
            <div class="logoimg"><div><img src="./img/logo.png" alt="CRAPPO logo" class="main-header-navbar__logo" />
                     </div> <div class="logo-txt">&nbsp; CRYPTO AFFIRM</div></div>
                <!-- Footer navs -->
                <nav class="main-footer-navbar">
                    <!-- Quick Link nav -->
                    <ul class="main-footer-navbar__nav">
                        <li class="main-footer-navbar__nav__item">
                            <h3 class="main-footer-navbar__nav__title">Quick Link</h3>
                        </li>
                        <li class="main-footer-navbar__nav__item">
                            <a href="#" class="main-footer-navbar__nav__link">Home</a>
                        </li>
                        <li class="main-footer-navbar__nav__item">
                            <a href="#products" class="main-footer-navbar__nav__link">Products</a>
                        </li>
                        <li class="main-footer-navbar__nav__item">
                            <a href="#about" class="main-footer-navbar__nav__link">About</a>
                        </li>
                        <li class="main-footer-navbar__nav__item">
                            <a href="#features" class="main-footer-navbar__nav__link">Features</a>
                        </li>
                        <li class="main-footer-navbar__nav__item">
                            <a href="#contact" class="main-footer-navbar__nav__link">Contact</a>
                        </li>
                    </ul>
                    <!-- Resources link -->
                    <ul class="main-footer-navbar__nav">
                        <li class="main-footer-navbar__nav__item">
                            <h3 class="main-footer-navbar__nav__title">Resources</h3>
                        </li>
                        <li class="main-footer-navbar__nav__item">
                            <a href="#" class="main-footer-navbar__nav__link">Download whitepaper</a>
                        </li>
                        <li class="main-footer-navbar__nav__item">
                            <a href="#" class="main-footer-navbar__nav__link">Smart token</a>
                        </li>
                        <li class="main-footer-navbar__nav__item">
                            <a href="#" class="main-footer-navbar__nav__link">Blockchain explorer</a>
                        </li>
                        <li class="main-footer-navbar__nav__item">
                            <a href="#" class="main-footer-navbar__nav__link">Crypto API</a>
                        </li>
                        <li class="main-footer-navbar__nav__item">
                            <a href="#" class="main-footer-navbar__nav__link">Interest</a>
                        </li>
                    </ul>
                </nav>

                <!-- Payment systems -->
                <div class="payment-systems">
                    <h3 class="payment-systems__title">
                        We accept following payment systems
                    </h3>
                    <div class="payment-systems-icons">
                        <i class="fab fa-cc-visa"></i>
                        <i class="fab fa-cc-mastercard"></i>
                        <i class="fab fa-bitcoin"></i>
                    </div>
                </div>

                <!-- Copy and social links -->
                <div class="copy-and-social">
                    <h3 class="copy-and-social__copy">
                        ©2021 CRYPTO AFFIRM. All rights reserved
                    </h3>

                    <div class="social-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Attribution footer -->
        <!-- <div class="attribution"> -->
            <!-- <p>Design by <a href="https://dribbble.com/mulyawan" target="_blank" rel="noreferrer noopener">Rizki Mulyawan</a></p>
            <p>Developed by <a href="https://github.com/Jose-Angel-Rey" target="_blank" rel="noreferrer noopener">Jose Angel Rey</a></p> -->
        <!-- </div> -->
    </div>
</body>

</html>