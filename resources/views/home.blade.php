<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interview Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="{{ route('cards.assign') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="number_people" class="form-label">Number of people</label>
                <input type="number" class="form-control" id="number_people" name="number_people" min="1" max="52" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <br><br>

        <h4>Output:</h4>
        @foreach ($ouput as $cards)
            {{ $loop->iteration . '. ' . implode(', ', $cards) }}
            <br>            
        @endforeach
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    if (`{{ Session::has('error') }}`) {
        alert('Irregularity occurred');
    }

    $(document).ready(function () {    
        $('#number_people').keypress(function (e) {    
            let charCode = (e.which) ? e.which : event.keyCode    

            if (String.fromCharCode(charCode).match(/[^0-9]/g)) alert('Input value does not exist or value is invalid');                        
        });    
    }); 
</script>
</html>