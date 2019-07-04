<!DOCTYPE html>
<html>
<body>
    <style>
    #demo
        {
            font-size: 35px;
        }
    
        #abc
        {
            float: right;
            margin-top: 50px;
            
        }
        b{
            font-size: 37px;
        }
        body{
        background-image:url('back.jpg');
        background-size:cover;
        color:white;
        }
    
    
    </style>



<center>Click to get brief acknowledgement<br><button onclick="typeWriter()">ACKNOWLEDGEMENT</button>
</center>
<p id="demo"></p>
    <div id="abc">
    <b>Bal Govind Chaudhary</b><br>
    <b>Alok Kumar Jaiswal</b><br>
    <b>Mehar Afshan</b><br>
    
    
    </div>

<script>
var i = 0;
var txt = 'We gratefully acknowledge for the assitance ,cooperation, guidance and clarifcation provoided by Mr.Deepak Tripati and Mr. Ashok Yadav during the development of the Online Product Assignement. Our extreme gratitude to Mr.Deepak Tripati and Mr. Ashok Yadav who guided us throughout the project. Without their willing disposition ,sprit of accomodation ,frankness, timely clarifcation and above all the faith in us, this project could not have been completed in due time. Her readiness to discuss all important matter at work deserve special attention. We would also like to thank whole of the faculty of the college for their cooperationand important support.';
var speed = 30;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>

</body>
</html>
