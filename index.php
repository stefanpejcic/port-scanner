<?php
session_start();

define('IN_ADMIN', true);

require_once('header.php');

?>
	
<div id="wrap" style="margin:70px 0 0 0">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1 style="margin:0px;"><?php echo $lang['3']; ?></h1>
				</div>
				<p>
					<?php echo $lang['4']; ?>
				</p>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="form-inline">
						  <div class="form-group">
							  <label class="sr-only" for="server">Domen / IP adresa</label>
							  <input style="width:195px;" class="form-control" id="server" name="server" placeholder="Domen/IP adresa" value="<?php echo RealIpAddress(); ?>">
						  </div>
						  <div class="form-group">
							  <label class="sr-only" for="port">Port</label>
							  <input style="width:150px;" class="form-control" id="port" name="port" placeholder="Port" value="80">
						  </div>         
						  <input type="submit" class="btn btn-primary" id="myButton" value=" Proveri" />
						  <div id="flash" class="loading"></div>
						         
						  <div style="margin:10px 0 0 0;" class="lblBtn">
							 <span class="label label-default" id="20" port="20" onclick="getvalues(this)">FTP - 20</span>
							<span class="label label-primary" id="22" port="22" onclick="getvalues1(this)">SSH - 22</span>
							<span class="label label-success" id="25" port="25" onclick="getvalues2(this)">SMTP - 25</span>
							<span class="label label-success" id="80" port="80" onclick="getvalues3(this)">HTTP - 80</span>
							<span class="label label-info" id="993" port="993" onclick="getvalues4(this)">IMAP - 993</span>
							<span class="label label-warning" id="3389" port="3389" onclick="getvalues5(this)">RDP - 3389</span>
							<span class="label label-danger" id="110" port="110" onclick="getvalues6(this)">POP3 - 110</span>
							<span id="quick" class="label label-success" port="22">Brzo Skeniranje[15 Porta]</span>
							<span id="long" class="label label-warning" port="3389">Kompletno Skeniranje[36 Porta]</span>
						  </div>

						</div>

					</div>

				</div>

				<div id="log">
<div>
					<ol id="update" class="timeline"></ol>
</div>
				</div>
				<div>
					
					<h2><?php echo $lang['9']; ?></h2>
					<p><?php echo $lang['10']; ?></p>

					<h2><?php echo $lang['11']; ?></h2>
					<p><?php echo $lang['12']; ?></p>
<p><?php echo $lang['13']; ?></p>
<p><?php echo $lang['14']; ?></p>
<p><?php echo $lang['15']; ?></p>
					
					<h2><?php echo $lang['16']; ?></h2>
					<p><?php echo $lang['17']; ?></p>



					
<br></br>
				</div>
			</div>

			<?php 

            require_once("sidebar.php"); 

            ?>
			
		</div>
	</div>
</div>
<?php
require_once('footer.php');
?>