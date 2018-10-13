<div id="divLogin">
        <div id="login-image">
            <img src="<?php echo ($loginType!='login')? 'img/newuser.png':'img/user.png'?>" />
        </div>

        <form name="loginForm"  role="form" >
            <legend>Connectez-vous</legend>
            <?php 
if($loginType!='login' ){
    ?> <div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Input field">
</div><?php
}
?>
            <div class="form-group">
                <label for="">Login</label>
                <input type="text" class="form-control" name="login" placeholder="" value="champ">
            </div>
            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="" value="champ">
            </div>



            <input type="reset" id="reset" class="btn btn-warning"/>
           
        </form>
        <button  id="submit" class="btn btn-primary">Submit</button>
    <div id="progress" style="display:none;text-align:center;"><img src="img/progress.gif"/></div>


