<?php
require_once dirname(__FILE__) . "/include/head.php";
require_once dirname(__FILE__) . "/../views/login_status.php";
?>
<title>Change Password</title>
<div>
  <form 
    id="form" 
    onsubmit="return false" 
    action="/php_project_demo/models/password_changing_check.php"
  >
    <div class="title">
      <p>Change Password</p>
    </div>
    <div>
      <label>
        <p class="label-txt"><b>User Name：</b></p>
        <input 
          id="username" 
          type="username" 
          class="input" 
          required=""
        >
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    </div>
    <div>
      <label>
        <p class="label-txt"><b>Original Password：</b></p>
        <input 
          id="passwordOrg" 
          type="password"
          class="input" 
          required=""
        >
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    </div>
    <div>
      <label>
        <p class="label-txt"><b>New Password：</b></p>
        <input 
          id="passwordNew" 
          type="password" 
          class="input" 
          required=""
        >
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    </div>
    <div>
      <label>
        <p class="label-txt"><b>Confirm Password：</b></p>
        <input 
          id="passwordConfirm" 
          type="password" 
          class="input" 
          autocomplete="Off" 
          required=""
        >
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
    </div>
    <br/>
    <br/>
    <button>Submit</button>
  </form>
</div>

<script>
$("#form").submit(function(e) {
  if ($("#passwordNew").val() !== $("#passwordConfirm").val()) {
    Swal.fire({
      icon: 'warning',
      title: 'Oops...',
      text: '請再確認一次密碼',
    });
    return;
  } else if($("#passwordOrg").val() == $("#passwordNew").val()) {
    Swal.fire({
      icon: 'warning',
      title: 'Oops...',
      text: '密碼與原本相同',
    });
    return;
  } else {
    var params = {
      username: $('#username').val(),
      passwordOrg: md5($('#passwordOrg').val()),
      passwordNew: md5($('#passwordNew').val()),
    };
    var query = jQuery.param(params);
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
      type: "POST",
      url: url + '?' + query,
      success: function(data) {
        if (data.includes('沒有該User Name')) {
          Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            html:data,
          });
        }
        if (data.includes('密碼錯誤')) {
          Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            html:data,
          });
        }
        if (data.includes('密碼修改成功')) {
          Swal.fire({
            icon: 'success',
            title: 'OK',
            text: '密碼修改成功',
            allowOutsideClick: false,
            showCancelButton: false,
          }).then((result) => {
            if (result.value) {
              window.location = '/php_project_demo/views/login.php'
            }
          })
        }
      }
    });
    e.preventDefault(); // avoid to execute the actual submit of the form.
  }
});
</script>