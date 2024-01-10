<header>
    <div class="container py-10">
        <div class="flex flex-wrap justify-between items-center">
            <a href="./" class="w-fit">
                <?= renderImg('logo.png', 'logo') ?>
            </a>

            <div class="w-fit flex flex-wrap gap-x-5">
                <a href="" class="w-fit font-bold">About Us</a>
                <a href="" class="w-fit font-bold">Services</a>
                <a href="" class="w-fit font-bold">Why Us?</a>
                <a href="" class="w-fit font-bold">Get A Quote</a>
            </div>

            <a href="#form" class="w-fit btn bg-secondary text-white rounded-lg text-lg font-bold px-7">
                Book Free Consult
            </a>
        </div>
    </div>
</header>

<section class="banner">
    <div class="container relative">
        <div class="flex justify-center">
            <div class="lg:w-7/12 text-center">
                <h1 class="font-britannic text-64 leading-tight py-16">Melbourne's Leading Bathroom Renovations</h1>
                <p class="text-base leading-loose opacity-60">
                    On Call Bathroom Renovations designs & constructs bathrooms filled with excellence and perfection.
                    From the design process through to final clean, you will be amazed by the service & quality consistency.
                </p>
                <div class="flex flex-wrap justify-center items-center pt-16">
                    <a href="#form" class="w-fit btn bg-secondary text-white rounded-lg text-lg font-bold px-7">
                        Book Free Consult
                    </a>
                    <a href="tel:<?= $phone_number ?>" class="px-7 font-bold text-lg">Call Us Today</a>
                </div>
            </div>
        </div>
    </div>
    <?= renderImg('banner.jpg', 'background', '-mt-28') ?>
</section>

<div class="container">
    <div class="flex flex-wrap justify-center">
        <div class="w-8/12 flex flex-wrap justify-between items-center">
            <div class="w-fit"><?= renderImg('partner-1.png', 'logo') ?></div>
            <div class="w-fit"><?= renderImg('partner-2.png', 'logo') ?></div>
            <div class="w-fit"><?= renderImg('partner-3.png', 'logo') ?></div>
            <div class="w-fit"><?= renderImg('partner-4.png', 'logo') ?></div>
            <div class="w-fit"><?= renderImg('partner-5.png', 'logo') ?></div>
            <div class="w-fit"><?= renderImg('partner-6.png', 'logo') ?></div>
        </div>
    </div>
</div>

<div class="container py-60">
    <div class="flex flex-wrap justify-between">
        <div class="w-5/12">
            <p class="capitalize font-britannic text-64 leading-none pt-10">We Create Luxury for your Private oasis</p>
            <p class="text-xl opacity-60 leading-loose py-16">
                Trusted with over 14 years experience & 220 bathrooms renovated. We will ensure your project runs seamlessly & only the best of products are used as well as the best quality of workmanship in Melbourne.
            </p>
            <a href="#form" class="w-fit btn bg-secondary text-white rounded-lg text-lg font-bold px-7">
                Book Free Consult
            </a>
        </div>
        <div class="w-1/2">
            <?= renderImg('private-space.jpg', 'lib') ?>
        </div>
    </div>
</div>

