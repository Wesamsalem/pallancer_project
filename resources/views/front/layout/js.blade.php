
<!--        jquery -->
<script src="{{url('/')}}/front/js/vendors/jquery-3.3.1.min.js"></script>
<!--        wow -->
        <script src="{{url('/')}}/front/js/vendors/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
              
<!--        bootstrap library -->
        <script src="{{url('/')}}/front/js/vendors/proper.min.js"></script>
        <script src="{{url('/')}}/front/js/vendors/bootstrap.min.js"></script>
        
<!--        slick -->
        <script src="{{url('/')}}/front/js/vendors/slick.min.js"></script>
        
<!--        Main Js -->
        <script src="{{url('/')}}/front/js/main.js"></script>

        
<script src="{{url('/dashboard/assets/pages/scripts/ui-toastr.min.js')}}" type="text/javascript"></script>

<script src="{{url('/dashboard/assets/global/plugins/bootstrap-toastr/toastr.min.js')}}" type="text/javascript"></script>

<script>

    toastr.options = {

        "closeButton": true,

        "debug": false,

        "newestOnTop": false,

        "progressBar": false,

        "positionClass": "toast-bottom-left",

        "preventDuplicates": false,

        "onclick": null,

        "showDuration": "300",

        "hideDuration": "1000",

        "timeOut": "5000",

        "extendedTimeOut": "1000",

        "showEasing": "swing",

        "hideEasing": "linear",

        "showMethod": "fadeIn",

        "hideMethod": "fadeOut"

    }



            @if(Session::has('message'))

    var type = "{{ Session::get('alert-type', 'info') }}";

    switch(type){

        case 'info':

            toastr.info("{{ Session::get('message') }}");

            break;



        case 'warning':

            toastr.warning("{{ Session::get('message') }}");

            break;



        case 'success':

            toastr.success("{{ Session::get('message') }}");

            break;



        case 'error':

            toastr.error("{{ Session::get('message') }}");

            break;

    }

@endif


</script>