<script src="//unpkg.com/alpinejs" defer></script>
<!-- remix Icon  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.min.css"
    integrity="sha512-i5VzKip7owqOGjb0YTF8MR2J9yBVO3FLHeazKzLp354XYTmKcqEU3UeFYUw82R8tV6JqxeATOfstCfpfPhbyEA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


@if (session()->has('message'))
    <div id="notification" class="d-flex align-items-center rounded text-center mb-9"
        style="top: 160px; right: 0px; left: 0; margin: auto; width: 350px; z-index: 9999; min-width: 600px; position: absolute">
        <div class="alert rounded-4 shadow-lg d-flex align-items-center py-4 w-100 heroText1" style="background: #000"
            role="alert">
            <i class="ri-check-double-line fs-1" style="color:#fff !important"></i>
            <div class="ps-4" style="color:#fff !important">
                {{ session('message') }}
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#notification').fadeOut();
            }, 3000); // 3000 milliseconds = 3 seconds
        });
    </script>
@endif


@if (session()->has('back-success'))
    <div id="notification" x-init="test()" class="d-flex align-items-center   rounded   text-center mb-9 "
        style="
         top: 90px;
        right: 0px;
        left: 80px;
        margin: auto;
        width: 350px;
        z-index: 9999;
        min-width: 500px;
        position: absolute;">
        <div class="alert rounded-4 shadow-lg   d-flex gap-5 align-items-center py-4 gap-5 w-100 heroText1"
            style="background: #000" role="alert">
            <i class="ri-check-double-line fs-1" style="color:#fff !important "></i>
            <div class="ps-4 " style="color:#fff !important ">
                {{ session('back-success') }}
            </div>
        </div>
    </div>
    <script>
        function test() {
            setTimeout(() => {

                $('#notification').attr("style", "display: none !important");
                // alert();
            }, 3000);
        }
    </script>
@endif

@if ($errors->any())
    {{-- @if (true) --}}
    <div id="notification" x-init="test()"
        class="d-flex align-items-center bg-danger rounded p-5 text-center mb-9 "
        style="top: 85px;right: 0px;left: 0;margin: auto;width: 350px;z-index: 9999;min-width: 600px;position:absolute">
        <div class="d-flex flex-column flex-grow-1 mr-2">



            <p class="text-white font-weight-bold font-size-lg m-0 mr-2 pl-3">
                <strong>
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br>
                    @endforeach
                </strong>
            </p>
        </div>
    </div>
    <script>
        function test() {
            setTimeout(() => {

                $('#notification').attr("style", "display: none !important");
                // alert();
            }, 3000);
        }
    </script>
@endif
