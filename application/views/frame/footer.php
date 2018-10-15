	</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

</div>

<?php var_dump($_COOKIE);?>

</body>


<script>const BASE_URL='<?php echo base_url();?>';</script>
	<script src="<?php  echo  base_url('js/sha256.js') ; ?>"></script>	<script src="<?php  echo  base_url('js/login.js') ; ?>"></script>
        <script src="<?php  echo  base_url('js/troc2temps.js');?>"></script>

<?php
if(isset($extraFooter))
echo $extraFooter;?>



</html>