<section class="services">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center">
            <p class="w-fit text-64 capitalize font-britannic leading-none">Our Services</p>
            <div class="flex flex-wrap gap-x-3">
                <button type="button" id="prevArrow" class="h-[52px] w-[52px] flex justify-center items-center border-2 border-secondary rounded-lg">
                    <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 2L2 8L8 14" stroke="#C0C0C0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <button type="button" id="nextArrow" class="h-[52px] w-[52px] flex justify-center items-center bg-secondary rounded-lg">
                    <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2L8 8L2 14" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <?php
    $services = ["Bathroom<br /> Renovations", "Bathroom<br /> Remodelling", "Home<br /> Renovations", "Kitchen<br /> Renovations", "Backyard + Front Yard Renovations", "Unit<br /> Renovations"];
    ?>
    <div class="flex justify-end py-20">
        <div class="w-11/12">
            <div class="services-slider">
                <?php foreach ($services as $key => $service) : ?>
                    <div class="bg-secondary h-[640px] rounded-lg overflow-hidden relative">
                        <?= renderImg('service-' . $key + 1 . '.jpg', 'lib', 'w-full h-full object-cover') ?>
                        <div class="content absolute w-full bottom-0 px-6 pt-16 pb-6">
                            <p class="font-britannic text-4xl text-center"><?= $service ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="pt-44">
    <div class="container">
        <div class="flex flex-wrap justify-center">
            <div class="w-9/12 text-center flex flex-col items-center">
                <p class="text-64 capitalize font-britannic leading-none">You Dream it, we make it reality!</p>
                <p class="text-xl opacity-60 leading-loose py-14">
                    Expect seamless projects with top-notch products and skilled workmanship in Melbourne. Whether it's a bathroom revamp, kitchen upgrade, or laundry improvement, we ensure a satisfying experience. Our dedicated team offers competitive prices and unwavering commitment to your satisfaction. Contact us for a free quote today!
                </p>
                <a href="#form" class="w-fit btn bg-secondary text-white rounded-lg text-lg font-bold px-7">
                    Book Free Consult
                </a>
            </div>
        </div>
    </div>
    <?= renderImg('dream-reality.jpg', 'lib', 'w-full') ?>
</section>

