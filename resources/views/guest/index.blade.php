@extends('guest.layout.setup')
@section('content')

<section class="home section" id="home">
    <div class="home__container container grid">
        <div class="class__data">
            <span class="home__greeting">Hello, I'm</span>
            <h1 class="home__name">Ananda Ramadana Ahmad Mulya</h1>
            <h3 class="home__education">Full Stack Developer</h3>

            <div class="home__buttons">
                <a href="https://drive.google.com/file/d/1-OlUk98ga2Q0vPSWgBhYSOrk6PkfH59p/view?usp=sharing" target="__BLANK" class="button button-ghost">
                    Download CV
                </a>
                <a href="#about" class="button">About Me</a>
            </div>
        </div>

        <div class="home__handle">
            <img src="{{ asset('assets/img/diri.png') }}" alt="" class="home__img">
        </div>

        <div class="home__social">
            <a href="https://linkedin.com/in/anandaramadana" class="home__social-link" target="_blank">
                <i class='bx bxl-linkedin-square'></i>
            </a>
            <a href="https://github.com/anandaramadana" class="home__social-link" target="_blank">
                <i class='bx bxl-github'></i>
            </a>
            <a href="https://gitlab.com/ananda.mulya09" class="home__social-link" target="_blank">
                <i class='bx bxl-gitlab'></i>
            </a>
        </div>

        <a href="#about" class="home__scroll">
            <i class='bx bx-mouse home__scroll-icon'></i>
            <span class="home__scroll-name">Scroll Down</span>
        </a>
    </div>
</section>

<section class="about section" id="about">
    <span class="section__subtitle">My Intro</span>
    <h2 class="section__title">Let Me Introduce My Self</h2>

    <div class="about__container container grid">
        <img src="{{ asset('assets/img/about.png') }}" alt="" class="about__img">

        <div class="about__data">
            <div class="about__info">
                <div class="about__box">
                    <i class='bx bx-award' ></i>
                    <h3 class="about__title">Experience</h3>
                    <span class="about__subtitle">Fresh Graduate & 7 Month Internship</span>
                </div>

                <div class="about__box">
                    <i class='bx bxs-briefcase-alt' ></i>
                    <h3 class="about__title">Completed</h3>
                    <span class="about__subtitle">5+ Projects</span>
                </div>

                <div class="about__box">
                    <i class='bx bx-support' ></i>
                    <h3 class="about__title">Support</h3>
                    <span class="about__subtitle">Online 24/7</span>
                </div>
            </div>

            <p class="about__description">
                Informatics Engineering student with a strong interest
                in Full Stack Developer. I striveto apply
                competent and responsible work ethics, with an ambitious
                drive to continuously enhancemy professionalism and ability
                to collaborate with diverse clients. This passion is reflected
                in my experience working on various dynamic web development
                and data analysis projects, where I focuson creating efficient
                and scalable digital solutions
            </p>

            <a href="mailto:ananda.mulya09@gmail.com" class="button" target="__BLANK">Contact Me</a>
        </div>
    </div>
</section>

