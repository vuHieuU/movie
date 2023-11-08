<!DOCTYPE html>
<html lang="en-US">
<head>
    @include('client.layout.main.head')
</head>

<body
    class="home page-template page-template-elementor_header_footer page page-id-84 amy-header-default  single-author elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-84">
    <div id="page" class="hfeed site">
        @include('client.layout.menu.menu')

        @yield('contact')
        @yield('introduction')

        @include('client.layout.main.footer')

        <script>
            @if (Session::has('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi!',
                    text: '{{ Session::get('error') }}',
                });
            @elseif (Session::has('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Thành công!',
                    text: '{{ Session::get('success') }}',
                });
            @endif
        </script>
</body>

</html>