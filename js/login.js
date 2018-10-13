 function SecurityConnector() {
     //ALTER TABLE `user` ADD `lastWriteAcces` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `photoUser`, ADD `token` CHAR(64) NULL DEFAULT NULL AFTER `lastWriteAcces`;
     var loginhash = "0";
     var tokenHash = "0";
     var thisSecu = this;
     this.getLoginHash = function() { return loginhash; };
     this.getToken = function() { return tokenHash; };
     this.masterKey = function() {
         var login = document.getElementsByName('login')[0];
         //selecteur css ;-=) style ATT css 3 selection par attributs
         var mdp = document.querySelector('input[name=password]');
         loginhash = sha256(login.value.concat(mdp.value));
     };
     this.auth = function(callback) {
         //async
         var xhr = new XMLHttpRequest();
         xhr.open('GET', "AsyncAuth/tokenizer/" + loginhash, true);
         xhr.onreadystatechange = (function(evt) {
             if (evt.target.readyState == 4) {
                 console.log(evt.target.responseText);
                 var obj = JSON.parse(evt.target.responseText);
                 document.cookie = 'token=' + obj.token;
                 thisSecu.tokenHash = obj.token;
                 callback(obj);
             }
         }).bind(this);
         xhr.send();
     };
 }
 securityConnector = new SecurityConnector();

 function disconectEvent(evt) {

     document.cookie = '';
     window.location = '.';

 }

 function setMenuEvents(evt) {
     var disconnect = document.getElementById('disconnect')
     if (undefined === disconnect) disconnect.addEventListener('click', disconectEvent);
 }
 setMenuEvents();

 function setLoginEvents() {

     function submitform(callback) {
         //console.log(evt);
         document.forms.loginForm.style.display = 'none';
         document.getElementById('progress').style.display = 'block';
         securityConnector.masterKey();
         securityConnector.auth(callback);
     }



     var formLogin = document.forms.loginForm;
     formLogin.action = "#";
     submit.addEventListener('click',
         function(evt) {
             submitform(function(user) {
                 if (undefined !== user.token) {


                     var date = new Date();
                     date.setTime(date.getTime() + (0.5 * 24 * 60 * 60 * 1000));
                     var expires = "; expires=" + date.toGMTString();


                     //document.cookie += user.token; //+ "=" + value + "; expireDate=" + expires + "; path=/; domain=localhost";



                     window.location = "offres/";
                 } else {
                     document.forms.loginForm.style.display = 'block';
                     document.getElementById('progress').style.display = 'none';
                 }

             });
         });
 }
 try {
     setLoginEvents();
 } catch (error) {

 }