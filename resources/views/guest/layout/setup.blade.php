<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="icon" href="{{ asset('assets/img/logo_porto.png') }}">

    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}">

    <!-- JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
</head>
<body>
    <header class="header" id="header">
        @include('guest.components.nav')
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        @include('guest.components.footer')
    </footer>
    <!-- Bootstrap CDN -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Boxicon -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- MixItUp Filter -->
    <script src="{{ asset('assets/js/mixitup-multifilter.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup-multifilter.min.js') }}"></script>

    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script>
        var swiper = new Swiper(".experience__content", {
            slidesPerView: 3,
            spaceBetween: 25,
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                576: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                },
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const filterItems = document.querySelectorAll(".project__item");
            const projectCards = document.querySelectorAll(".project__card");

            filterItems.forEach(item => {
                item.addEventListener("click", function () {
                    // Remove active class from all filters and add to clicked one
                    filterItems.forEach(filter => filter.classList.remove("active-project"));
                    this.classList.add("active-project");

                    const filterValue = this.getAttribute("data-filter");

                    projectCards.forEach(card => {
                        if (filterValue === "all" || card.classList.contains(filterValue.substring(1))) {
                            card.style.display = "block";
                        } else {
                            card.style.display = "none";
                        }
                    });
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navLinks = document.querySelectorAll(".nav__link");

            navLinks.forEach(link => {
                link.addEventListener("click", function () {
                    // Hapus active-link dari semua nav link
                    navLinks.forEach(nav => nav.classList.remove("active-link"));

                    // Tambahkan active-link ke yang diklik
                    this.classList.add("active-link");
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const themeButton = document.getElementById("theme-button");
            const body = document.body;
            const lightTheme = "light-mode";
            const iconTheme = "bx-sun";

            // Cek preferensi tema di localStorage
            if (localStorage.getItem("theme") === "light") {
                body.classList.add(lightTheme);
                themeButton.classList.add(iconTheme);
            }

            // Toggle tema saat tombol diklik
            themeButton.addEventListener("click", function () {
                body.classList.toggle(lightTheme);
                themeButton.classList.toggle(iconTheme);

                // Simpan preferensi tema di localStorage
                if (body.classList.contains(lightTheme)) {
                    localStorage.setItem("theme", "light");
                } else {
                    localStorage.removeItem("theme");
                }
            });
        });
    </script>
</body>
</html>
