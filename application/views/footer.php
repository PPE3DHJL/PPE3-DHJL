<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
<?php print_r($_COOKIE);?>


</div><script src="<?php echo site_url('js/sha256.js');?>"></script>
<script src="<?php echo site_url('js/login.js');?>"></script>
</body>
</html>