<!DOCTYPE html>
<html>
<head>
	@include('frontend._components.metas')


	@yield('page-styles')
	<style>
@import url('https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap');
* {
  box-sizing: border-box;
}
body {
  background-color: #fbfcfe;
  font-family: 'Roboto', sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  overflow: hidden;
  margin: 0;
}
.container {
  background-color: #fff;
  border: 3px #000 solid;
  border-radius: 10px;
  padding: 30px;
  max-width: 1000px;
  text-align: center;
}
.code-container {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 30px;
}
.code {
  border-radius: 5px;
  font-size: 75px;
  height: 120px;
  width: 100px;
  border: 1px solid #eee;
  margin: 1%;
  text-align: center;
  font-weight: 300;
  -moz-appearance: textfield;
}
.code::-webkit-outer-spin-button,
.code::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
.code:valid {
  border-color: #3498db;
  box-shadow: 0 10px 10px -5px rgba(0, 0, 0, 0.25);
}
.info {
  background-color: #eaeaea;
  display: inline-block;
  padding: 10px;
  line-height: 20px;
  max-width: 400px;
  color: #777;
  border-radius: 5px;
}
@media (max-width: 600px) {
  .code-container {
    flex-wrap: wrap;
  }
  .code {
    font-size: 60px;
    height: 80px;
    max-width: 70px;
  }
}
body {
    
	float: left;
    height: 100vh;
    left: 0;
    /* position: absolute; */
    top: 0;
    width: 100%;
    z-index: -1;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
	padding-left:25px;
	padding-right:25px
}



	</style>

</head>
<body style=" 	background-image:url( {{ asset('frontend/images/bg-orange-main.jpg') }} ) ">

@yield('content')	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

		<script>
			const codes = document.querySelectorAll('.code')
codes[0].focus()
codes.forEach((code, idx) => {
   code.addEventListener('keydown', (e) => {
       if(e.key >= 0 && e.key <=9) {
           codes[idx].value = ''
           
           setTimeout(() => codes[idx + 1].focus(), 10)
       
       } else if(e.key === 'Backspace') {
           setTimeout(() => codes[idx - 1].focus(), 10)
       }


       if (e.keyCode == 13) {
         var a = $('#first').val();
         var b = $('#second').val();
         var c = $('#third').val();
         var d = $('#fourth').val();
         var e = $('#fifth').val();
         var f = $('#six').val();
         var url = $('#url').val()
       
         var vcode = a + b + c + d + e + f
        $.post(url,{vcode:vcode},function(response){
          console.log(response)
          
          if(response.status == 200){
            alert(response.message)
            window.location.href = "{{route("frontend.auth.login")  }}";
          }else{
            alert(response.message)
          }
        })
 
        
    	}
   })



})

/////////////////

		</script>
@yield('page-scripts')

</body>
</html>