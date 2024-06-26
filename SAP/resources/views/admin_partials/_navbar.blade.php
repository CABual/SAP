<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo" href="../index.html">
                <img src="https://smdc.com/content/themes/smdc/dist/images/mobile_nav_logo2.svg" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="../index.html">
                <img src="https://smdc.com/content/themes/smdc/dist/images/mobile_nav_logo2.svg" alt="logo" />
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text">Welcome to, <span class="text-black fw-bold">SMDC Admin</span></h1>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">

            <li class="nav-item dropdown">
                <a class="nav-link count-indicator position-relative" id="countDropdown" href="#"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="icon-mail icon-lg"></i>
                    <span
                        class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"
                        id="inquiry_alert" hidden>
                        <span class="visually-hidden">unread messages</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                    aria-labelledby="countDropdown">
                    <a class="dropdown-item py-3" href="">
                        <p class="mb-0 font-weight-medium float-left"> <span id="unseen_status_view"></span>
                        </p>
                        <span class="badge badge-pill badge-primary float-right">View all</span>
                    </a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image">
                        <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                        <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
                    </div>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My
                        Profile <span class="badge badge-pill badge-danger">1</span></a>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i>
                        Messages</a>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i>
                        Activity</a>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i>
                        FAQ</a>
                    <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign
                        Out</a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>

{{-- <script>
    $(document).ready(function() {
        // client_inquiries.fetch_unseen
        check_unseeen()
        setInterval(check_unseeen, 10000);

        $("#countDropdown").click(function(event) {
            console.log('clicked')
            check_unseeen()

        })
    });


    async function check_unseeen() {
        try {
            const response = await $.get('/client_inquiries/fetch_unseen')
            // console.log(response)
            // console.log(response.unread_inquiries.length)
            var count = response.unread_inquiries.length
            $('#unseen_status_view').empty()
            var inq = "inquiries"

            if (count > 0) {
                if (count > 99) {
                    count = "99+"
                }
                $('.unread_inquiries_num').empty()
                $('.unread_inquiries_num').append(count)
                if (count == 1) {
                    var inq = "inquiry"

                }
                $("#a_view_all").prop('hidden', false)
                $("#inquiry_alert").prop('hidden', false)
            } else {

                $("#inquiry_alert").prop('hidden', true)
                $("#a_view_all").prop('hidden', true)
            }
            $('#unseen_status_view').append(`You have ${count} unseen ${inq}.`)

        } catch (error) {
            console.error(error)
        }
    } --}}
</script>
