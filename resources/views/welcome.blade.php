<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProfiXsoft</title>
    <link rel="stylesheet" href="{{ mix('/css/style.css') }}">
</head>

<body id="body">
<div class="wrapper">
    <header class="header">
        <div class="header__video">
            <video autoplay muted loop>
                <source src="/images/media/1.webm" type="video/webm">
                <source src="/images/media/1.mp4" type="video/mp4">
            </video>
        </div>
        <div class="header__top">
            <div class="container">
                <div class="header__top-inner">
                    <a class="header__logo-mobile logo" href="#body">
                        <img src="/images/icons/logos/header-logo.png" alt="Logo ProfixSoft">
                    </a>
                    <div class="header__menu">
                        <a class="header__logo logo" href="#body">
                            <img src="/images/icons/logos/header-logo.png" alt="Logo ProfixSoft">
                        </a>
                        <nav class="header__nav">
                            <ul class="header__nav-list">
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="#body">Home</a>
                                </li>
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="#about">About us</a>
                                </li>
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="#services">Services</a>
                                </li>
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="#stages">Stages</a>
                                </li>
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="#crypto">Cryptoservices</a>
                                </li>
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="#price">Price</a>
                                </li>
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="#portfolio">Portfolio</a>
                                </li>
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="#contacts">Contacts</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header__select select">
                            <select class="select__default" name="lanquage" onchange="top.location=this.value">
                                @foreach(config('languages') as $key => $value)
                                    <option class="lang-{{ strtolower($key) }}" value="{{ route('lang', ['lang' => $key]) }}" @if(App::isLocale($key)) selected @endif>{{ $value }} {{ App::getLocale() }}</option>
                                @endforeach
                            </select>
                            <button class="select__btn" type="button">
                                <div class="select__item" data-select-item="lang-en">
                                    ENG
                                    <img src="/images/icons/lang/lang-usa.png" alt="en">
                                </div>
                            </button>
                            <ul class="select__dropdown">
                                <li class="select__item" data-select-item="lang-ru">
                                    RUS
                                    <img src="/images/icons/lang/lang-rus.png" alt="ru">
                                </li>
                                <li class="select__item" data-select-item="lang-en">
                                    ENG
                                    <img src="/images/icons/lang/lang-usa.png" alt="en">
                                </li>
                                <li class="select__item" data-select-item="lang-es">
                                    ESP
                                    <img src="/images/icons/lang/lang-esp.png" alt="es">
                                </li>
                                <li class="select__item" data-select-item="lang-ar">
                                    العربية
                                    <img src="/images/icons/lang/lang-ara.png" alt="ar">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a class="header__burger burger" href="#">
                <div class="burger__inner">
                    <span></span>
                </div>
            </a>
        </div>
        <section class="header__hero home-hero">
            <div class="container">
                <div class="home-hero__inner">
                    <h1 class="home-hero__title">
              <span>
                The ultimate solution
              </span>
                        for modern business
                        development
                    </h1>
                    <p class="home-hero__text">
                        The future starts now, the future starts with crypto.
                        Revolution your business by integrating blockchain
                        solutions into your day-to-day activity.
                    </p>
                </div>
            </div>
        </section>
    </header>
    <main class="main">
        <div class="main__action-row action-row">
            <div class="container">
                <div class="action-row__inner">
                    <ul class="action-row__list">
                        <li class="action-row__item">
                            <h5 class="action-row__item-title">
                                Software Development
                            </h5>
                            <p class="action-row__item-text">
                                Full & integrated services for web & app development. Custom tech strategy.
                            </p>
                        </li>
                        <li class="action-row__item">
                            <h5 class="action-row__item-title">
                                Maintenance & Updates
                            </h5>
                            <p class="action-row__item-text">
                                Latest FinTech solutions. Constant support and up-to-date tactics to obtain the best results.
                            </p>
                        </li>
                        <li class="action-row__item">
                            <h5 class="action-row__item-title">
                                Technology For Crypto Development
                            </h5>
                            <p class="action-row__item-text">
                                Enter gloriously the crypto era: attract more customers and scale your results through technology.
                            </p>
                        </li>
                        <li class="action-row__item">
                            <a class="action-row__btn" href="#">
                                <h5 class="action-row__item-title">
                                    Get Started
                                </h5>
                                <p class="action-row__item-text">
                                    Step up with the ultimate software solutions to meet all your customers’ and team members’ needs.
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="main__about about" id="about">
            <div class="about__video">
                <video autoplay muted loop>
                    <source src="/images/media/2.webm" type="video/webm">
                    <source src="/images/media/2.mp4" type="video/mp4">
                </video>
            </div>
            <div class="container">
                <div class="about__inner">
                    <div class="about__heading heading">
                        <h3 class="heading__subtitle">ABOUT uS</h3>
                        <h2 class="heading__title">
                            Discover our revolutionary technology <br> for revolutionary results
                        </h2>
                    </div>
                    <div class="about__text">
                        <p class="about__p">
                            Being crypto passionates from the very beginning, we have turnedour passion into a successful. worldwide
                            recognized business. Starting with our own crypto company, our team has now the experience and knowledge
                            to deliver top-notch services to digitize any company yin the world. Our mission is to help other do the
                            same and be at least as successful as we are now.
                        </p>
                        <p class="about__p">
                            Our vision is to help every entrepreneur successful integrate blockchain technology into their business
                            so they can develop their company to the maximum. In short, we offer the maximum of security, quality
                            and professionalism with a minimum of investments.
                        </p>
                        <p class="about__p">
                            Nowadays, technology has become part of our lives. For entrepreneurs, keeping pace with these changes is
                            crucial. We are sure you too want to be up-to-date so you can remain a top decision for your clients.
                        </p>
                        <p class="about__p">
                            We have the solution: complete software development and design so you can accelerate your company’s
                            growth and scale the results. Process automation, data management, high-level security – one team,
                            everything you need.
                        </p>
                    </div>
                    <a class="about__btn empty-btn" href="#">Lets talk</a>
                </div>
            </div>
        </section>
        <section class="main__services services" id="services">
            <div class="container">
                <div class="services__inner">
                    <div class="services__heading heading">
                        <h3 class="heading__subtitle">Services</h3>
                        <h2 class="heading__title">
                            You have a request, <br> we have the best solution
                        </h2>
                    </div>
                    <div class="services__swiper">
                        <div class="swiper-wrapper">
                            <div class="services__slide swiper-slide icon-card">
                                <img src="/images/icons/services/1.png" alt="">
                                <h6 class="icon-card__title">Software Development</h6>
                                <p class="icon-card__text">
                                    Benefit from innovative software solutions to help you improve service quality, increase
                                    flexibility, and raise efficiency.
                                </p>
                            </div>
                            <div class="services__slide swiper-slide icon-card">
                                <img src="/images/icons/services/2.png" alt="">
                                <h6 class="icon-card__title">Web Development</h6>
                                <p class="icon-card__text">
                                    Build, design, and maintain
                                    your website with the help of a specialized team. Discover the ideal solution to accomplish your
                                    goals through modern technology.
                                </p>
                            </div>
                            <div class="services__slide swiper-slide icon-card">
                                <img src="/images/icons/services/3.png" alt="">
                                <h6 class="icon-card__title">Mobile Apps (Android & IOS)</h6>
                                <p class="icon-card__text">
                                    Full-cycle app development built for both Android and iOS
                                    to help you reach your customers right where they are.
                                </p>
                            </div>
                            <div class="services__slide swiper-slide icon-card">
                                <img src="/images/icons/services/4.png" alt="">
                                <h6 class="icon-card__title">Design & Implementation</h6>
                                <p class="icon-card__text">
                                    User-friendly and intuitive interface for your website and apps so you can take your business game
                                    to the next level.
                                </p>
                            </div>
                            <div class="services__slide swiper-slide icon-card">
                                <img src="/images/icons/services/5.png" alt="">
                                <h6 class="icon-card__title">Design & Implementation</h6>
                                <p class="icon-card__text">
                                    User-friendly and intuitive interface for your website and apps so you can take your business game
                                    to the next level.
                                </p>
                            </div>
                        </div>
                        <a class="services__prev swiper-button-prev" href="#"></a>
                        <a class="services__next swiper-button-next" href="#"></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="main__stages stages" id="stages">
            <div class="container">
                <div class="stages__inner">
                    <div class="stages__heading heading">
                        <h3 class="heading__subtitle">Stages</h3>
                        <h2 class="heading__title">
                            Algorithm of the best <br> software solution
                        </h2>
                    </div>
                    <ol class="stages__list">
                        <li class="stages__item">
                            <div class="stages__item-num">1</div>
                            <div class="stages__item-body">
                                <h5 class="stages__item-title">
                                    Planning
                                </h5>
                                <p class="stages__item-text">
                                    Once we have all details about your business idea, we will develop a personalized action plan to
                                    successfully meet all your needs.
                                </p>
                            </div>
                        </li>
                        <li class="stages__item">
                            <div class="stages__item-num">2</div>
                            <div class="stages__item-body">
                                <h5 class="stages__item-title">
                                    Pricing and Deadlines
                                </h5>
                                <p class="stages__item-text">
                                    Our team of experts wil establish the strategy and you will be informed about pricing and deadlines
                                    so you can have a clear overview of our entire activity.
                                </p>
                            </div>
                        </li>
                        <li class="stages__item">
                            <div class="stages__item-num">3</div>
                            <div class="stages__item-body">
                                <h5 class="stages__item-title">
                                    Developing
                                </h5>
                                <p class="stages__item-text">
                                    After all these details have been put in place, we start working and you will receive constant
                                    updates on our progress.
                                </p>
                            </div>
                        </li>
                        <li class="stages__item">
                            <div class="stages__item-num">4</div>
                            <div class="stages__item-body">
                                <h5 class="stages__item-title">
                                    Testing
                                </h5>
                                <p class="stages__item-text">
                                    Once we have all details about your business idea, we will develop a personalized action plan to
                                    successfully meet all your needs.
                                </p>
                            </div>
                        </li>
                        <li class="stages__item">
                            <div class="stages__item-num">5</div>
                            <div class="stages__item-body">
                                <h5 class="stages__item-title">
                                    Support
                                </h5>
                                <p class="stages__item-text">
                                    Once we have all details about your business idea, we will develop a personalized action plan to
                                    successfully meet all your needs.
                                </p>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="main__crypto crypto" id="crypto">
            <div class="crypto__video">
                <video autoplay muted loop>
                    <source src="/images/media/3.webm" type="video/webm">
                    <source src="/images/media/3.mp4" type="video/mp4">
                </video>
            </div>
            <div class="container">
                <div class="crypto__inner">
                    <div class="crypto__heading heading">
                        <h3 class="heading__subtitle">Specialized Crypto Services</h3>
                        <h2 class="heading__title">
                            You have a request, <br> we have the best solution
                        </h2>
                    </div>
                    <ul class="crypto__grid">
                        <li class="crypto__item icon-card">
                            <img src="/images/icons/crypto-services/1.png" alt="">
                            <h6 class="icon-card__title">Crypto Coin Development</h6>
                            <p class="icon-card__text">
                                Offer your customers an alternative to traditional payments through the currency of the future by
                                creating your own coin.
                            </p>
                        </li>
                        <li class="crypto__item icon-card">
                            <img src="/images/icons/crypto-services/2.png" alt="">
                            <h6 class="icon-card__title">Wallet Creation</h6>
                            <p class="icon-card__text">
                                Offer the users the ultimate experience with a multi-layered security protocol that ensures protection
                                through constant updates.
                            </p>
                        </li>
                        <li class="crypto__item icon-card">
                            <img src="/images/icons/crypto-services/3.png" alt="">
                            <h6 class="icon-card__title">Platform Development</h6>
                            <p class="icon-card__text">
                                Be up-to-date with a platform that combines security, usability, high functionality, and a
                                user-friendly interface.
                            </p>
                        </li>
                        <li class="crypto__item icon-card">
                            <img src="/images/icons/crypto-services/4.png" alt="">
                            <h6 class="icon-card__title">Cryptocurrency Exchange Development</h6>
                            <p class="icon-card__text">
                                Cover a vast range of needs for your users by integrating your own exchange platform to allow easy and
                                fast transactions on the blockchain.
                            </p>
                        </li>
                        <li class="crypto__item icon-card">
                            <img src="/images/icons/crypto-services/5.png" alt="">
                            <h6 class="icon-card__title">KYC Integration</h6>
                            <p class="icon-card__text">
                                Security at its finest – the latest KYC form to guarantee data protection and safe
                                transactions.
                            </p>
                        </li>
                        <li class="crypto__item icon-card">
                            <img src="/images/icons/crypto-services/6.png" alt="">
                            <h6 class="icon-card__title">Multi-chain integration</h6>
                            <p class="icon-card__text">
                                The world is changing and so do the needs of your users – make sure you keep the pace by integrating
                                multiple blockchains.
                            </p>
                        </li>
                        <li class="crypto__item icon-card">
                            <img src="/images/icons/crypto-services/7.png" alt="">
                            <h6 class="icon-card__title">Smart contract</h6>
                            <p class="icon-card__text">
                                Development and implementation of your own smart contract into the newly
                                or existing platform.
                            </p>
                        </li>
                        <li class="crypto__item icon-card">
                            <img src="/images/icons/crypto-services/8.png" alt="">
                            <h6 class="icon-card__title">Automatic conversion rates</h6>
                            <p class="icon-card__text">
                                Allow the users of your platform to choose from multiple currencies depending on their preferences.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="main__price price" id="price">
            <div class="container">
                <div class="price__inner">
                    <div class="price__heading heading">
                        <h3 class="heading__subtitle">PRICe</h3>
                        <h2 class="heading__title">
                            Matching the best price <br> and perfect quality.
                        </h2>
                    </div>
                    <p class="price__text">
                        We carry out a full assessment of your project with the preparation of a detailed
                        technical specification and business plan. We are focused on long-term cooperation
                        and are interested in your commercial success, so we have fixed prices and a budget.
                    </p>
                </div>
            </div>
            <div class="price__action-row action-row">
                <div class="container">
                    <div class="action-row__inner">
                        <ul class="action-row__list">
                            <li class="action-row__item">
                                <h5 class="action-row__item-title">
                                    Business analytics
                                </h5>
                                <div class="action-row__period">
                                    Implementation period <span>14 days</span>
                                </div>
                                <div class="action-row__price">Price <span>from $700</span></div>
                            </li>
                            <li class="action-row__item">
                                <h5 class="action-row__item-title">
                                    Development & Coding
                                </h5>
                                <div class="action-row__period">
                                    Implementation period <span>14-18 days</span>
                                </div>
                                <div class="action-row__price">Price <span>from $3 900</span></div>
                            </li>
                            <li class="action-row__item">
                                <h5 class="action-row__item-title">
                                    Design & layout
                                </h5>
                                <div class="action-row__period">
                                    Implementation period <span>7-10 days</span>
                                </div>
                                <div class="action-row__price">Price <span>from $1 100</spa>
                                </div>
                            </li>
                            <li class="action-row__item">
                                <a class="action-row__btn" href="#">
                                    <h5 class="action-row__item-title">
                                        Get Started
                                    </h5>
                                    <p class="action-row__item-text">
                                        Step up with the ultimate software solutions to meet all your customers’ and team members’ needs.
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="main__portfolio portfolio" id="portfolio">
            <div class="container">
                <div class="portfolio__inner">
                    <div class="portfolio__heading heading">
                        <h3 class="heading__subtitle">Portfolio</h3>
                        <h2 class="heading__title">
                            Trusted by tens of companies over the
                            world, our work is solely based on
                            experience and tailored consultancy.
                        </h2>
                    </div>
                    <ul class="portfolio__logos">
                        <img src="/images/icons/logos/logos.png" alt="Logos of companies">
                        <!-- <li class="portfolio__logo">
                        </li> -->
                    </ul>
                </div>
            </div>
        </section>
        <section class="main__contacts contacts" id="contacts">
            <div class="container">
                <div class="contacts__inner">
                    <div class="contacts__heading">
                        <h2 class="contacts__title">
                            Задайте нам вопрос
                        </h2>
                        <p class="contacts__text">
                            Оставьте заявку, задайте вопрос и наши менеджеры
                            свяжуться с вами в ближайшее время.
                        </p>
                    </div>
                    <form class="contacts__form">
                        <input class="contacts__input" type="text" placeholder="Имя" required>
                        <input class="contacts__input" type="email" placeholder="E-mail" required>
                        <textarea class="contacts__textarea" placeholder="Ваш вопрос..." required></textarea>
                        <button class="contacts__btn btn" type="submit"><span>Отправить</spa></button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <a class="footer__logo logo" href="#body">
                    <img src="/images/icons/logos/footer-logo.png" alt="Logo ProfixSoft">
                </a>
                <div class="footer__col">
                    <h4 class="footer__title">
                        Our info
                    </h4>
                    <div class="footer__col-list">
                        <div class="footer__col-item">
                            ProfiXone Capital LLC
                        </div>
                        <div class="footer__col-item">
                            RegNo: 834 LLC 2021
                        </div>
                        <div class="footer__col-item">
                            Suite 305, Griffith Corporate Centre, P.O.Box 1510, Beachmont, Kingstown, St. Vincent
                            and the Grenadines
                        </div>
                    </div>
                </div>
                <div class="footer__col">
                    <h4 class="footer__title">
                        Quick Links
                    </h4>
                    <ul class="footer__col-list">
                        <li class="footer__col-item">
                            <a class="footer__col-link" href="#">
                                Discover the benefits
                                of guaranteed profits
                            </a>
                        </li>
                        <li class="footer__col-item">
                            <a class="footer__col-link" href="#">
                                FixOne Token
                            </a>
                        </li>
                        <li class="footer__col-item">
                            <a class="footer__col-link" href="#">
                                FixGold Token
                            </a>
                        </li>
                        <li class="footer__col-item">
                            <a class="footer__col-link" href="#">
                                What will your life look like in 5 years?
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__col">
                    <h4 class="footer__title">
                        Follow Us On
                    </h4>
                    <ul class="footer__socials">
                        <li class="footer__socials-item">
                            <a class="footer__socials-link" href="#">
                                <svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1">
                                    <g>
                                        <path
                                            d="M 16.828125 3.464844 L 14.453125 14.675781 C 14.273438 15.464844 13.804688 15.664062 13.140625 15.289062 L 9.519531 12.621094 L 7.773438 14.300781 C 7.578125 14.496094 7.417969 14.65625 7.046875 14.65625 L 7.304688 10.96875 L 14.015625 4.90625 C 14.308594 4.644531 13.953125 4.5 13.5625 4.761719 L 5.265625 9.984375 L 1.695312 8.867188 C 0.917969 8.625 0.902344 8.089844 1.855469 7.71875 L 15.828125 2.335938 C 16.472656 2.09375 17.039062 2.480469 16.828125 3.46875 Z M 16.828125 3.464844 " />
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li class="footer__socials-item">
                            <a class="footer__socials-link" href="#">
                                <svg width="11px" height="18px" viewBox="0 0 11 17" version="1.1">
                                    <g>
                                        <path
                                            d="M 9.59375 9.5625 L 10.085938 6.484375 L 7.027344 6.484375 L 7.027344 4.488281 C 7.027344 3.648438 7.453125 2.828125 8.824219 2.828125 L 10.214844 2.828125 L 10.214844 0.207031 C 10.214844 0.207031 8.953125 0 7.746094 0 C 5.230469 0 3.585938 1.472656 3.585938 4.140625 L 3.585938 6.484375 L 0.785156 6.484375 L 0.785156 9.5625 L 3.585938 9.5625 L 3.585938 17 L 7.027344 17 L 7.027344 9.5625 Z M 9.59375 9.5625 " />
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li class="footer__socials-item">
                            <a class="footer__socials-link" href="#">
                                <svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1">
                                    <g>
                                        <path
                                            d="M 17.753906 9.035156 C 17.753906 10.257812 17.730469 11.484375 17.761719 12.710938 C 17.8125 14.875 16.453125 16.546875 14.71875 17.292969 C 14.023438 17.59375 13.292969 17.75 12.535156 17.75 C 10.171875 17.753906 7.800781 17.785156 5.433594 17.738281 C 3.652344 17.703125 2.1875 16.960938 1.136719 15.488281 C 0.582031 14.714844 0.320312 13.835938 0.320312 12.882812 C 0.320312 10.363281 0.320312 7.847656 0.320312 5.328125 C 0.320312 3.269531 1.320312 1.832031 3.101562 0.898438 C 3.875 0.492188 4.714844 0.320312 5.589844 0.316406 C 7.886719 0.316406 10.183594 0.300781 12.480469 0.324219 C 14.261719 0.335938 15.75 1.019531 16.847656 2.453125 C 17.457031 3.253906 17.753906 4.175781 17.753906 5.1875 C 17.753906 6.46875 17.753906 7.75 17.753906 9.035156 Z M 1.617188 9.035156 C 1.617188 10.324219 1.617188 11.613281 1.617188 12.902344 C 1.617188 13.480469 1.75 14.019531 2.050781 14.507812 C 2.832031 15.792969 4.019531 16.417969 5.488281 16.441406 C 7.847656 16.476562 10.210938 16.457031 12.570312 16.449219 C 13.152344 16.449219 13.714844 16.328125 14.238281 16.082031 C 15.664062 15.398438 16.464844 14.3125 16.457031 12.679688 C 16.441406 10.183594 16.453125 7.6875 16.453125 5.191406 C 16.453125 4.484375 16.253906 3.839844 15.835938 3.269531 C 15.027344 2.175781 13.90625 1.636719 12.570312 1.625 C 10.214844 1.597656 7.859375 1.613281 5.503906 1.617188 C 5.003906 1.617188 4.515625 1.71875 4.046875 1.894531 C 2.753906 2.375 1.550781 3.597656 1.605469 5.394531 C 1.648438 6.609375 1.617188 7.820312 1.617188 9.035156 Z M 1.617188 9.035156 " />
                                        <path
                                            d="M 9.054688 12.761719 C 6.789062 12.761719 4.960938 10.953125 4.957031 8.703125 C 4.953125 6.488281 6.796875 4.675781 9.050781 4.675781 C 11.308594 4.671875 13.144531 6.484375 13.148438 8.714844 C 13.148438 10.945312 11.316406 12.757812 9.054688 12.761719 Z M 9.054688 11.460938 C 10.601562 11.460938 11.851562 10.226562 11.847656 8.707031 C 11.84375 7.203125 10.59375 5.972656 9.054688 5.972656 C 7.511719 5.972656 6.253906 7.199219 6.253906 8.714844 C 6.257812 10.234375 7.511719 11.464844 9.054688 11.460938 Z M 9.054688 11.460938 " />
                                        <path
                                            d="M 13.625 3.445312 C 14.097656 3.445312 14.484375 3.851562 14.484375 4.34375 C 14.480469 4.839844 14.089844 5.242188 13.617188 5.238281 C 13.148438 5.234375 12.765625 4.835938 12.765625 4.347656 C 12.761719 3.851562 13.148438 3.445312 13.625 3.445312 Z M 13.625 3.445312 " />
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li class="footer__socials-item">
                            <a class="footer__socials-link" href="#">
                                <svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1">
                                    <g>
                                        <path
                                            d="M 16.667969 0 L 1.332031 0 C 0.597656 0 0 0.578125 0 1.289062 L 0 16.714844 C 0 17.421875 0.597656 18 1.332031 18 L 16.667969 18 C 17.40625 18 18 17.421875 18 16.714844 L 18 1.289062 C 18 0.578125 17.40625 0 16.667969 0 Z M 5.457031 15.066406 L 2.738281 15.066406 L 2.738281 6.941406 L 5.457031 6.941406 Z M 4.097656 5.832031 L 4.078125 5.832031 C 3.167969 5.832031 2.578125 5.203125 2.578125 4.429688 C 2.578125 3.628906 3.183594 3.023438 4.113281 3.023438 C 5.046875 3.023438 5.617188 3.628906 5.632812 4.429688 C 5.636719 5.203125 5.046875 5.832031 4.097656 5.832031 Z M 15.261719 15.066406 L 12.546875 15.066406 L 12.546875 10.722656 C 12.546875 9.628906 12.148438 8.878906 11.164062 8.878906 C 10.410156 8.878906 9.964844 9.382812 9.773438 9.875 C 9.703125 10.039062 9.683594 10.285156 9.683594 10.527344 L 9.683594 15.066406 L 6.960938 15.066406 C 6.960938 15.066406 6.996094 7.703125 6.960938 6.941406 L 9.683594 6.941406 L 9.683594 8.09375 C 10.039062 7.542969 10.6875 6.75 12.128906 6.75 C 13.921875 6.75 15.261719 7.910156 15.261719 10.40625 Z M 9.664062 8.121094 C 9.667969 8.113281 9.671875 8.105469 9.683594 8.09375 L 9.683594 8.121094 Z M 9.664062 8.121094 " />
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li class="footer__socials-item">
                            <a class="footer__socials-link" href="#">
                                <svg width="17px" height="15px" viewBox="0 0 16 15" version="1.1">
                                    <g>
                                        <path
                                            d="M 15.269531 3.644531 C 15.09375 2.949219 14.578125 2.402344 13.925781 2.214844 C 12.742188 1.878906 8 1.878906 8 1.878906 C 8 1.878906 3.257812 1.878906 2.074219 2.214844 C 1.421875 2.402344 0.90625 2.949219 0.730469 3.644531 C 0.414062 4.902344 0.414062 7.527344 0.414062 7.527344 C 0.414062 7.527344 0.414062 10.152344 0.730469 11.414062 C 0.90625 12.109375 1.421875 12.632812 2.074219 12.816406 C 3.257812 13.15625 8 13.15625 8 13.15625 C 8 13.15625 12.742188 13.15625 13.925781 12.816406 C 14.578125 12.632812 15.09375 12.109375 15.269531 11.414062 C 15.585938 10.152344 15.585938 7.527344 15.585938 7.527344 C 15.585938 7.527344 15.585938 4.902344 15.269531 3.644531 Z M 6.449219 9.914062 L 6.449219 5.144531 L 10.414062 7.527344 Z M 6.449219 9.914062 " />
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__col">
                    <h4 class="footer__title">
                        Choose Language
                    </h4>
                    <div class="footer__select select">
                        <select class="select__default" name="lanquage" onchange="top.location=this.value">
                            @foreach(config('languages') as $key => $value)
                                <option class="lang-{{ strtolower($key) }}" value="{{ route('lang', ['lang' => $key]) }}" @if(App::isLocale($key)) selected @endif>{{ $value }} {{ App::getLocale() }}</option>
                            @endforeach
                        </select>
                        <button class="select__btn" type="button">
                            <div class="select__item" data-select-item="lang-en">
                                <img src="/images/icons/lang/lang-usa.png" alt="en">
                                English
                            </div>
                        </button>
                        <ul class="select__dropdown">
                            <li class="select__item" data-select-item="lang-ru">
                                <img src="/images/icons/lang/lang-rus.png" alt="ru">
                                Russian
                            </li>
                            <li class="select__item" data-select-item="lang-en">
                                <img src="/images/icons/lang/lang-usa.png" alt="en">
                                English
                            </li>
                            <li class="select__item" data-select-item="lang-es">
                                <img src="/images/icons/lang/lang-esp.png" alt="es">
                                Español
                            </li>
                            <li class="select__item" data-select-item="lang-ar">
                                <img src="/images/icons/lang/lang-ara.png" alt="ar">
                                العربية
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous">
</script>
<script src="{{ mix('/js/main.js') }}"></script>
</body>

</html>
