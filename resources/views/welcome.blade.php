<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Laravel Radio Input AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Laravel Radio Input AJAX Example</h1>

    <form>
        @csrf
        <input type="radio" name="option" value="option1"> Option 1<br>
        <input type="radio" name="option" value="option2"> Option 2<br>
        <input type="radio" name="option" value="option3"> Option 3<br>
    </form>

    <div id="response"></div>

    <script>
        $('input[type=radio]').change(function() {
            var selectedOption = $('input[name=option]:checked').val();

            // Make the AJAX request
            $.ajax({
                type: 'POST',
                url: '{{ route('radio.option') }}',
                data: {
                    // option: selectedOption,
                    option: selectedOption,
                },
                success: function(response) {
                    // Handle the response
                    $('#response').text(response.message);
                },
                error: function(xhr) {
                    // Handle any errors
                    console.log(xhr.responseText);
                }
            });
        });
    </script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
</body>
</html>
