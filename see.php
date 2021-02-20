
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
    <title>Liberty</title>

  </head>


<form class="" action="index.html" method="post">
<h2>Liberty</h2>
</form>
<div class="lll">


  <h2><?php
require  'connect.php';


mysqli_query($connect, "INSERT INTO `liberty` (`space`, `max`, `red`, `name`) VALUES ('', $max, $red, NULL)");
  $login = $_POST['login'];

  echo $login;
  $name = $_POST['name'];
  echo $name;

  $space = $_POST['space'];
echo $space;

$max = $_POST['max'];
echo $max;

$red = $_POST['red'];
echo $red;
   ?></h2>
<form  class="" action="index.php" method="post" enctype="multipart/form-data">
  <center><input type="search" name="login" value="" placeholder="Сообщение" id="login"></center>
</form>
</div>


  <style media="screen">

  body {
    font-family: Tahoma;
    background: lightgrey;
    margin: 0;
    background-image: url();
  }

  form {
    margin-top: 0px;
    background: rgba();
    max-width: 370px;
    height: 42px;
    padding:  2px;
    box-shadow: 2px 2px 5px rgba(1,1,11,1);
  }

  }
  .group {
    padding-left: 10px;
    text-transform: uppercase;
  }
  label {
    padding-left: 10px;
    text-transform: uppercase;
  }


  input {

    outline: none;
  border: none;
  border: solid 1px #f2f2f2;
    margin-top:  3px;
    margin-left:  200px;
    height: 30px;
    max-width: 370px;
      color: #fff;
    background: black;
    padding-left: 15px;
    border-radius: 10px/10px;
    border: none;
    font-size: 18px;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.82);
    text-decoration-color: red;
    text-align: -12px;
  }

  input:focus {
    border: 2px solid #6coff;
    transform: translateX(5px);
    width: 385;
  }
  button {
    margin-top: 10px;
    cursor: pointer;;
    padding: 10px 30px;
    height: 50px;

    color: #fff;
    background: black;
    padding-left: 25px;
    border-radius: 10px/10px;
    border: none;
    text-transform: uppercase;
    font-size: 15px;
    box-shadow: 2px 2px 5px rgba(0,0,0,0,82);
  }
  .name::before{
    content: "";
    color: black;
  }
  img {
    margin-top: 18px;
    height: 20px;
    max-width: 20px;
    border-radius: 19/20px;
    padding-left: 15px;

  }
  .group {
    padding-left: 10px;
    text-transform: uppercase;
  }
  label {
    padding-left: 10px;
    text-transform: uppercase;
  }
  textarea {
    margin-top:  1px;
    height: 40px;
    max-width: 350px;
    padding-left: 15px;
    border-radius: 19px/20px;
    border: none;
    font-size: 18px;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.82);
  }
  textarea:focus {
    border: 2px solid #6coff;
    transform: translateX(5px);
    width: 385;
  }
  .vrc a {
        margin-top: -1px;
    margin-left: 1px;
      text-decoration: none;
    }

  }


  }


  .label {
    margin-top: 240px;
    margin-left: 100px;
  }
  .warning form {
  margin-top: -346px;
    width: 540px;
    height: 680px;
    border-radius: 20px/20px;
    border: none;
  }
  .warning input {
  margin-top: -378px;
  margin-left: -2px;
    width: 543px;
    height: 50px;
    color: #fff;
  background: black;
  text-align: center;
  border-radius: 0px/0px;
  border: none;
  }
  .logo h3 {
    margin-top: -732px;
    margin-left: 130px;
  }







  .content form {
  margin-top: 90px;
  margin-left: 1000px;
    margin: 0 auto;
    background: rgba(1,1,11,1);
    width: 200px;
    height: 350px;
    padding:  2px;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.8);
  }
  .col {

  }
  .col form {
    margin-top: 79px;
    margin-right:  1240px;

      background: rgba(1,1,11,1);
      width: 200px;
      height: 250px;
      padding:  2px;
      border-radius: 20px/20px;
      border: none;

  }
  .cal hr {

  }
  .col hr {
    margin-top: -100px;
  }
  .cal {

  }
  .cal form {
    margin-top: 1px;
    margin-right:  400px;

      background: rgba(1,1,11,1);
      width: 900px;
      height: 500px;
      padding:  2px;

      border-radius: 20px/20px;
      border: none;

  }
  .cal h5 {
  margin-top: 20px;

    margin-left: 200px;
  }
  h3 {
    margin-top: -34px;
  }
  .count {
    margin-top: 170px;
    margin-left: 146px;
  }

  }
  .vol {
    margin-left: -1000px;
    margin-top: -490px;
  }
  .info  {
    margin-left:  100px;
    margin-top: 200px;
  }
  .cal h3 {
    margin-top: px;
    margin-right: 10px;
  }
  .margin hr {
    width: 10px;
    height: 10px;
  }
  .col img {
    margin-left: -10px;
    width: 100px;
    height: 100px;
    margin-top: -2000px;
    border-radius: 20px/20px;
    border: none;
  }
  .vok form {
    margin-top: 30px;
    margin-right:  410px;
    width: 890px;
    height: 45px;
    border-radius: 20px/20px;
    border: none;
  }
  .vok button {
  padding-top: 1px;
    cursor: pointer;;
    padding: 10px 30px;
    height: 50px;


    color: #fff;
    background: black;
    padding-left: 25px;
    border-radius: 20px/20px;
    border: none;
    text-transform: uppercase;
    font-size: 15px;
    box-shadow: 2px 2px 5px rgba(0,0,0,0,82);
  }
  .labels {
    margin-top: 200px;
    margin-left: 300px;
  }
  .cal button {
    margin-left: 420px;
    margin-top: -10px;
  }
  .cal input {
    margin-top: 10px;
  }
  .rt input {
  margin-top: 50px;
  }
  .ccv input {
  margin-top: 20px;
  text:none;
  }
  .vrc button {
  margin-top: 15px;
  height: 50px;
  margin-left:  10px;
  }
  textarea {
  margin-top:  px;
  margin-left:  400px;
  height: 40px;
  width: 300px;
  color: #fff;
  background: black;
  padding-left: 15px;
  border-radius: 19px/20px;
  border: none;
  font-size: 18px;
  box-shadow: 2px 2px 5px rgba(0,0,0,0.82);
  resize: none;
  outline: none;
  -moz-appearance: none;
  border: 1px solid #999; /* указание этого свойства также удалит обводку в FireFox */
  overflow: hidden
  }
  }
  .sss {

  }
  .sss form {
  margin-top: 100px;
  width: 400px;
  height: 200px;
  border-radius: 20px/20px;
  border: none;
  }
  .sss input {
  margin-left: 45px;
  background-color: white;
  color: black;
  }
  .name::before{
  content: "";
  color: black;
  }
  .date {
  text-decoration-color: grey;
  }
  .sss {

  }
  .ddd form {
  margin-top: 70px;
  width: 500px;
  height: 50px;
  border-radius: 5px/5px;
  border: none;
  }
  .ddd input {
  margin-left: 45px;
  background-color: white;
  color: black;
  }
  .name::before{
  content: "";
  color: black;
  }
  h1 {
  margin-top: 1000px;
  }
  .main form {
    margin-top: -100px;
    background-color: red;
  }
  .vid textarea {
    margin-top: 970px;
    border-radius: 10px/10px;

  }
  .style button {
    margin-top: -20px;
  margin-left: 790px;
  }

  img {

  }
  .ddd input {
    margin-top: 10px;
    border-radius: 5px/5px;
    border: none;
  }
  .lll {

  }
  .lll input {
    margin-left: 590px;
max-width: 1200px;
margin-top: -200px;

  }
  .lll form {
margin-top: 920px;

  }
  .iii textarea {
margin-top: none;
  }
  .iii form {
    margin-top: -877px;
    margin-left: 123px;
    height: 868px;
    width: 240px;
  }
  .ddd p {
    margin-left: 12px;
  }
  h2 {
    margin-top: 5px;
  }

  .sss input {
    width: 200px;
}
h5 {
  margin-top: 123px;
}
h3 {
  margin-top: 50px;
}
@media screen and (max-width: 1200px) {
.lll form {
  margin-top: -120%;
  width: 1000px;
  height: 70px;
}
.lll input {
margin-top: 405%;
margin-left: 5%;
}
@media screen and (max-width: 700px;) {
  .lll form {
      max-width: none;
      margin-top: none;
  }
}
main {
  flex-direction: column;
}
  </style>
</html>
