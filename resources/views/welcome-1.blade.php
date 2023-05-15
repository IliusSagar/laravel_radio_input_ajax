<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

    <input type="radio" name="myRadio" value="option1"> Option 1
    <input type="radio" name="myRadio" value="option2"> Option 2

    <script>
      $(document).ready(function() {
  $('input[type="radio"]').click(function() {
    // Get the selected value
    var selectedValue = $('input[name="myRadio"]:checked').val();

    // Perform actions based on the selected value
    if (selectedValue === 'option1') {
      // Code for option 1
      console.log('Option 1 selected');
    } else if (selectedValue === 'option2') {
      // Code for option 2
      console.log('Option 2 selected');
    }
  });
});
    </script>


</body>
</html>
