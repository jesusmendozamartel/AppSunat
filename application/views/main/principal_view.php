<?php $this->load->view('estructura/header');?>
<body class="body-bg">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- main wrapper start -->
    <div class="horizontal-main-wrapper">
	<?php $this->load->view('estructura/menu');?>
        <div class="main-content-inner">
            <div class="container">
                <div class="row" id='main'>
				  <!-- main content start -->
				  
				  	<?php $this->load->view('main/gd_ae_view');?>
	
				  <!-- main content end -->  
                </div>
            </div>
        </div>
        <!-- main content area end -->
    </div>
    <!-- main wrapper start -->
    
	<?php $this->load->view('estructura/footer2');?>
</body>

</html>
