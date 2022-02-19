<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($message = Session::get('success'))
                
    <h2>
        {{$message}}  
    </h2>
       @endif
    <form action="" method="post">
      
        @csrf
        <label for="">about</label>
        
        <textarea  name="about"></textarea>
      
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>