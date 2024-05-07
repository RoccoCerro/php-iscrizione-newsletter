<?php

function email_is_valid($email){
  if(strpos($email, "@") && strpos($email, ".")){
    return true;
  }else{
    return false;
  }
}