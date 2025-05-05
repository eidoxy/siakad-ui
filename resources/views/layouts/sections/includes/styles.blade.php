<!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

@vite([
  'resources/assets/vendor/fonts/tabler-icons.css',
  'resources/assets/vendor/fonts/fontawesome.css',
  'resources/assets/vendor/fonts/flag-icons.css',
  'resources/assets/vendor/libs/node-waves/node-waves.css',
  'resources/assets/vendor/fonts/iconify-icons.css'
])
<!-- Core CSS -->
@vite(['resources/assets/vendor/css/core.css'])
@vite(['resources/assets/css/demo.css'])


<!-- Vendor Styles -->
@vite([
  'resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css',
  'resources/assets/vendor/libs/typeahead-js/typeahead.css'
])
@yield('vendor-style')

<!-- Page Styles -->
@yield('page-style')
