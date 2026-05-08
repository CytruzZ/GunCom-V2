<!-- Plugins CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/overlayscrollbars/css/OverlayScrollbars.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices.js/public/assets/styles/choices.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/quill/quill.snow.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bs-stepper/css/bs-stepper.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/dropzone/dropzone.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/prism-theme-one-dark/prism-onedark.css') }}">

<!-- Theme CSS -->
<link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">



<!-- Dark mode -->
<script>
  const storedTheme = localStorage.getItem('theme')

  const getPreferredTheme = () => {     
    if (storedTheme) {
      return storedTheme
    }
    return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
  }

  const setTheme = function(theme) {
    if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      document.documentElement.setAttribute('data-bs-theme', 'dark')
    } else {
      document.documentElement.setAttribute('data-bs-theme', theme)
    }
  }

  setTheme(getPreferredTheme())

  window.addEventListener('DOMContentLoaded', () => {
    var el = document.querySelector('.theme-icon-active');
    if (el != 'undefined' && el != null) {
      const showActiveTheme = theme => {
        const activeThemeIcon = document.querySelector('.theme-icon-active use')
        const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
        const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

        document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
          element.classList.remove('active')
        })

        btnToActive.classList.add('active')
        activeThemeIcon.setAttribute('href', svgOfActiveBtn)
      }

      window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
        if (storedTheme !== 'light' || storedTheme !== 'dark') {
          setTheme(getPreferredTheme())
        }
      })

      showActiveTheme(getPreferredTheme())

      document.querySelectorAll('[data-bs-theme-value]')
        .forEach(toggle => {
          toggle.addEventListener('click', () => {
            const theme = toggle.getAttribute('data-bs-theme-value')
            localStorage.setItem('theme', theme)
            setTheme(theme)
            showActiveTheme(theme)
          })
        })

    }
  })
</script>

<style>
    /* 1. Paksa Body punya background */
    body {
        background-image: url("{{ asset('assets/images/guncomBackground.png') }}") !important;
        background-attachment: fixed !important;
        background-size: cover !important;
        background-position: center !important;
        background-color: white !important; /* Warna dasar */
        display: flex !important;
        flex-direction: column !important;
        min-height: 100vh !important;
    }

    /* 2. TEMBAK SEMUA lapisan yang mungkin menutupi */
    /* Kita buat transparan total agar gambar di body kelihatan */
    main {
        background: transparent !important;
        flex: 1 0 auto !important;
    }

    section, 
    .page-content, 
    #main-wrapper, 
    .main-wrapper,
    .content-wrapper,
    [class*="bg-light"] {
        background: transparent !important;
    }

    /* 3. Supaya tulisan tetap enak dibaca, biarkan Card tetap putih tapi agak transparan */
    .card {
        background-color: rgba(255, 255, 255, 0.8) !important;
        backdrop-filter: blur(5px);
    }

    /* 4. Highlight menu aktif di sidebar kiri */
    .nav-link-sidebar .nav-link.active,
    .nav-link-sidebar .sidebar-submenu .nav-link.active {
        background-color: #00A8A8 !important;
        color: #ffffff !important;
        border-radius: 0.5rem;
    }
    
    .nav-link-sidebar .nav-link.active i,
    .nav-link-sidebar .nav-link.active svg,
    .nav-link-sidebar .nav-link.active span:not(.nav-icon),
    .nav-link-sidebar .sidebar-submenu .nav-link.active i,
    .nav-link-sidebar .sidebar-submenu .nav-link.active svg,
    .nav-link-sidebar .sidebar-submenu .nav-link.active span {
        color: #ffffff !important;
    }

    /* Ubah background icon active menjadi putih dan warna iconnya hitam */
    .nav-link-sidebar .nav-link.active .nav-icon {
        background-color: #ffffff !important;
    }
    .nav-link-sidebar .nav-link.active .nav-icon i,
    .nav-link-sidebar .nav-link.active .nav-icon svg {
        color: #000000 !important;
    }

    /* Hover state untuk icon di sidebar yang belum aktif */
    .nav-link-sidebar .nav-link:not(.active):hover .nav-icon {
        background-color: #00A8A8 !important;
    }
    .nav-link-sidebar .nav-link:not(.active):hover .nav-icon i,
    .nav-link-sidebar .nav-link:not(.active):hover .nav-icon svg {
        color: #ffffff !important;
    }
</style>
