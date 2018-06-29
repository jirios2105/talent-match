var Login = function() {
  //is a private attribute that container the default attributes

  var attributes = {
    texBtnRegister:'Register',
    name:'Name',
    confirmPassword:'Confirm Password',
    fontColor: 'white',
    token: '',
    textButtonSubmit: 'Log In',
    forgot: {
      utlForgotPassword: '#',
      text: 'Forgot Your password?'
    },
    remember: {
      isActive: 'checked',
      text: 'Remember Me',
    },
    text: {
      aling: 'left',
      size: '16px',
      color: 'black'
    },
    TextFirstInput: {
      text: 'Email',
      value:'',
      textError:null,
      placeholder: 'E-mail',
      name: 'email'
    },
    TextSecondhInput: {
      text: 'Password',
      value:'',
      textError:null,
      placeholder: 'Password',
      name: 'password',
    },
    form: {

      action: '#',
      method: 'post',
      ajax: false
    }
  };


  //is a private function return html of login
  var getHtml_register=function(){

    // var html='<div id="register-container">\
    // <div id="micontainer_register" class="">\
    // <h1>Register</h1>\
    // <span class="close-btn" onclick="btn_close_register()">\
    // <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>\
    // </span>\
    // <form id="form-register-jira" action="'+attributes.form.action+'" method="'+attributes.form.method+'">\
    // <div class="form-group">\
    // <h3 style="color:black;" for="happy" class="col-sm-6 col-md-6  text-right">Registrarse como</h3>\
    // <div class="col-sm-6 col-md-6">\
    // <div class="input-group">\
    // <div id="radioBtn" class="btn-group">\
    // <a class="btn btn-primary btn-sm active"name="role_id" onclick="Rdioclick(this)" data-toggle="happy" value="3" data-title="3">Universidad</a>\
    // <a class="btn btn-primary btn-sm notActive" name="role_id" onclick="Rdioclick(this)"  data-toggle="happy" value="1" data-title="1">Empresa</a>\
    // </div>\
    // <input type="hidden" name="role_id" value="1" id="happy">\
    // </div>\
    // </div>\
    // </div>\
    // '+attributes.token+'\
    // <input type="text" name="name" value="" placeholder="'+attributes.name+'" required="required">\
    // <div style="margin: 9px auto;width: 80%"><span id="error-name-register" style="text-align: center;font-size: 20px;color: black;"></span></div>\
    // <input type="email" name="'+attributes.TextFirstInput.name+'" value="'+attributes.TextFirstInput.value+'" placeholder="'+attributes.TextFirstInput.placeholder+'" required="required">\
    // <div style="margin: 9px auto;width: 80%"><span id="error-email-register" style="text-align: center;font-size: 20px;color: black;"></span></div>\
    // <input type="password" name="'+attributes.TextSecondhInput.name+'" value="'+attributes.TextSecondhInput.value+'" placeholder="'+attributes.TextSecondhInput.placeholder+'" required="required">\
    // <div style="margin: 9px auto;width: 80%"><span id="error-password-register" style="text-align: center;font-size: 20px;color: black;"></span></div>\
    // <input type="password" name="password_confirmation" value="" placeholder="'+attributes.confirmPassword+'" required="required">\
    // <div style="margin: 9px auto;width: 80%"><span id="error-password-confirmation-register" style="text-align: center;font-size: 20px;color: black;"></span></div>\
    // <a type="submit" onclick="submit_register()" class="btn btn-primary">Register</a> \
    // <div id="remember-container">\
    // </div>\
    // </form>\
    // </div>\
    // ';

//


var html='<div class="limiter" id="register-container" >\
<div class="container-login100">\
<div class="wrap-login100" style="padding: inherit;width: 40%;">\
<span  class="close-btn2" onclick="btn_close_register()">\
<a >X</a>\
</span>\
<form style="width: 100%;" class="login100-form validate-form" id="form-register-jira" action="'+attributes.form.action+'" method="'+attributes.form.method+'">\
'+attributes.token+'\
<span class="login100-form-title">\
Register\
</span>\
<div class="form-group">\
<h3 style="color:black;" for="happy" class="col-sm-6 col-md-6  text-right">Registrarse como</h3>\
<div class="col-sm-6 col-md-6">\
<div class="input-group">\
<div id="radioBtn" class="btn-group">\
<a class="btn btn-primary btn-sm active"name="role_id" onclick="Rdioclick(this)" data-toggle="happy" value="3" data-title="3">Universidad</a>\
<a class="btn btn-primary btn-sm notActive" name="role_id" onclick="Rdioclick(this)"  data-toggle="happy" value="1" data-title="1">Empresa</a>\
</div>\
<input type="hidden" name="role_id" value="1" id="happy">\
</div>\
</div>\
</div><br><br>\
<div class="wrap-input100 validate-input" data-validate = "'+attributes.name+' is requiered">\
<input class="input100" type="text" name="name" value="" placeholder="'+attributes.name+'" >\
<span class="focus-input100"></span>\
<span class="symbol-input100">\
<i class="fa fa-user" aria-hidden="true"></i>\
</span>\
</div>\
<div style="font-size: 12px;margin: 9px auto;width: 80%"><span id="error-'+attributes.name+'-login" style="text-align: center;font-size: 20px;color: black;"></span></div>\
<div class="wrap-input100 validate-input" data-validate = "'+attributes.TextFirstInput.placeholder+' is required: ex@abc.xyz">\
<input class="input100" type="email" name="'+attributes.TextFirstInput.name+'" value="'+attributes.TextFirstInput.value+'" placeholder="'+attributes.TextFirstInput.placeholder+'" >\
<span class="focus-input100"></span>\
<span class="symbol-input100">\
<i class="fa fa-envelope" aria-hidden="true"></i>\
</span>\
</div>\
<div style="font-size: 12px;margin: 9px auto;width: 80%"><span id="error-'+attributes.TextFirstInput.name+'-login" style="text-align: center;font-size: 20px;color: black;"></span></div>\
<div class="wrap-input100 validate-input" data-validate = "'+attributes.TextSecondhInput.placeholder+' is required">\
<input class="input100" type="password" name="'+attributes.TextSecondhInput.name+'" value="'+attributes.TextSecondhInput.value+'" placeholder="'+attributes.TextSecondhInput.placeholder+'">\
<span class="focus-input100"></span>\
<span class="symbol-input100">\
<i class="fa fa-lock" aria-hidden="true"></i>\
</span>\
</div>\
<div style="font-size: 12px;margin: 9px auto;width: 80%"><span id="error-'+attributes.TextSecondhInput.name+'-login" style="text-align: center;font-size: 20px;color: black;"></span></div>\
<div class="wrap-input100 validate-input" data-validate = "'+attributes.confirmPassword+' is required">\
<input class="input100" type="password" name="password_confirmation" value="" placeholder="'+attributes.confirmPassword+'">\
<span class="focus-input100"></span>\
<span class="symbol-input100">\
<i class="fa fa-lock" aria-hidden="true"></i>\
</span>\
</div>\
<div style="font-size: 12px;margin: 9px auto;width: 80%"><span id="error-'+attributes.confirmPassword+'-login" style="text-align: center;font-size: 20px;color: black;"></span></div>\
<div class="container-login100-form-btn">\
<button class="login100-form-btn">\
Register\
</button>\
</div>\
</form>\
</div>  </div> </div>';     


return html;
}
var getHtml = function() {


  var html='<div class="limiter" id="login-container" >\
  <div class="container-login100">\
  <div class="wrap-login100">\
  <span  class="close-btn" onclick="btn_close()">\
  <a >X</a>\
  </span>\
  <div class="login100-pic js-tilt" data-tilt>\
  <img src="img/img-01.png" alt="IMG">\
  </div>\
  <form class="login100-form validate-form" id="form-jira" action="'+attributes.form.action+'" method="'+attributes.form.method+'">\
  '+attributes.token+'\
  <span class="login100-form-title">\
  Sig In\
  </span>\
  <div class="wrap-input100 validate-input" data-validate = "Valid '+attributes.TextFirstInput.placeholder+' is required: ex@abc.xyz">\
  <input class="input100" type="text" name="'+attributes.TextFirstInput.name+'" placeholder="E-MAIL">\
  <span class="focus-input100"></span>\
  <span class="symbol-input100">\
  <i class="fa fa-envelope" aria-hidden="true"></i>\
  </span>\
  </div>\
  <div style="font-size: 12px;margin: 9px auto;width: 80%"><span id="error-'+attributes.TextFirstInput.name+'-login" style="text-align: center;font-size: 20px;color: black;"></span></div>\
  <div class="wrap-input100 validate-input" data-validate = "Password is required">\
  <input class="input100" type="password" name="'+attributes.TextSecondhInput.name+'" placeholder="Password">\
  <span class="focus-input100"></span>\
  <span class="symbol-input100">\
  <i class="fa fa-lock" aria-hidden="true"></i>\
  </span>\
  </div>\
  <div style="font-size: 12px;margin: 9px auto;width: 80%"><span id="error-'+attributes.TextSecondhInput.name+'-login" style="text-align: center;font-size: 20px;color: black;"></span></div>\
  <div class="container-login100-form-btn">\
  <button class="login100-form-btn">\
  Login\
  </button>\
  </div>\
  <div class="text-center p-t-12">\
  <span class="txt1">\
  Forgot\
  </span>\
  <a class="txt2" href="#">\
  Username / Password?\
  </a>\
  </div>\
  <div class="text-center p-t-136">\
  <a class="txt2" href="#">\
  Create your Account\
  <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>\
  </a>\
  </div>\
  </form>\
  </div>  </div> </div>';

  return html;


}

var checkParameters = function(param) {
  param.hasOwnProperty('fontColor') ? attributes.fontColor = param.fontColor : '';
  param.hasOwnProperty('token') ? attributes.token = param.token : '';
  param.hasOwnProperty('textButtonSubmit') ? attributes.textButtonSubmit = param.textButtonSubmit : '';
  param.hasOwnProperty('texBtnRegister') ? attributes.texBtnRegister = param.texBtnRegister : '';
  param.hasOwnProperty('name') ? attributes.name = param.name : '';
  param.hasOwnProperty('confirmPassword') ? attributes.confirmPassword = param.confirmPassword : '';


  param.hasOwnProperty('forgot') ? (param.forgot.hasOwnProperty('utlForgotPassword') ? attributes.forgot.utlForgotPassword = param.forgot.utlForgotPassword : '') : '';
  param.hasOwnProperty('forgot') ? (param.forgot.hasOwnProperty('text') ? attributes.forgot.text = param.forgot.text : '') : '';

  param.hasOwnProperty('remember') ? (param.remember.hasOwnProperty('isActive') ? attributes.remember.isActive = param.remember.isActive : '') : '';
  param.hasOwnProperty('remember') ? (param.remember.hasOwnProperty('text') ? attributes.remember.text = param.remember.text : '') : '';

    //check values of text attributes
    param.hasOwnProperty('text') ? (param.text.hasOwnProperty('aling') ? attributes.text.aling = param.text.aling : '') : '';
    param.hasOwnProperty('text') ? (param.text.hasOwnProperty('size') ? attributes.text.size = param.text.size : '') : '';
    param.hasOwnProperty('text') ? (param.text.hasOwnProperty('color') ? attributes.text.color = param.text.color : '') : '';

    //check values of TextFirstInput attributes
    param.hasOwnProperty('TextFirstInput') ? (param.TextFirstInput.hasOwnProperty('text') ? attributes.TextFirstInput.text = param.TextFirstInput.text : '') : '';
    param.hasOwnProperty('TextFirstInput') ? (param.TextFirstInput.hasOwnProperty('placeholder') ? attributes.TextFirstInput.placeholder = param.TextFirstInput.placeholder : '') : '';
    param.hasOwnProperty('TextFirstInput') ? (param.TextFirstInput.hasOwnProperty('name') ? attributes.TextFirstInput.name = param.TextFirstInput.name : '') : '';
    param.hasOwnProperty('TextFirstInput') ? (param.TextFirstInput.hasOwnProperty('value') ? attributes.TextFirstInput.value = param.TextFirstInput.value : '') : '';
    param.hasOwnProperty('TextFirstInput') ? (param.TextFirstInput.hasOwnProperty('textError') ? attributes.TextFirstInput.textError = param.TextFirstInput.textError : '') : '';

    //check values of TextSecondhInput attributes
    param.hasOwnProperty('TextSecondhInput') ? (param.TextSecondhInput.hasOwnProperty('text') ? attributes.TextSecondhInput.text = param.TextSecondhInput.text : '') : '';
    param.hasOwnProperty('TextSecondhInput') ? (param.TextSecondhInput.hasOwnProperty('placeholder') ? attributes.TextSecondhInput.placeholder = param.TextSecondhInput.placeholder : '') : '';
    param.hasOwnProperty('TextSecondhInput') ? (param.TextSecondhInput.hasOwnProperty('name') ? attributes.TextSecondhInput.name = param.TextSecondhInput.name : '') : '';
    param.hasOwnProperty('TextSecondhInput') ? (param.TextSecondhInput.hasOwnProperty('value') ? attributes.TextSecondhInput.value = param.TextSecondhInput.value : '') : '';
    param.hasOwnProperty('TextSecondhInput') ? (param.TextSecondhInput.hasOwnProperty('textError') ? attributes.TextSecondhInput.textError = param.TextSecondhInput.textError : '') : '';

    //check values of form attributes
    param.hasOwnProperty('form') ? (param.form.hasOwnProperty('action') ? attributes.form.action = param.form.action : '') : '';
    param.hasOwnProperty('form') ? (param.form.hasOwnProperty('method') ? attributes.form.method = param.form.method : '') : '';
    param.hasOwnProperty('form') ? (param.form.hasOwnProperty('ajax') ? attributes.form.ajax = param.form.ajax : '') : '';


  };


  this.iniregister = function(attributes = {}) {


    checkParameters(attributes);

    $("#register-jira").append($.parseHTML(getHtml_register()));

      return {
        ajax: function(clousure) {

          if (attributes.form.ajax) {

            document.getElementById("form-register-jira").onsubmit = clousure;

          }

        //  document.getElementById("form-jira").onsubmit = instruction;
      }
    }

  }
  this.initLogin = function(attributes = {}) {


    checkParameters(attributes);

    $("#login-jira").append($.parseHTML(getHtml()));

    return {
      ajax: function(clousure) {

        if (attributes.form.ajax) {

          document.getElementById("form-jira").onsubmit = clousure;

        }

        //  document.getElementById("form-jira").onsubmit = instruction;
      }
    }

  }

  this.build = function(attributes) {


  }

  this.errors=function(errors){

    $.each(errors, function( index, value ) {
      $("#error-"+value.input+"-login").text(value.error);
    });
    

  }



}

