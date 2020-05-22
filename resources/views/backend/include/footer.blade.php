



        <script src="{{ asset('public/backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/bundle.js') }}"></script>
    <script src="{{ asset('public/backend/js/default-assets/setting.js') }}"></script>
    <script src="{{ asset('public/backend/js/default-assets/fullscreen.js') }}"></script>

    <!-- Active JS -->
    
    @if (!empty($js)) 
    @foreach ($js as $item)
    <script src="{{ asset('public/backend/js/default-assets/'.$item) }}" type="text/javascript"></script>        
    @endforeach
    @endif
