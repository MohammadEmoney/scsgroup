<?php

namespace App\Traits;

trait SettingsTrait
{
    public function settings($locale = "en")
    {
        $method = $locale."Data";
        return $this->$method();
    }

    public function enData()
    {
        return [
            'header' => [
                'title' => 'Innovative Web Design Services for Your Growing Business',
                // 'title' => 'Designing the Digital Experience: Crafting Beautiful and Functional Websites',
                'sub_title' => "Transform Your Ideas into Stunning Digital Spaces with Expert Website Design",
            ],
            'about' => [
                'first_column' => "
                    <p>At Smart Code Studio, we're passionate about creating beautiful, functional websites that help businesses thrive online. With years of experience in web design and development, we have the skills and expertise to bring your vision to life and deliver a website that exceeds your expectations.</p>
                    <ul>
                        <li class=\"ri-check-double-line\">Custom website design: We create unique, customized designs that are tailored to your business and your audience.</li>
                        <li class=\"ri-check-double-line\">Responsive design: We build websites that are optimized for all devices, from desktops to smartphones.</li>
                        <li class=\"ri-check-double-line\">E-commerce design: We specialize in creating e-commerce websites that are user-friendly, secure, and optimized for sales.</li>
                    </ul>

                ",
                'second_column' => "In addition to web design, we also offer a range of other services to help your business succeed online, including website development, search engine optimization, and digital marketing.
                Whether you're a small business just starting out or a large corporation looking to revamp your online presence, we're here to help. Contact us today to learn more about our web design services and how we can help your business grow."
            ],
            'skills' => [
                'title' => '',
                'text' => "At Smart Code Studio, we have a team of skilled web designers and developers who are passionate about creating beautiful, functional websites. We have experience working with a wide range of clients, from small businesses to large corporations, and we pride ourselves on our ability to deliver high-quality work that meets our clients' needs."
            ],
            'why_us' => [
                'text' => "At Smart Code Studio, we're committed to creating beautiful, functional websites that help businesses succeed online. Here are just a few reasons why you should choose us for your web design needs:",
                'accordions' => [
                    [
                        'title' => 'Expertise and Experience',
                        'text' => 'Our team of web designers and developers has years of experience working with a wide range of clients, from small businesses to large corporations. We have expertise in all aspects of web design and development, from custom website design to e-commerce solutions to responsive design. We stay up-to-date with the latest trends and technologies in the industry, so you can be sure that your website will be cutting-edge and effective.'
                    ],
                    [
                        'title' => 'Collaborative Approach',
                        'text' => "We believe that the best results come from collaboration. That's why we work closely with our clients throughout the design and development process to ensure that we understand their needs and goals. We keep our clients informed every step of the way, and we welcome feedback and input throughout the project. This collaborative approach allows us to create websites that truly reflect our clients' brands and achieve their objectives."
                    ],
                    [
                        'title' => 'Customer Satisfaction',
                        'text' => "At Smart Code Studio, we're committed to our clients' satisfaction. We take pride in delivering high-quality work that meets our clients' needs and exceeds their expectations. We're not satisfied until our clients are satisfied, and we'll work tirelessly to ensure that every aspect of the project is completed to their satisfaction. We believe that our clients' success is our success, and we're dedicated to helping them achieve their goals."
                    ],
                ],

            ],
            'services' => [
                'text' => 'At Smart Code Studio, we offer a range of web design and development services to help businesses succeed online. Here are just a few of the services we offer:',
                'cards' => [
                    [
                        'icon' => 'bx bx-desktop',
                        'title' => 'Custom Website Design',
                        'text' => 'We specialize in creating unique, customized website designs that are tailored to your business and your audience. Our designs are visually appealing, user-friendly, and optimized for conversions.',
                    ],
                    [
                        'icon' => 'bx bx-mobile',
                        'title' => 'Responsive Design',
                        'text' => 'We build websites that are optimized for all devices, from desktops to smartphones. Our responsive designs ensure that your website looks great and functions perfectly on any device.',
                    ],
                    [
                        'icon' => 'bx bx-cart',
                        'title' => 'E-commerce Design',
                        'text' => 'We have expertise in creating e-commerce websites that are user-friendly, secure, and optimized for sales. We can help you set up an online store that drives sales and grows your business.',
                    ],
                    [
                        'icon' => 'bx bx-code',
                        'title' => 'Website Development',
                        'text' => 'We have experience with a variety of CMS platforms, including WordPress, Drupal, and Joomla, and we use these platforms to create websites that are easy to manage and update.',
                    ],
                ]
            ],
            'call_to_action' => [
                'title' => "Let's Build Your Dream Website Together",
                'text' => 'Ready to take your online presence to the next level? Let us help you create a stunning website that reflects your brand and attracts your ideal audience. Contact us today to get started'
            ],
            'portfolio' => [
                'title' => 'See Our Work in Action',
                'text' => "We take pride in our portfolio of stunning websites that we've created for our clients. Browse through our showcase and see how we've helped businesses like yours achieve online success. Get inspired and let's create something amazing together.",
            ],
            'pricing' => [
                'title' => 'Pricing',
                'text' => 'Our pricing section showcases our web design packages that cater to every business size and budget. We offer transparent pricing with no hidden fees, so you know exactly what you are paying for. Choose from our basic, standard, and premium packages and get the best value for your money.',
                'cards' => [
                    [
                        'title' => 'Basic',
                        'price' => 500,
                        'aos' => 'fade-up',
                        'aos-delay' => 100,
                        'link' => '#',
                        'items' => [
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'Custom design and development of a 5-page website',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'Mobile responsive design',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-x',
                                'text' => 'Advanced SEO optimization',
                                'available' => "na",
                            ],
                            [
                                'icon' => 'bx bx-x',
                                'text' => 'Integration of social media accounts',
                                'available' => "na",
                            ],
                        ]
                    ],
                    [
                        'title' => 'Premium',
                        'price' => 1000,
                        'aos' => 'fade-up',
                        'aos-delay' => 200,
                        'link' => '#',
                        'items' => [
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'Custom design and development of a 5-page website',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'Mobile responsive design',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'Basic SEO optimization',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'Integration of social media accounts',
                                'available' => "",
                            ],
                        ]
                    ],
                    [
                        'title' => 'E-commerce',
                        'price' => 2500,
                        'aos' => 'fade-up',
                        'aos-delay' => 300,
                        'link' => '#',
                        'items' => [
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'Custom design and development of a 5-page website',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'Mobile responsive design',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'Basic SEO optimization',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'Integration of payment gateway and shipping options',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'Product management system',
                                'available' => "",
                            ],
                        ]
                    ],
                ]
            ],
            'team' => [
                'title' => 'Team members',
                'text' => "In this section, we introduce you to our talented team of web designers who are passionate about creating stunning websites that reflect your brand's unique personality. Get to know our team members, their skills, and expertise that make them stand out in the industry.",
                'members' => [
                    [
                        'name' => 'Mohammad Imani',
                        'title' => 'Chief Executive Officer',
                        'text' => 'CEO of Smart Code Studio - Creating visually stunning and user-friendly websites for businesses.',
                        'image' => 'front/assets/img/team/team-1.jpg',
                        'twitter' => 'https://twitter.com/KiasaraeiM',
                        'facebook' => 'https://www.facebook.com/mohammad.eminay/',
                        'instagram' => 'https://www.instagram.com/Smart Code Studio.ir/',
                        'linkedin' => 'https://www.linkedin.com/in/mohammad-imani-08402417b/',
                    ],
                    [
                        'name' => 'Nader Golab',
                        'title' => 'Chief Executive Officer',
                        'text' => 'Chief Executive Officer of Smart Code Studio - Crafting exceptional websites for businesses.',
                        'image' => 'front/assets/img/team/team-2.jpg',
                        'twitter' => '#',
                        'facebook' => '#',
                        'instagram' => '#',
                        'linkedin' => '#',
                    ],
                ]
            ],
            'contact' => [
                'title' => 'Contact',
                'text' => "We make it easy for you to get in touch with us through our contact page. Whether you have a question, need a quote, or want to discuss your project requirements, our friendly and knowledgeable team is always here to help.",
                'address' => 'A108 Adam Street, New York, NY 535022',
                'email' => 'info@Smart Code Studio.ir',
                'phone' => '+98 938 1133 408',
            ],
            'newsletter' => [
                'title' => 'Join Our Newsletter',
                'text' => 'Subscribe to our newsletter and stay informed about the latest web design trends, tips, and tricks. Our newsletter also includes exclusive offers and discounts on our services, so you can get the best value for your money.'
            ],
            'footer' => [
                'contacts' => [
                    'phone' => '+98 938 1133 408',
                    'email' => 'info@scsgroup.ir',
                    'address' => 'A108 Adam Street <br>New York, NY 535022<br> United States <br><br>',
                ],
                'social_networks' => [
                    'text' => 'Smart Code Studio is a professional web design company that specializes in creating visually stunning and user-friendly websites for businesses. From custom design to e-commerce solutions, our team of experts is dedicated to delivering exceptional results.'
                ]
            ]
        ];
    }

    public function faData()
    {
        return [
            'header' => [
                'title' => 'خدمات طراحی وب نوآورانه برای کسب و کار رو به رشد شما',
                // 'title' => 'Designing the Digital Experience: Crafting Beautiful and Functional Websites',
                'sub_title' => "با طراحی وب سایت خبره، ایده های خود را به فضاهای دیجیتال خیره کننده تبدیل کنید",
            ],
            'about' => [
                'first_column' => "
                    <p>در گروه برنامه نویس هوشمند، ما مشتاق ایجاد وب‌سایت‌های زیبا و کاربردی هستیم که به رشد آنلاین کسب‌وکارها کمک می‌کنند. با سال ها تجربه در طراحی و توسعه وب، ما مهارت ها و تخصص را داریم تا دیدگاه شما را زنده کنیم و وب سایتی فراتر از انتظارات شما ارائه دهیم.</p>
                    <ul>
                        <li class=\"ri-check-double-line\">طراحی وب سایت سفارشی: ما طرح های منحصر به فرد و سفارشی را ایجاد می کنیم که متناسب با کسب و کار شما و مخاطبان شما باشد.</li>
                        <li class=\"ri-check-double-line\">طراحی واکنش گرا: ما وب سایت هایی می سازیم که برای همه دستگاه ها، از دسکتاپ گرفته تا گوشی های هوشمند، بهینه شده اند.</li>
                        <li class=\"ri-check-double-line\">طراحی تجارت الکترونیک: ما در ایجاد وب سایت های تجارت الکترونیکی که کاربر پسند، ایمن و برای فروش بهینه شده باشند، تخصص داریم.</li>
                    </ul>

                ",
                'second_column' => "علاوه بر طراحی وب، ما همچنین طیف وسیعی از خدمات دیگر را برای کمک به موفقیت کسب و کار شما به صورت آنلاین ارائه می دهیم، از جمله توسعه وب سایت، بهینه سازی موتورهای جستجو و بازاریابی دیجیتال.
                چه یک کسب‌وکار کوچک باشید که تازه شروع به کار کرده‌اید یا شرکت بزرگی باشید که به دنبال اصلاح حضور آنلاین خود هستید، ما اینجا هستیم تا به شما کمک کنیم. امروز با ما تماس بگیرید تا در مورد خدمات طراحی وب ما بیشتر بدانید و چگونه می توانیم به رشد کسب و کار شما کمک کنیم."
            ],
            'skills' => [
                'title' => 'مهارت ها',
                'text' => "در استودیوی اسمارت کد، تیمی از طراحان و توسعه دهندگان وب ماهر داریم که مشتاق ایجاد وب سایت های زیبا و کاربردی هستند. ما تجربه کار با طیف گسترده ای از مشتریان، از کسب و کارهای کوچک گرفته تا شرکت های بزرگ را داریم، و به توانایی خود در ارائه کارهای با کیفیت بالا که نیازهای مشتریانمان را برآورده می کند، افتخار می کنیم."
            ],
            'why_us' => [
                'text' => "در گروه برنامه نویسی هوشمند، ما متعهد به ایجاد وب‌سایت‌های زیبا و کاربردی هستیم که به کسب‌وکارها به موفقیت آنلاین کمک می‌کنند. در اینجا فقط چند دلیل وجود دارد که چرا باید ما را برای نیازهای طراحی وب خود انتخاب کنید:",
                'accordions' => [
                    [
                        'title' => 'تخصص و تجربه',
                        'text' => 'تیم طراحان و توسعه دهندگان وب ما سال ها تجربه کار با طیف گسترده ای از مشتریان، از مشاغل کوچک گرفته تا شرکت های بزرگ را دارند. ما در تمام جنبه های طراحی و توسعه وب، از طراحی وب سایت سفارشی گرفته تا راه حل های تجارت الکترونیک و طراحی واکنش گرا، تخصص داریم. ما با آخرین روندها و فناوری های صنعت به روز می مانیم، بنابراین می توانید مطمئن باشید که وب سایت شما پیشرفته و موثر خواهد بود.'
                    ],
                    [
                        'title' => 'رویکرد مشارکتی',
                        'text' => "ما معتقدیم که بهترین نتایج حاصل همکاری است. به همین دلیل است که ما در طول فرآیند طراحی و توسعه با مشتریان خود همکاری نزدیک داریم تا اطمینان حاصل کنیم که نیازها و اهداف آنها را درک می کنیم. ما مشتریان خود را در هر مرحله از راه آگاه می کنیم و از بازخورد و ورودی در طول پروژه استقبال می کنیم. این رویکرد مشارکتی به ما اجازه می دهد تا وب سایت هایی ایجاد کنیم که واقعاً نشان دهنده مارک های مشتریان ما باشد و به اهداف آنها دست یابیم."
                    ],
                    [
                        'title' => 'رضایت مشتری',
                        'text' => "در گروه برنامه نویسی هوشمند، ما متعهد به رضایت مشتریان خود هستیم. ما مفتخریم که کارهایی با کیفیت بالا ارائه می کنیم که نیازهای مشتریان ما را برآورده می کند و فراتر از انتظارات آنهاست. ما تا زمانی که مشتریان خود راضی نشوند راضی نیستیم و به طور خستگی ناپذیر تلاش خواهیم کرد تا اطمینان حاصل کنیم که هر جنبه ای از پروژه با رضایت آنها تکمیل می شود. ما بر این باوریم که موفقیت مشتریان ما موفقیت ماست و ما به آنها کمک می کنیم تا به اهداف خود برسند."
                    ],
                ],

            ],
            'services' => [
                'text' => 'در گروه برنامه نویسی هوشمند، ما طیف وسیعی از خدمات طراحی و توسعه وب را برای کمک به موفقیت کسب‌وکارهای آنلاین ارائه می‌کنیم. در اینجا فقط تعدادی از خدماتی که ارائه می دهیم آورده شده است:',
                'cards' => [
                    [
                        'icon' => 'bx bx-desktop',
                        'title' => 'طراحی وب سایت سفارشی',
                        'text' => 'ما در ایجاد طراحی های منحصر به فرد و سفارشی وب سایت که متناسب با کسب و کار و مخاطبان شما هستند، تخصص داریم. طرح های ما از نظر بصری جذاب، کاربرپسند و برای تبدیل بهینه شده اند.',
                    ],
                    [
                        'icon' => 'bx bx-mobile',
                        'title' => 'طراحی تعاملی',
                        'text' => 'ما وب‌سایت‌هایی می‌سازیم که برای همه دستگاه‌ها، از رایانه‌های رومیزی گرفته تا تلفن‌های هوشمند، بهینه‌سازی شده‌اند. طراحی های واکنش گرا ما تضمین می کند که وب سایت شما عالی به نظر می رسد و در هر دستگاهی کاملاً کار می کند.',
                    ],
                    [
                        'icon' => 'bx bx-cart',
                        'title' => 'طراحی تجارت الکترونیک',
                        'text' => 'ما در ایجاد وب سایت های تجارت الکترونیکی که کاربر پسند، ایمن و برای فروش بهینه شده باشند، تخصص داریم. ما می توانیم به شما کمک کنیم تا یک فروشگاه آنلاین راه اندازی کنید که باعث فروش و رشد کسب و کار شما می شود.',
                    ],
                    [
                        'icon' => 'bx bx-code',
                        'title' => 'توسعه وب سایت',
                        'text' => 'ما با انواع پلتفرم های CMS از جمله وردپرس، دروپال و جوملا تجربه داریم و از این پلتفرم ها برای ایجاد وب سایت هایی استفاده می کنیم که مدیریت و به روز رسانی آسانی دارند.',
                    ],
                ]
            ],
            'call_to_action' => [
                'title' => "بیایید با هم وب سایت رویایی خود را بسازیم",
                'text' => 'آماده اید تا حضور آنلاین خود را به سطح بعدی ببرید؟ اجازه دهید به شما کمک کنیم یک وب سایت خیره کننده ایجاد کنید که نشان دهنده برند شما باشد و مخاطب ایده آل شما را جذب کند. امروز با ما تماس بگیرید تا شروع کنیم'
            ],
            'portfolio' => [
                'title' => 'کار ما را در عمل ببینید',
                'text' => "ما به مجموعه وب سایت های خیره کننده ای که برای مشتریان خود ایجاد کرده ایم افتخار می کنیم. ویترین ما را مرور کنید و ببینید که چگونه به کسب و کارهایی مانند شما کمک کرده ایم تا به موفقیت آنلاین دست یابند. الهام بگیرید و بیایید با هم چیزی شگفت انگیز بسازیم.",
            ],
            'pricing' => [
                'title' => 'قیمت گذاری',
                'text' => 'بخش قیمت‌گذاری ما بسته‌های طراحی وب ما را به نمایش می‌گذارد که متناسب با هر اندازه و بودجه کسب‌وکاری است. ما قیمت گذاری شفاف و بدون هزینه پنهان ارائه می دهیم، بنابراین شما دقیقاً می دانید برای چه چیزی می پردازید. از بسته های پایه، استاندارد و ممتاز ما انتخاب کنید و بهترین ارزش را برای پول خود دریافت کنید.',
                'cards' => [
                    [
                        'title' => 'پایه',
                        'price' => 500,
                        'aos' => 'fade-up',
                        'aos-delay' => 100,
                        'link' => '#',
                        'items' => [
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'طراحی و توسعه وب سایت 5 صفحه ای به صورت سفارشی',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'طراحی ریسپانسیو موبایل',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-x',
                                'text' => 'بهینه سازی پیشرفته سئو',
                                'available' => "na",
                            ],
                            [
                                'icon' => 'bx bx-x',
                                'text' => 'یکپارچه سازی حساب های رسانه های اجتماعی',
                                'available' => "na",
                            ],
                        ]
                    ],
                    [
                        'title' => 'پریمیوم',
                        'price' => 1000,
                        'aos' => 'fade-up',
                        'aos-delay' => 200,
                        'link' => '#',
                        'items' => [
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'طراحی و توسعه وب سایت 5 صفحه ای به صورت سفارشی',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'طراحی ریسپانسیو موبایل',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'بهینه سازی اولیه سئو',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'یکپارچه سازی حساب های رسانه های اجتماعی',
                                'available' => "",
                            ],
                        ]
                    ],
                    [
                        'title' => 'تجارت الکترونیک',
                        'price' => 2500,
                        'aos' => 'fade-up',
                        'aos-delay' => 300,
                        'link' => '#',
                        'items' => [
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'طراحی و توسعه وب سایت 5 صفحه ای به صورت سفارشی',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'طراحی ریسپانسیو موبایل',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'بهینه سازی اولیه سئو',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'ادغام درگاه پرداخت و گزینه های حمل و نقل',
                                'available' => "",
                            ],
                            [
                                'icon' => 'bx bx-check',
                                'text' => 'سیستم مدیریت محصول',
                                'available' => "",
                            ],
                        ]
                    ],
                ]
            ],
            'team' => [
                'title' => 'اعضای تیم',
                'text' => "در این بخش، شما را با تیم با استعداد خود از طراحان وب آشنا می کنیم که مشتاق ایجاد وب سایت های خیره کننده هستند که شخصیت منحصر به فرد برند شما را منعکس می کنند. اعضای تیم ما، مهارت ها و تخصص آنها را بشناسید که آنها را در صنعت برجسته می کند.",
                'members' => [
                    [
                        'name' => 'محمد ایمانی',
                        'title' => 'مدیر عامل',
                        'text' => 'مدیر عامل گروه کدهای هوشمند - ایجاد وب سایت های بصری خیره کننده و کاربر پسند برای مشاغل.',
                        'image' => 'front/assets/img/team/team-1.jpg',
                        'twitter' => 'https://twitter.com/KiasaraeiM',
                        'facebook' => 'https://www.facebook.com/mohammad.eminay/',
                        'instagram' => 'https://www.instagram.com/emcode.ir/',
                        'linkedin' => 'https://www.linkedin.com/in/mohammad-imani-08402417b/',
                    ],
                    [
                        'name' => 'Nader Golab',
                        'title' => 'مدیر عامل',
                        'text' => 'مدیر عامل گروه کدهای هوشمند - ایجاد وب سایت های بصری خیره کننده و کاربر پسند برای مشاغل',
                        'image' => 'front/assets/img/team/team-2.jpg',
                        'twitter' => '#',
                        'facebook' => '#',
                        'instagram' => '#',
                        'linkedin' => '#',
                    ],
                ]
            ],
            'contact' => [
                'title' => 'تماس با ما',
                'text' => "ما به شما این امکان را می دهیم که از طریق صفحه تماس با ما با ما در تماس باشید. چه سوالی داشته باشید، چه نیاز به نقل قول داشته باشید یا بخواهید در مورد نیازهای پروژه خود بحث کنید، تیم دوستانه و آگاه ما همیشه برای کمک به شما آماده است.",
                'address' => 'A108 Adam Street, New York, NY 535022',
                'email' => 'info@scsgroup.ir',
                'phone' => '+98 938 1133 408',
            ],
            'newsletter' => [
                'title' => 'به خبرنامه ما بپیوندید',
                'text' => 'در خبرنامه ما مشترک شوید و از آخرین روندها، نکات و ترفندهای طراحی وب مطلع شوید. خبرنامه ما همچنین شامل پیشنهادات و تخفیف های انحصاری در خدمات ما است، بنابراین می توانید بهترین ارزش را برای پول خود داشته باشید.'
            ],
            'footer' => [
                'contacts' => [
                    'phone' => '+98 938 1133 408',
                    'email' => 'info@scsgroup.ir',
                    'address' => 'A108 Adam Street <br>New York, NY 535022<br> United States <br><br>',
                ],
                'social_networks' => [
                    'text' => 'گروه کدهای هوشمند یک شرکت طراحی وب حرفه ای است که در ایجاد وب سایت های بصری خیره کننده و کاربر پسند برای مشاغل تخصص دارد. از طراحی سفارشی گرفته تا راه حل های تجارت الکترونیک، تیم کارشناسان ما به ارائه نتایج استثنایی اختصاص دارند.',
                    'items' => [
                        [
                            'link' => '#',
                            'class' => 'twitter',
                            'icon' => 'bx bxl-twitter'
                        ],
                        [
                            'link' => '#',
                            'class' => 'facebook',
                            'icon' => 'bx bxl-facebook'
                        ],
                        [
                            'link' => 'https://www.instagram.com/scsgroup.ir/',
                            'class' => 'instagram',
                            'icon' => 'bx bxl-instagram'
                        ],
                        [
                            'link' => '#',
                            'class' => 'linkedin',
                            'icon' => 'bx bxl-linkedin'
                        ],
                    ],
                ]
            ]
        ];
    }

    public function about()
    {
        $about =
            "
            <h2 class=\"about-title\">About Us</h2>
            <p>At <strong>Smart Code Studio</strong>, we're passionate about creating beautiful, functional websites that help businesses thrive online. With years of experience in web design and development, we have the skills and expertise to bring your vision to life and deliver a website that exceeds your expectations.</p>

            <h2 class=\"about-title\">Our Approach</h2>
            <p>In everything we do, we prioritize the user experience. We understand that your website is often the first point of contact between your business and your customers, and we work hard to ensure that it makes a great first impression. Our design process is collaborative and iterative, and we're committed to working closely with you to create a website that reflects your brand and achieves your goals.</p>

            <h2 class=\"about-title\">Our Services</h2>
            <p>Our web design services include:</p>
            <ul>
                <li>Custom website design: We create unique, customized designs that are tailored to your business and your audience.</li>
                <li>Responsive design: We build websites that are optimized for all devices, from desktops to smartphones.</li>
                <li>E-commerce design: We specialize in creating e-commerce websites that are user-friendly, secure, and optimized for sales.</li>
            </ul>
            <p>In addition to web design, we also offer a range of other services to help your business succeed online, including website development, search engine optimization, and digital marketing.</p>

            <h2 class=\"about-title\">Our Skills</h2>
            <p>At <strong>Smart Code Studio</strong>, we have a team of skilled web designers and developers who are passionate about creating beautiful, functional websites. We have experience working with a wide range of clients, from small businesses to large corporations, and we pride ourselves on our ability to deliver high-quality work that meets our clients' needs.</p>
            <ul>
                <li>Web design: We have a deep understanding of design principles and best practices, and we use this knowledge to create websites that are visually appealing, user-friendly, and optimized for conversions.</li>
                <li>HTML/CSS: We have expertise in HTML and CSS, the building blocks of the web, and we use these languages to create clean, semantic code that is easy to read and maintain.</li>
                <li>JavaScript: We have experience with JavaScript, a powerful programming language that allows us to create dynamic, interactive websites that engage users and enhance the user experience.</li>
                <li>Content management systems (CMS): We have experience with a variety of CMS platforms, including WordPress, Drupal, and Joomla, and we use these platforms to create websites that are easy to manage and update.</li>
                <li>Responsive design: We have expertise in responsive design, which allows us to create websites that are optimized for all devices, from desktops to smartphones.</li>
                <li>E-commerce: We have experience creating e-commerce websites that are secure, user-friendly, and optimized for sales.</li>
            </ul>
            <p>In addition to our technical skills, we also have strong communication and collaboration skills. We work closely with our clients to understand their needs and goals, and we keep them informed throughout the design and development process.</p>
            "
        ;

        $serivces = [
            "- Web design: We have a deep understanding of design principles and best practices, and we use this knowledge to create websites that are visually appealing, user-friendly, and optimized for conversions.
            - HTML/CSS: We have expertise in HTML and CSS, the building blocks of the web, and we use these languages to create clean, semantic code that is easy to read and maintain.
            - JavaScript: We have experience with JavaScript, a powerful programming language that allows us to create dynamic, interactive websites that engage users and enhance the user experience.
            - Content management systems (CMS): We have experience with a variety of CMS platforms, including WordPress, Drupal, and Joomla, and we use these platforms to create websites that are easy to manage and update.
            - Responsive design: We have expertise in responsive design, which allows us to create websites that are optimized for all devices, from desktops to smartphones.
            - E-commerce: We have experience creating e-commerce websites that are secure, user-friendly, and optimized for sales.

            In addition to our technical skills, we also have strong communication and collaboration skills. We work closely with our clients to understand their needs and goals, and we keep them informed throughout the design and development process.

            If you're looking for a team of skilled web designers and developers who can create a website that meets your needs and exceeds your expectations, contact us today to learn more about our services."
        ];

        return $about;
    }
}
