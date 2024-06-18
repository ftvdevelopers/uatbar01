<main class="overflow-x-clip">
    <div id="loader_logo">
        <img src="<?= base_url('assets/'); ?>images/logo-mob.avif" alt="" class="w-full">
    </div>
    <section class="banner blog-ban relative">
        <div class="lazy">
            <a id="play-video" class="video-play-button" href="#" aria-label="play">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="34" viewBox="0 0 30 34" fill="none">
                        <path
                            d="M0.257812 4.98224C0.257812 1.47315 4.06236 -0.710938 7.09418 1.05497L27.5828 13.0095C30.5896 14.7618 30.5896 19.1072 27.5828 20.8618L7.09418 32.8118C4.06236 34.58 0.257812 32.3959 0.257812 28.8891V4.98224ZM25.2919 16.9345L4.80327 4.98224V28.8891L25.2919 16.9345Z"
                            fill="white" />
                    </svg>
                </span>
            </a>
        </div>

        <div id="video-overlay" class="video-overlay">
            <a class="video-overlay-close">&times;</a>
            <video muted loop class="dis-none w-full" poster="<?= base_url('assets/'); ?>images/banner.avif">
                <source src="https://ftvassets.in/frn.s3/media/videos/fashiontv-master/franchise/fnb/FTVBAR.mp4"
                    type="video/mp4">
            </video>
            <video muted loop class="lg:hidden w-full" poster="<?= base_url('assets/'); ?>images/banner.avif">
                <source src="https://ftvassets.in/frn.s3/media/videos/fashiontv-master/franchise/fnb/FTVBAR.mp4"
                    type="video/mp4">
            </video>
        </div>
        <h1>Crafting dazzling moments of luxurious indulgence.</h1>
    </section>
    <section class="intro-sec">
        <div class="bg-intro">
            <img loading="lazy" src="<?= base_url('assets/'); ?>images/bg-intro.png" alt="">
        </div>
        <div class="intro-wrap lg:flex flex-row-reverse">
            <div class="intro-cont lg:w-7/12" data-aos="fade-up">
                <h3>Introduction</h3>
                <p>
                    <span>Unravel the artistry that goes in crafting eclectic combinations of premium beverages &
                        awesome culinary delights with F Bar By FTV that’s a paradise in stylish opulence. From classic
                        Cocktails to refreshing Mocktails, indulge in a vibe of electrifying luxury that speaks volumes
                        about the depth of flavors of timeless, classic beverages. F Bar By FTV is a vision in
                        surrealistic grandeur that offers a premium destination to unwind & relax. At F Bar, every
                        cocktail is a work of art designed to tantalize taste buds & elevate the hospitality
                        experience.</span>
                    <span>Patrons can soak into the immersive surroundings, stylish decor, and a vibrant atmosphere in
                        the perfect accompaniment of exotic drinks curated by World-class Mixologists, making F Bar By
                        FTV a perfect reason for an ecstatic indulgence. Come, Join hands with one of the leading
                        International Bar Franchises, F Bar By FTV.</span>
                </p>
            </div>
            <picture class="image-wrap lg:w-5/12 zoom_out overflow-hidden">
                <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/intro-img.avif"
                    src="<?= base_url('assets/'); ?>images/resize/intro-img.avif"
                    data-set="<?= base_url('assets/'); ?>images/mob/intro-img.avif" alt=""
                    class="productImage shimmer w-full">
            </picture>
        </div>
    </section>
    <section class="usp-sec relative" data-aos="fade-up">
        <div class="usp-wrap lg:flex ">
            <div class="lg:w-1/2 p1">
                <div class="flex flex-col justify-between h-full p1-flex">
                    <h5>USP's</h5>
                    <div class="usp-cont">
                        <div class="swiper Swiper-usp">
                            <div class="swiper-wrapper" id="swip-frac">
                                <div class="swiper-slide">
                                    <h6>Luxurious Ambiance</h6>
                                    <p>F Bar By FTV offers a one-of-a-kind unique experience with its ultra-luxurious
                                        interiors, with an intrinsic World-class quality to the look & feel of the
                                        place. An exotic destination to relish the depth of flavors of premium beverages
                                        ranging from Savory to Earthy.</p>
                                </div>
                                <div class="swiper-slide">
                                    <h6>State-of-the-Art Decor</h6>
                                    <p>F Bar By FTV boasts of a stylish, state-of-the-art decor with eye-catching design
                                        elements and colorful LED patterns. Guests can relish their craft cocktails
                                        amidst a serene, high-end ambiance and cutting-edge opulence.</p>
                                </div>
                                <div class="swiper-slide">
                                    <h6>Choicest of Cocktails</h6>
                                    <p>Savor piquant delights as you choose from an assorted variety of timeless classic
                                        cocktails & mocktails, showcasing a subtle interplay of flavors, aromas &
                                        tastes. Relish the taste of eternally classic beverages with an effusion of
                                        exotic ingredients, an innovation that will impress the connoisseur within you.
                                    </p>
                                </div>
                                <div class="swiper-slide">
                                    <h6>World-Class standards in Hospitality</h6>
                                    <p>Creating unforgettable experiences for the esteemed clientele with an immaculate
                                        attention to details and providing exceptional customer services along with an
                                        integral commitment to excellence.</p>
                                </div>
                                <div class="swiper-slide">
                                    <h6>A high-end, leisure hot-spot</h6>
                                    <p>Stylish & sophisticated interiors with a sleek, modernistic and dynamic decor
                                        appealing to the next-millennium generation is the hallmark of F Bars. An
                                        eclectic vibe of luxury, classic signature drinks and culinary haute couture
                                        make F Bar By FTV a favorite, leisure spot perfect to unwind, relax and
                                        chill-out with friends and family over a couple of drinks.</p>
                                </div>
                            </div>
                            <div class="flex items-center prog-nav">
                                <div class="relative usp-pag-wrap">
                                    <div class="swiper-pagination rounded-full"></div>
                                </div>
                                <div id="fraction" class="swiper-fraction"></div>
                            </div>
                            <div class="usp-swip-btn flex relative">
                                <button class="swiper-usp-prev">
                                    <img src="<?= base_url('assets/'); ?>images/arrow-left.avif" alt="" class="w-full">
                                </button>
                                <button class="swiper-usp-next">
                                    <img src="<?= base_url('assets/'); ?>images/arrow-right.avif" alt="" class="w-full">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full" viewBox="0 0 787 1265" fill="none">
                        <g opacity="0.52">
                            <path
                                d="M299.722 537.863L456.368 537.264V578.336H300.439H299.859V578.916V1222.02V1222.6H300.439H456.368V1263.76H1.31468V1222.6H149.687H150.268V1222.02V578.916V578.336H149.687H1.31468V537.262H149.687H150.268V536.682V446.657C150.268 289.632 184.545 178.164 241.933 105.963C299.305 33.7814 379.832 0.775614 472.509 0.775614C510.126 0.775614 550.487 9.01264 581.423 28.027C612.334 47.0257 633.834 76.7758 633.834 119.89C633.834 138.006 624.285 153.004 610.618 163.493C596.945 173.986 579.192 179.929 562.906 179.929C536.912 179.929 517.248 171.258 504.075 156.472C490.893 141.676 484.152 120.689 484.152 95.9523C484.152 86.4594 487.622 81.1172 491.317 75.4263C491.476 75.1817 491.635 74.9364 491.795 74.6902C495.687 68.6778 499.624 62.1304 499.624 50.0401C499.624 48.6953 499.02 47.5181 498.018 46.5067C497.024 45.5029 495.617 44.6399 493.938 43.8913C490.578 42.3937 485.991 41.2941 481.023 40.49C471.074 38.88 459.437 38.4305 452.63 38.4305C405.994 38.4305 367.595 65.2549 340.887 115.052C314.189 164.831 299.139 237.61 299.139 329.697V537.283V537.866L299.722 537.863Z"
                                stroke="url(#paint0_linear_4410_28)" stroke-width="1.1606" />
                            <path
                                d="M785.563 555.055C785.563 568.073 781.502 580.801 773.89 591.629C766.278 602.458 755.455 610.903 742.787 615.891C730.119 620.878 716.178 622.185 702.728 619.642C689.277 617.099 676.926 610.823 667.235 601.612C657.544 592.4 650.948 580.667 648.276 567.899C645.604 555.131 646.975 541.897 652.217 529.868C657.459 517.839 666.339 507.55 677.737 500.311C689.136 493.072 702.54 489.205 716.254 489.205C734.645 489.205 752.278 496.151 765.274 508.503C778.269 520.855 785.563 537.601 785.563 555.055Z"
                                stroke="url(#paint1_linear_4410_28)" stroke-width="1.1606" />
                        </g>
                        <defs>
                            <linearGradient id="paint0_linear_4410_28" x1="317.574" y1="0.195312" x2="317.574"
                                y2="1264.34" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_4410_28" x1="716.254" y1="488.625" x2="716.254"
                                y2="621.489" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="lg:w-5/12 p2">
                <div class="swiper Swiper-usp1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <picture class="image-wrap">
                                <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/usp-img1.avif"
                                    src="<?= base_url('assets/'); ?>images/resize/usp-img1.avif"
                                    data-set="<?= base_url('assets/'); ?>images/mob/usp-img1.avif" alt=""
                                    class="productImage shimmer w-full">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture class="image-wrap">
                                <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/usp-img1.avif"
                                    src="<?= base_url('assets/'); ?>images/resize/usp-img1.avif"
                                    data-set="<?= base_url('assets/'); ?>images/mob/usp-img1.avif" alt=""
                                    class="productImage shimmer w-full">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture class="image-wrap">
                                <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/usp-img1.avif"
                                    src="<?= base_url('assets/'); ?>images/resize/usp-img1.avif"
                                    data-set="<?= base_url('assets/'); ?>images/mob/usp-img1.avif" alt=""
                                    class="productImage shimmer w-full">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture class="image-wrap">
                                <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/usp-img1.avif"
                                    src="<?= base_url('assets/'); ?>images/resize/usp-img1.avif"
                                    data-set="<?= base_url('assets/'); ?>images/mob/usp-img1.avif" alt=""
                                    class="productImage shimmer w-full">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture class="image-wrap">
                                <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/usp-img1.avif"
                                    src="<?= base_url('assets/'); ?>images/resize/usp-img1.avif"
                                    data-set="<?= base_url('assets/'); ?>images/mob/usp-img1.avif" alt=""
                                    class="productImage shimmer w-full">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-diam">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-full" viewBox="0 0 733 749" fill="none">
                <g opacity="0.44">
                    <path d="M1.33002 254.945L478.945 748.35L956.795 254.945L711.206 1.36066H247.152L1.33002 254.945Z"
                        stroke="white" stroke-width="0.861936" />
                    <path
                        d="M492.759 268.496L540.726 268.313V280.812H492.979H492.756V281.034V478.145V478.368H492.979H540.726V490.894H401.341V478.368H446.773H446.996V478.145V281.034V280.812H446.773H401.341V268.312H446.773H446.996V268.09V240.497C446.996 192.374 457.501 158.221 475.081 136.102C492.656 113.99 517.324 103.879 545.718 103.879C557.242 103.879 569.604 106.402 579.077 112.225C588.54 118.041 595.12 127.146 595.12 140.343C595.12 145.878 592.203 150.463 588.022 153.672C583.839 156.882 578.407 158.7 573.425 158.7C565.468 158.7 559.454 156.047 555.426 151.526C551.395 147.001 549.331 140.58 549.331 133.006C549.331 130.11 550.388 128.482 551.521 126.738C551.569 126.663 551.618 126.588 551.667 126.513C552.862 124.667 554.073 122.652 554.073 118.934C554.073 118.507 553.882 118.135 553.568 117.819C553.258 117.506 552.821 117.239 552.304 117.008C551.269 116.547 549.859 116.209 548.335 115.963C545.282 115.469 541.713 115.331 539.625 115.331C525.311 115.331 513.529 123.566 505.337 138.839C497.149 154.105 492.536 176.42 492.536 204.649V268.274V268.497L492.759 268.496Z"
                        stroke="white" stroke-width="0.444648" />
                    <path
                        d="M641.628 273.72C641.628 277.701 640.386 281.593 638.058 284.905C635.73 288.216 632.42 290.799 628.545 292.325C624.67 293.851 620.405 294.25 616.291 293.473C612.177 292.695 608.399 290.775 605.435 287.958C602.471 285.14 600.454 281.552 599.637 277.648C598.82 273.743 599.239 269.697 600.842 266.018C602.445 262.34 605.161 259.193 608.647 256.979C612.134 254.764 616.234 253.582 620.429 253.582C626.055 253.582 631.448 255.706 635.423 259.484C639.397 263.262 641.628 268.383 641.628 273.72Z"
                        stroke="white" stroke-width="0.444648" />
                </g>
            </svg>
        </div>
    </section>
    <section class="video-break blog-ban">
        <!-- <picture class="image-wrap vid-break-div">
            <img data-src="<?= base_url('assets/'); ?>images/video-break.avif"
                src="<?= base_url('assets/'); ?>images/resize/video-break.avif" alt=""
                data-set="<?= base_url('assets/'); ?>images/mob/video-break.avif" class="productImage shimmer w-full">
        </picture> -->
        <video muted loop autoplay playsinline defaultmuted preload="auto" class="dis-none w-full"
            poster="<?= base_url('assets/'); ?>images/video-break.avif">
            <source src="https://ftvbar.in/assets/website/media/videos/video-book/intro.mp4" type="video/mp4">
        </video>
        <video muted loop autoplay playsinline defaultmuted preload="auto" class="lg:hidden w-full h-full object-cover"
            poster="<?= base_url('assets/'); ?>images/video-break.avif">
            <source src="https://ftvbar.in/assets/website/media/videos/video-book/intro.mp4" type="video/mp4">
        </video>
        <h1>Achieve business excellence with F Bar By FTV where luxury merges seamlessly with cocktail artistry.</h1>
    </section>
    <section class="franc-sec" data-aos="fade-up">
        <div class="head">
            <h4>Our Franchise</h4>
            <p>Introducing a new era of nighttime indulgence,</p>
        </div>
        <div class="swiper swip-franc">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <picture class="image-wrap">
                        <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/franc1.avif"
                            src="<?= base_url('assets/'); ?>images/resize/franc1.avif" alt=""
                            data-set="<?= base_url('assets/'); ?>images/mob/franc1.avif"
                            class="productImage shimmer w-full">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture class="image-wrap">
                        <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/franc2.avif"
                            src="<?= base_url('assets/'); ?>images/resize/franc2.avif" alt=""
                            data-set="<?= base_url('assets/'); ?>images/mob/franc2.avif"
                            class="productImage shimmer w-full">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture class="image-wrap">
                        <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/franc3.avif"
                            src="<?= base_url('assets/'); ?>images/resize/franc3.avif" alt=""
                            data-set="<?= base_url('assets/'); ?>images/mob/franc3.avif"
                            class="productImage shimmer w-full">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture class="image-wrap">
                        <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/franc1.avif"
                            src="<?= base_url('assets/'); ?>images/resize/franc1.avif" alt=""
                            data-set="<?= base_url('assets/'); ?>images/mob/franc1.avif"
                            class="productImage shimmer w-full">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture class="image-wrap">
                        <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/franc2.avif"
                            src="<?= base_url('assets/'); ?>images/resize/franc2.avif" alt=""
                            data-set="<?= base_url('assets/'); ?>images/mob/franc2.avif"
                            class="productImage shimmer w-full">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture class="image-wrap">
                        <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/franc3.avif"
                            src="<?= base_url('assets/'); ?>images/resize/franc3.avif" alt=""
                            data-set="<?= base_url('assets/'); ?>images/mob/franc3.avif"
                            class="productImage shimmer w-full">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-blog" data-aos="fade-up">
        <h2>Blogs</h2>
        <div class="swiper swip-blog" data-aos="fade-left">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <picture class="image-wrap">
                        <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/blog-img.avif"
                            src="<?= base_url('assets/'); ?>images/resize/blog-img.avif" alt=""
                            data-set="<?= base_url('assets/'); ?>images/mob/blog-img.avif"
                            class="productImage shimmer w-full">
                    </picture>
                    <date>24 May 2024</date>
                    <bh>Introducing a new era of nighttime indulgence, FashionTV proudly presents its premier</bh>
                    <p>Introducing a new era of nighttime indulgence, FashionTV proudly presents its premier line of
                        exquisite sleepwear for licensing. </p>
                </div>
                <div class="swiper-slide">
                    <picture class="image-wrap">
                        <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/blog-img.avif"
                            src="<?= base_url('assets/'); ?>images/resize/blog-img.avif" alt=""
                            data-set="<?= base_url('assets/'); ?>images/mob/blog-img.avif"
                            class="productImage shimmer w-full">
                    </picture>
                    <date>24 May 2024</date>
                    <bh>Introducing a new era of nighttime indulgence, FashionTV proudly presents its premier</bh>
                    <p>Introducing a new era of nighttime indulgence, FashionTV proudly presents its premier line of
                        exquisite sleepwear for licensing. </p>
                </div>
                <div class="swiper-slide">
                    <picture class="image-wrap">
                        <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/blog-img.avif"
                            src="<?= base_url('assets/'); ?>images/resize/blog-img.avif" alt=""
                            data-set="<?= base_url('assets/'); ?>images/mob/blog-img.avif"
                            class="productImage shimmer w-full">
                    </picture>
                    <date>24 May 2024</date>
                    <bh>Introducing a new era of nighttime indulgence, FashionTV proudly presents its premier</bh>
                    <p>Introducing a new era of nighttime indulgence, FashionTV proudly presents its premier line of
                        exquisite sleepwear for licensing. </p>
                </div>
                <div class="swiper-slide">
                    <picture class="image-wrap">
                        <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/blog-img.avif"
                            src="<?= base_url('assets/'); ?>images/resize/blog-img.avif" alt=""
                            data-set="<?= base_url('assets/'); ?>images/mob/blog-img.avif"
                            class="productImage shimmer w-full">
                    </picture>
                    <date>24 May 2024</date>
                    <bh>Introducing a new era of nighttime indulgence, FashionTV proudly presents its premier</bh>
                    <p>Introducing a new era of nighttime indulgence, FashionTV proudly presents its premier line of
                        exquisite sleepwear for licensing. </p>
                </div>
                <div class="swiper-slide">
                    <picture class="image-wrap">
                        <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/blog-img.avif"
                            src="<?= base_url('assets/'); ?>images/resize/blog-img.avif" alt=""
                            data-set="<?= base_url('assets/'); ?>images/mob/blog-img.avif"
                            class="productImage shimmer w-full">
                    </picture>
                    <date>24 May 2024</date>
                    <bh>Introducing a new era of nighttime indulgence, FashionTV proudly presents its premier</bh>
                    <p>Introducing a new era of nighttime indulgence, FashionTV proudly presents its premier line of
                        exquisite sleepwear for licensing. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-sec">
        <div class="relative">
            <picture class="image-wrap" id="cta-img">
                <div class="reveal-right-alpha overflow-hidden">
                    <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/cta-img.avif"
                        src="<?= base_url('assets/'); ?>images/resize/cta-img-mob.avif" alt=""
                        data-set="<?= base_url('assets/'); ?>images/mob/cta-img-mob.avif"
                        class="productImage shimmer w-full cta-img">
                </div>
            </picture>
            <div class="f-icon">
                <img loading="lazy" data-src="<?= base_url('assets/'); ?>images/fcta-ico.avif"
                    src="<?= base_url('assets/'); ?>images/resize/fcta-ico.avif"
                    data-set="<?= base_url('assets/'); ?>images/mob/fcta-ico.avif" alt="" class="productImage w-full">
            </div>
            <div class="cta-cont">
                <div data-aos="fade-up">
                    <h4>Experience the confluence of style, luxury and a classic bar business</h4>
                    <!-- <p>Introducing a new era of nighttime indulgence, FashionTV proudly presents its premier line of
                    exquisite sleepwear for licensing. </p> -->
                    <a href="<?= base_url('contact'); ?>">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
</main>