<section class="experience section" id="experience">
    <span class="section__subtitle">My Experience</span>
    <h2 class="section__title">What I've Done</h2>

    <div class="experience__container container swiper">
        <div class="experience__content">
            <div class="card-wrapper swiper-wrapper">
                <div class="experience__card swiper-slide">
                    <div class="img-content">
                        <span class="overlay"></span>
                        <div class="experience__year">[ 2022 ]</div>
                        <div class="experience__card-img">
                            <img src="{{ asset('assets/img/logo_himatif.jpg') }}" alt="" class="card-image">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="experience__title">Himpunan Mahasiswa Teknik Informatika UTM 2022</h2>
                        <span class="experience__subtitle">as Staff of Education Departement</span>
                        <p class="experience__desc">
                            HIMATIF Trunojoyo is a student organization under
                            the Informatics Engineering Program at Trunojoyo Madura
                            University. It serves as a platform for students to
                            express their aspirations and develop both academic and
                            non-academic potential in the field of Informatics Engineering.
                        </p>

                        <button class="experience__button">See More</button>
                    </div>
                </div>

                <div class="experience__card swiper-slide">
                    <div class="img-content">
                        <span class="overlay"></span>
                        <div class="experience__year">[ 2023 - 2024 ]</div>
                        <div class="experience__card-img">
                            <img src="{{ asset('assets/img/normal_koperasi.png') }}" alt="" class="card-image">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="experience__title">PKP-RI Kabupaten Bangkalan (Internship)</h2>
                        <span class="experience__subtitle">as System Information Development</span>
                        <p class="experience__desc">
                            Developing a dynamic website-based
                            information system to support the business operations
                            of PKP-RI Bangkalan. I Contributed to organizing and managing the
                            workflow of the website built using Laravel 10 toenhance work
                            efficiency and improve the credibility of PKP-RI Bangkalan through technology.
                        </p>

                        <button class="experience__button">See More</button>
                    </div>
                </div>

                <div class="experience__card swiper-slide">
                    <div class="img-content">
                        <span class="overlay"></span>
                        <div class="experience__year">[ 2024 ]</div>
                        <div class="experience__card-img">
                            <img src="{{ asset('assets/img/logo_himatif.jpg') }}" alt="" class="card-image">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="experience__title">Himpunan Mahasiswa Teknik Informatika UTM 2024</h2>
                        <span class="experience__subtitle">as Excecutive Treasurer</span>
                        <p class="experience__desc">
                            HIMATIF Trunojoyo is a student organization under
                            the Informatics Engineering Program at Trunojoyo Madura
                            University. It serves as a platform for students to
                            express their aspirations and develop both academic and
                            non-academic potential in the field of Informatics Engineering.
                        </p>

                        <button class="experience__button">See More</button>
                    </div>
                </div>

                <div class="experience__card swiper-slide">
                    <div class="img-content">
                        <span class="overlay"></span>
                        <div class="experience__year">[ 2024 ]</div>
                        <div class="experience__card-img">
                            <img src="{{ asset('assets/img/arkatama.png') }}" alt="" class="card-image">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="experience__title">PT Arkatama Multi Solusindo (MSIB Batch 6)</h2>
                        <span class="experience__subtitle">as Full Stack Web Developer</span>
                        <p class="experience__desc">
                            Participated in mentorship sessions covering both front-end and back-end development,
                            focusing on essential technologies such as HTML, CSS, JavaScript, MySQL, Laravel, and REST API.
                            Utilized the Laravel framework, maximizing its capabilities to create a dynamic, efficient,
                            and user-friendly website.
                        </p>

                        <button class="experience__button">See More</button>
                    </div>
                </div>

                <div class="experience__card swiper-slide">
                    <div class="img-content">
                        <span class="overlay"></span>
                        <div class="experience__year">[ 2025 ]</div>
                        <div class="experience__card-img">
                            <img src="{{ asset('assets/img/shinergy.png') }}" alt="" class="card-image">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="experience__title">Shine Through Synergy (Internship)</h2>
                        <span class="experience__subtitle">as Product Officer Assosiate</span>
                        <p class="experience__desc">
                            Played an active role in end-to-end product development processes within a fast-paced and
                            impact-driven learning organization. This role
                            required strong collaboration, creativity, and data-driven decision-making to ensure each
                            program delivered meaningful outcomes for participants and aligned with organizational goals.
                        </p>

                        <button class="experience__button">See More</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<div id="experienceModal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <h2 id="modalTitle" class="modal-title"></h2>
        <ul id="modalList" class="modal-list"></ul>
    </div>
</div>

