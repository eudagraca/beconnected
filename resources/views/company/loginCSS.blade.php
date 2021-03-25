@extends('layouts.app')
@section('content')
  <form action="">
    <div class="container_login">
      <br><br><br><br>
        <h3 id="h_cor">Login to continue</h3>
        <input class="input_caixa" type="text" placeholder="Email">
        <br><br>
            <input  class="input_caixa" type="password" placeholder="Password">
          <br><br>
            <button class="btn_in">SIGN IN</button>
          <p id="p_cor">forgot your password?</p>
          <br>
      <p id="p_cor">create account? <b>sing up</b></p>
    </div>
  </form>
@endsection




<!-- CSS -->
<style>
.container_login{
  border-radius: 5px;
  margin: auto;
  text-align: center;
  height: 400px;
  width: 300px;
  background-image: linear-gradient(#c56cf0 ,#5f27cd);
}
.input_caixa{
  border: none;
  outiline: none; 
  maring-top: 30px;
  padding: 4% 4%;
  border-radius: 15px;
}
.btn_in{
  background-image: linear-gradient(to right, #d35400 , yellow);
  border: none;
  color: #FFF;
  padding: 4% 23%;
  border-radius: 12px;
}
#h_cor{
  margin-top: 5px;
  text-align:center;
  font-family: Arial;
  color: #FFF;
}

#p_cor{
  text-align:center;
  font-family: Arial;
  color: #FFF;
}
</style>