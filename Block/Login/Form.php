<?php

class Block_Login_Form extends Block_Login
{
    public function output()
    {
        global $directory;

        return '<html><head><title>Administrator Area</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><base href="'.$directory.'" /><link rel=stylesheet href=st.css></head><body style="background-color:#FFFFFF;"><br><br><br><br><br><br><br><br><center>'.
        $this->openTable('Administrator Logon').
        '<table><form method="post" action="'.$this->getUrl('login/process').'">
        <tr><td>E-Mail:</td><td><input name="email" type="text"></td></tr>
        <tr><td>Password:</td><td><input name="password" type="password"></td></tr>
        <tr><td></td><td><input type="submit" value="Login"></td></tr>
       </form></table>

     <script>
      onload = function(){
       document.forms[0].login.focus();
      }
     </script>

     <style>
      td{font-family: Verdana, Tahoma, Arial; font-size: 10px;}
      input, select{font-size: 10px;}
      .he{background-image: url(../img/bg01.gif); font-weight: bold; color: #005B90;}
     </style>'.

        $this->closeTable().
        '</body></html>';

    }
}