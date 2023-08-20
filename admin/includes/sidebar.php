<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <div class="search-bar">
        <form class="search-sidebar mb-3 d-flex align-items-center" method="POST" action="#">
            <input type="text" id="Search" placeholder="Search" title="Enter search keyword" onkeyup="myFunction()">
            <button type="button" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->
    <div class="col-12 text-center mt-2" id="noResults" style="display: none;">
        <h6>No results found</h6>
    </div>
    <ul class="sidebar-nav" id="sidebar-nav">
    
        <li class="nav-item target">
            <a class="nav-link search-title" href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item target">
            <a class="nav-link collapsed search-title" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="target">
                    <a class="search-title" href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Alerts</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>Accordion</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="components-badges.html">
                        <i class="bi bi-circle"></i><span>Badges</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="components-breadcrumbs.html">
                        <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="components-buttons.html">
                        <i class="bi bi-circle"></i><span>Buttons</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="components-cards.html">
                        <i class="bi bi-circle"></i><span>Cards</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="components-carousel.html">
                        <i class="bi bi-circle"></i><span>Carousel</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="components-list-group.html">
                        <i class="bi bi-circle"></i><span>List group</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="components-modal.html">
                        <i class="bi bi-circle"></i><span>Modal</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="components-tabs.html">
                        <i class="bi bi-circle"></i><span>Tabs</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="components-pagination.html">
                        <i class="bi bi-circle"></i><span>Pagination</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="components-progress.html">
                        <i class="bi bi-circle"></i><span>Progress</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="components-spinners.html">
                        <i class="bi bi-circle"></i><span>Spinners</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="components-tooltips.html">
                        <i class="bi bi-circle"></i><span>Tooltips</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Components Nav -->

        <li class="nav-item target">
            <a class="nav-link collapsed search-title" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="target">
                    <a class="search-title" href="forms-elements.html">
                        <i class="bi bi-circle"></i><span>Form Elements</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="forms-layouts.html">
                        <i class="bi bi-circle"></i><span>Form Layouts</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="forms-editors.html">
                        <i class="bi bi-circle"></i><span>Form Editors</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="forms-validation.html">
                        <i class="bi bi-circle"></i><span>Form Validation</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Forms Nav -->

        <li class="nav-item target">
            <a class="nav-link collapsed search-title" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="target">
                    <a class="search-title" href="tables-general.html">
                        <i class="bi bi-circle"></i><span>General Tables</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="tables-data.html">
                        <i class="bi bi-circle"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Tables Nav -->

        <li class="nav-item target">
            <a class="nav-link collapsed search-title" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="target">
                    <a class="search-title" href="charts-chartjs.html">
                        <i class="bi bi-circle"></i><span>Chart.js</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="charts-apexcharts.html">
                        <i class="bi bi-circle"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="charts-echarts.html">
                        <i class="bi bi-circle"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-item target">
            <a class="nav-link collapsed search-title" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="target">
                    <a class="search-title" href="icons-bootstrap.html">
                        <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="icons-remix.html">
                        <i class="bi bi-circle"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li class="target">
                    <a class="search-title" href="icons-boxicons.html">
                        <i class="bi bi-circle"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <!-- <li class="nav-heading">Pages</li> -->

        <li class="nav-item target">
            <a class="nav-link collapsed search-title" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item target">
            <a class="nav-link collapsed search-title" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item target">
            <a class="nav-link collapsed search-title" href="pages-contact.html">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item target">
            <a class="nav-link collapsed search-title" href="pages-register.html">
                <i class="bi bi-card-list"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item target">
            <a class="nav-link collapsed search-title" href="pages-login.html">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item target">
            <a class="nav-link collapsed search-title" href="pages-error-404.html">
                <i class="bi bi-dash-circle"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class="nav-item target">
            <a class="nav-link collapsed search-title" href="pages-blank.html">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside>
<!-- End Sidebar-->

<style>
    .search-sidebar input {
        border: 0;
        font-size: 14px;
        color: #012970;
        border: 1px solid rgba(1, 41, 112, 0.2);
        padding: 7px 38px 7px 8px;
        border-radius: 3px;
        transition: 0.3s;
        width: 100%;
    }
    .search-sidebar button {
        border: 0;
        padding: 0;
        margin-left: -30px;
        background: none;
    }
</style>

<script>
    function myFunction() {
        var input = document.getElementById("Search");
        var filter = input.value.toLowerCase();
        var nodes = document.getElementsByClassName('target');
        var resultsFound = false;

        for (i = 0; i < nodes.length; i++) {
            var navLink = nodes[i].querySelector('.search-title');
            var subItems = nodes[i].querySelectorAll('.target'); // Get subitems within the target
            var showNode = false;

            // Check if any sub-item matches the filter
            for (j = 0; j < subItems.length; j++) {
                var subNavLink = subItems[j].querySelector('.search-title');
                if (subNavLink.innerText.toLowerCase().includes(filter)) {
                    showNode = true;
                    break;
                }
            }

            if (navLink.innerText.toLowerCase().includes(filter) || showNode) {
                nodes[i].style.display = "block";

                // Expand the parent section if it contains a matching result
                var parentCollapse = nodes[i].closest('.collapse');
                if (parentCollapse) {
                    parentCollapse.classList.remove('collapsed'); // Remove 'collapsed' class
                    parentCollapse.classList.add('show');
                }

                resultsFound = true;
            } else {
                nodes[i].style.display = "none";
            }
        }

        var noResultsMsg = document.getElementById("noResults");
        if (resultsFound) {
            noResultsMsg.style.display = "none";
        } else {
            noResultsMsg.style.display = "block";
        }
    }
</script>
