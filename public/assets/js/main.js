document.addEventListener("DOMContentLoaded", function () {
    const header = document.getElementById("header");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            // header.style.backgroundColor = "#fff"; // Ubah warna saat di-scroll
            header.style.boxShadow = "0 4px 4px hsla(0, 0%, 4%, .3)";
            // header.style.marginTop = "2px"
        } else {
            header.style.backgroundColor = "var(--body-color)";
            header.style.boxShadow = "none";
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("experienceModal");
    const modalTitle = document.getElementById("modalTitle");
    const modalList = document.getElementById("modalList");
    const closeModal = document.querySelector(".close-modal");

    const experienceDetails = {
        "Himpunan Mahasiswa Teknik Informatika UTM 2022": [
            "Organizing and managing IT championship events and national-level webinars alongside other department members.",
            "Offering collaboration with several certification institutions to organize certification programs for students",
            "Committee of Milad Informatika 2022 as Event Coordinator.",
            "Committee of Booting & Memory 2022 as Master of Ceremony.",
            "Commitee of Festival Ajang Sinegritas Teknologi 2022 as Secretary Event."
        ],
        "PKP-RI Kabupaten Bangkalan (Internship)": [
            "Building web platform using Laravel 10, PHP 8.3, Bootstrap.",
            "Developing a dynamic website to accommodate the business process of hall rentals at PKP-RI Bangkalan for various events.",
            "This website introduces user-friendly features accessible to both customers and administrators."
        ],
        "Himpunan Mahasiswa Teknik Informatika UTM 2024": [
            "Prepare and manage the organization's financial budget for one administrative period",
            "Record all income and expenses systematically and in detail",
            "Manage the organization's funds, including member contributions, sponsorships, donations, and other sources and ensure that every transaction has proof of payment",
            "Submit a final financial report to the board at the end of the administrative period.",
            "Commitee of Milad Informatika 2024 as Staff Equipment.",
            "Commitee of Booting & Memory 2024 as Event Coordinator.",
            "Commitee of Festival Ajang Sinergitas Teknologi 2024 as Treasurer Event.",
            "Participant of International Community Service with theme Applying Informatics to Globalize BatikMadura : Strategies for International Market Expansion."
        ],
        "PT Arkatama Multi Solusindo (MSIB Batch 6)": [
            "Developed and improved cake business using web platform using Laravel 10, PHP 8.3, Bootstrap, DataTables.",
            "This information system is part of my internship assignment, where I actively engage in helping client grow their businesses using technology.",
            "The entire website is built with features tailored to client requests and enhanced with an attractive design."
        ],
        "Shine Through Synergy (Internship)": [
            "Initiated and organized 5 online bootcamp training programs in career development and digital skills, each attended by 100+ active participants.",
            "Collected and analyzed feedback from over 500 participants and monitored industry trends to identify opportunities for new product initiatives.",
            "Assisted in designing initial curricula and developing training materials in collaboration with professional mentors and facilitators.",
            "Contributed to the development of Minimum Viable Products (MVPs) for early-stage program validation and testing.",
            "Proposed new program concepts based on user insights and market analysis, resulting in a 30% increase in participant engagement.",
            "Continuously evaluated program effectiveness using analytic tools and user feedback to optimize content and delivery strategies."
        ]
    };

    document.querySelectorAll(".experience__button").forEach(button => {
        button.addEventListener("click", function () {
            const title = this.parentElement.querySelector(".experience__title").innerText;
            modalTitle.innerText = title;
            modalList.innerHTML = "";

            if (experienceDetails[title]) {
                experienceDetails[title].forEach(item => {
                    const li = document.createElement("li");
                    li.classList.add("modal-item");
                    li.innerHTML = `<i class='bx bx-check'></i><p class='modal-info'>${item}</p>`;
                    modalList.appendChild(li);
                });
            }

            modal.style.display = "flex";
        });
    });

    closeModal.addEventListener("click", function () {
        modal.style.display = "none";
    });

    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});