<section class="py-44 bg-dark">
    <div class="container rounded-lg bg-secondary py-40 text-center recharge">
        <div class="flex flex-wrap justify-center">
            <div class="w-7/12">
                <p class="font-britannic text-64 text-white leading-none capitalize">Relax & Recharge in Luxury</p>
                <p class="text-xl leading-loose text-white py-14">
                    Transform your Melbourne bathroom into a luxury oasis of your dreams.
                    <br />
                    <b>Packages starting from $14,999.</b>
                </p>
                <div class="flex flex-wrap justify-center items-center">
                    <a href="#form" class="w-fit btn bg-secondary text-white rounded-lg text-lg font-bold px-7">
                        Book Free Consult
                    </a>
                    <a href="tel:<?= $phone_number ?>" class="px-7 text-lg text-white">Call Us Today</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form pt-60 pb-36">
    <div class="container">
        <div class="flex flex-wrap justify-between">
            <div class="w-4/12">
                <p class="font-britannic text-64 leading-none">Book a Free Onsite In-House Consultation in Melbourne</p>
            </div>
            <div class="w-7/12">
                <form action="" method="POST" class="flex flex-wrap gap-y-3">
                    <div class="w-1/2 px-1.5">
                        <input type="text" class="form-control" placeholder="Name" name="name" required />
                    </div>

                    <div class="w-1/2 px-1.5">
                        <input type="tel" class="form-control" placeholder="Contact Number" name="contact-number" required />
                    </div>

                    <div class="w-1/2 px-1.5">
                        <input type="email" class="form-control" placeholder="Email Address" name="email" required />
                    </div>

                    <div class="w-1/2 px-1.5">
                        <input type="text" class="form-control" placeholder="Suburb Postcode" name="postcode" required />
                    </div>

                    <div class="w-full px-1.5 py-10">
                        <select name="service" class="form-control">
                            <option selected disabled>Select Your Service</option>
                            <option>Bathroom Renovations</option>
                            <option>Bathroom Remodelling</option>
                            <option>Home Renovations</option>
                            <option>Kitchen Renovations</option>
                            <option>Backyard + Front Yard Renovations</option>
                            <option>Unit Renovations</option>
                        </select>
                    </div>

                    <div class="w-8/12 px-1.5">
                        <textarea class="form-control h-full" rows="5" placeholder="Message" name="message"></textarea>
                    </div>

                    <div class="w-4/12 px-1.5">
                        <label for="fileUpload" class="h-full border-2 border-tertiary rounded-lg shadow-lg w-full flex flex-col justify-center gap-x-2 items-center text-tertiary">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.55128C0 1.41839 0.91839 0.5 2.05128 0.5H17.9487C19.0816 0.5 20 1.41839 20 2.55128V18.4487C20 19.5816 19.0816 20.5 17.9487 20.5H2.05128C0.91839 20.5 0 19.5816 0 18.4487V2.55128ZM16.0316 4.39779C15.5515 3.92636 14.9005 3.66151 14.2217 3.66151C13.5428 3.66151 12.8917 3.92627 12.4116 4.3977C11.9316 4.86913 11.662 5.50855 11.662 6.17523C11.662 6.84191 11.9316 7.48123 12.4117 7.95266C12.8917 8.42401 13.5428 8.68885 14.2217 8.68885C14.9004 8.68885 15.5515 8.42401 16.0316 7.95266C16.5116 7.48123 16.7813 6.84191 16.7813 6.17523C16.7813 5.50855 16.5116 4.86922 16.0316 4.39779ZM2.82395 17.338H17.1761C17.2767 17.338 17.3686 17.2819 17.4132 17.1932C17.4577 17.1046 17.4472 16.9987 17.3861 16.9203L13.9825 12.5306C13.8393 12.3457 13.621 12.2316 13.3849 12.218C13.1488 12.2045 12.9185 12.2928 12.7543 12.4601L12.2861 12.9382C11.9872 13.2428 11.5637 13.3977 11.1347 13.3592C10.7058 13.3208 10.3178 13.0932 10.08 12.7405L7.60099 9.06035C7.534 8.96095 7.41899 8.90321 7.29768 8.90795C7.17637 8.91269 7.06644 8.97932 7.00781 9.08372L2.5922 16.9522C2.54668 17.0327 2.54806 17.1309 2.59573 17.2101C2.64333 17.2895 2.73024 17.3381 2.82395 17.338Z" fill="#C0C0C0" />
                            </svg>
                            <p class="text-lg font-bold pt-5" id="file-label">Upload Attachment</p>
                            <p class="">(Optional)</p>
                        </label>
                        <input type="file" name="uploadedFile" class="form-control" id="fileUpload">
                    </div>

                    <div class="w-full px-1.5 py-10">
                        <button type="submit" class="w-full btn bg-secondary text-white rounded-lg text-lg font-bold px-7">Get Free In-House Consultation</button>
                    </div>

                    <div class="w-full px-1.5 text-center">
                        <p class="text-tertiary flex justify-center text-lg font-bold gap-x-3">
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.5 7V5.5C13.5 2.4624 11.0376 0 8 0C4.9624 0 2.5 2.4624 2.5 5.5V7C1.12148 7 0 8.12148 0 9.5V17.5C0 18.8785 1.12148 20 2.5 20H13.5C14.8785 20 16 18.8785 16 17.5V9.5C16 8.12148 14.8785 7 13.5 7ZM9 14.2224V15.9999C9 16.5524 8.5525 16.9999 8 16.9999C7.4475 16.9999 7 16.5524 7 15.9999V14.2224C6.27352 13.7994 5.83046 12.9424 6.06148 11.9978C6.23445 11.2908 6.81148 10.7203 7.52046 10.5553C8.83342 10.2503 10.0001 11.2388 10.0001 12.4993C10.0001 13.2378 9.59552 13.8753 9.00006 14.2218L9 14.2224ZM11.0554 7H4.9444V5.05546C4.9444 3.36796 6.31236 2.00006 7.9998 2.00006C9.68724 2.00006 11.0552 3.36802 11.0552 5.05546V7H11.0554Z" fill="#C0C0C0" />
                            </svg>
                            Your Privacy is Our Priority
                        </p>
                        <p class="text-tertiary text-sm">All information provided will be kept 100% confidential & secure</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <p class="text-center uppercase font-semibold py-14 border-t border-tertiary">
            <span>COPYRIGHT© <?= date('Y') ?></span>
            <span class="font-black px-5">On Call Bathroom Renovations</span>
            <span>All Rights Reserved</span>
        </p>
    </div>
</footer>