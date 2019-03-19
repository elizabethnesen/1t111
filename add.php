<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>connect</title>
</head>
<body>
 <form method="post" onsubmit="return false;" id='textForm'>
  <div>
   <div>Имя:</div>
   <input type="text" id="name" name="name">
  </div>
  <div class="error_name error"></div>
  <br>
  <div>
   <div>Телефон:</div>
   <input type="text" name="phone" id="phone">
  </div>
  <div class="error_phone error"></div>
  <br>
  <div>
   <div>Email:</div>
   <input type="text" id="email" name="email">
  </div>
  <br>
  <button type="submit" name="btn" id="btn">Связаться</button>
 </form>
 <div class="result"></div>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script>
            $(function(){

                $('#btn').click(function(){
                    
                    $.ajax({
                        url: 'addView.php',
                        type: 'POST',
                        data: $('#textForm').serialize(),
                        dataType: 'json',
                        success: function(responce)
                        {
                        if (responce.errors['name']) 
                          {
                              $('.error_name').html(responce.errors['name']);
                          } else{
                              $('.error_name').html('');
                          }
                        if (responce.errors['phone']) 
                            {
                                $('.error_phone').html(responce.errors['phone']);
                            } else{
                                $('.error_phone').html('');
                            } 
                        if (responce.success['success']) 
                            {
                                $('.result').html(responce.success['success']);
                            } else{
                                $('.result').html('');
                            }
                        },
                        error: function(){

                        }
                    })

                })

            })
</script>

<style>
 .error{
  color: red;
 }
 .result{
  color: green;
 }
</style>