<section class="skills section" id="skills">
    <span class="section__subtitle">My Abilities</span>
    <h2 class="section__title">Skills Base From Experience</h2>

    <div class="skills__container container grid">
        <div class="skills__content">
            <h3 class="skills__title">Frontend Developer </h3>

            <div class="skills__box">
                <div class="skills__group">
                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">HTML</h3>
                            <span class="skills__level">Advanced</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">CSS</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">JavaScript</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>
                </div>

                <div class="skills__group">
                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Bootstrap</h3>
                            <span class="skills__level">Advanced</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Figma</h3>
                            <span class="skills__level">Advanced</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Wordpress</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="skills__content">
            <h3 class="skills__title">Backend Developer</h3>

            <div class="skills__box">
                <div class="skills__group">
                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">PHP</h3>
                            <span class="skills__level">Advanced</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Wordpress</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">PhpMyAdmin</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">MySQL</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>
                </div>

                <div class="skills__group">
                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Laravel</h3>
                            <span class="skills__level">Advanced</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">REST API</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Oracle</h3>
                            <span class="skills__level">Basic</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="skills__content">
            <h3 class="skills__title">Productivity Tools</h3>

            <div class="skills__box">
                <div class="skills__group">
                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Git</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Gitlab</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Microsoft Office (Word, Excel, Outlook)</h3>
                            <span class="skills__level">Advanced</span>
                        </div>
                    </div>
                </div>

                <div class="skills__group">
                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Github</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Google Workspace</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="skills__content">
            <h3 class="skills__title">Data Science</h3>

            <div class="skills__box">
                <div class="skills__group">
                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Python</h3>
                            <span class="skills__level">Advanced</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Pandas</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Scikit-learn</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Matplotlib</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>
                </div>

                <div class="skills__group">
                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Numpy</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">Seaborn</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">C++</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <i class='bx bxs-badge-check' ></i>

                        <div>
                            <h3 class="skills__name">TensorFlow</h3>
                            <span class="skills__level">Intermediate</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project section" id="project">
    <span class="section__subtitle">My Portofolio</span>
    <h2 class="section__title">Project Completed</h2>

    <div class="project__filters">
        <span class="project__item active-project" data-filter='all'>All</span>
        <span class="project__item" data-filter='.web'>Web</span>
        <span class="project__item" data-filter='.ui'>UI/UX</span>
        <span class="project__item" data-filter='.data'>Data</span>
    </div>

    <div class="project__container container grid">
        <div class="project__card web">
            <img src="{{ asset('assets/img/sampul_digital.png') }}" alt="" class="project__img">

            <h3 class="project__title">Mostly Digital Information System</h3>

            <a href="https://mostlydigital.urbeing.web.id/" class="project__button" target="__BLANK">
                Demo <i class='bx bx-right-arrow-alt project__icon' ></i>
            </a>
        </div>

        <div class="project__card data">
            <img src="{{ asset('assets/img/sampul_diabetes.png') }}" alt="" class="project__img">

            <h3 class="project__title">Diabetes Classification</h3>

            <a href="https://diabetes-klasifikasi.streamlit.app/" class="project__button" target="__BLANK">
                Demo <i class='bx bx-right-arrow-alt project__icon' ></i>
            </a>
        </div>

        <div class="project__card ui">
            <img src="{{ asset('assets/img/sampul_nusantara.png') }}" alt="" class="project__img">

            <h3 class="project__title">UI/UX Nusantara Application</h3>

            <a href="https://www.figma.com/proto/OFKwpZf5qG1G8c4HvxLGTt/Nusantara?node-id=5-4&starting-point-node-id=5%3A4" class="project__button" target="__BLANK">
                Demo <i class='bx bx-right-arrow-alt project__icon' ></i>
            </a>
        </div>

        <div class="project__card web">
            <img src="{{ asset('assets/img/sampul_bakery.png') }}" alt="" class="project__img">

            <h3 class="project__title">Rachel Bakery Information System</h3>

            <a href="https://rachelbakery.urbeing.web.id/" class="project__button" target="__BLANK">
                Demo <i class='bx bx-right-arrow-alt project__icon' ></i>
            </a>
        </div>

        <div class="project__card web">
            <img src="{{ asset('assets/img/sampul_pkpri.png') }}" alt="" class="project__img">

            <h3 class="project__title">Hall Rental Information System</h3>

            <a href="https://pkpribangkalan.my.id" class="project__button" target="__BLANK">
                Demo <i class='bx bx-right-arrow-alt project__icon' ></i>
            </a>
        </div>

        <div class="project__card data">
            <img src="{{ asset('assets/img/sampul_mahasiswa.png') }}" alt="" class="project__img">

            <h3 class="project__title">Student Dropout Predict</h3>

            <a href="https://collegestudent-dropout-predict.streamlit.app/" class="project__button" target="__BLANK">
                Demo <i class='bx bx-right-arrow-alt project__icon' ></i>
            </a>
        </div>

        <div class="project__card web">
            <img src="{{ asset('assets/img/sampul_jokotole.png') }}" alt="" class="project__img">

            <h3 class="project__title">Jokotole Information System</h3>

            <a href="https://jokotole.urbeing.web.id/" class="project__button" target="__BLANK">
                Demo <i class='bx bx-right-arrow-alt project__icon' ></i>
            </a>
        </div>
    </div>
</section>