var login = new Login();



$('#login-button').click(function(){


  $("#micontainer").fadeIn();
  $("#login-container").fadeIn();
    // TweenMax.from("#container", .4, { scale: 0, ease:Sine.easeInOut});
    // TweenMax.to("#container", .4, { scale: 1, ease:Sine.easeInOut});


  });

function btn_close() {
  // body...


  $("#login-container").fadeOut("slow", function(){
   $("#login-jira").html(''); 
   $("#micontainer").fadeOut();
   $("#forgotten-container").fadeOut();

  //   TweenMax.from("#container", .4, { scale: 1, ease:Sine.easeInOut});
  // TweenMax.to("#container", .4, { left:"0px", scale: 0, ease:Sine.easeInOut});
});
}


/* Forgotten Password */
function forgotten() {
  // body...

  $("#micontainer").fadeOut(function(){
    $("#forgotten-container").fadeIn();
  });
}



$('#register-button').click(function(){


  $("#micontainer_register").fadeIn();
  $("#register-container").fadeIn();
    // TweenMax.from("#container", .4, { scale: 0, ease:Sine.easeInOut});
    // TweenMax.to("#container", .4, { scale: 1, ease:Sine.easeInOut});


  });

function btn_close_register() {
  // body...


  $("#register-container").fadeOut("slow", function(){
    $("#register-button").fadeIn(); 
    $("#register-jira").html(''); 
    $("#micontainer_register").fadeOut();


  //   TweenMax.from("#container", .4, { scale: 1, ease:Sine.easeInOut});
  // TweenMax.to("#container", .4, { left:"0px", scale: 0, ease:Sine.easeInOut});
});
}


/* Forgotten Password */



function Rdioclick(thiss) {
  // body...


  var sel = $(thiss).data('title');
  var tog = $(thiss).data('toggle');

  $('#'+tog).prop('value', sel);

  $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
  $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
}





function validate_form(input){
    //$(t89,his).next().toggle();
    var check = true;

    //e.preventDefault();  
    console.log('validar');
    for(var i=0; i<input.length; i++) {
      if(validate(input[i]) == false){
        showValidate(input[i]);
        check=false;
      }
    }

    return check;  
  }

    /*==================================================================
    [ Validate ]*/



    

    $(document).on("focus", ".validate-form .input100",function(e){

      hideValidate(this);
    });

    function validate (input) {
      if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
        if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
          return false;
        }
      }
      else {
        if($(input).val().trim() == ''){
          return false;
        }
      }
    }

    function showValidate(input) {
      var thisAlert = $(input).parent();

      $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
      var thisAlert = $(input).parent();

      $(thisAlert).removeClass('alert-validate');
    }
    
    

