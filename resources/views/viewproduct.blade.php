<!DOCTYPE html>
<html>
<head>
<title>Metro Panel Flat Bootstarp Resposive Website Template| Home :: w3layouts</title>
<link href="{{url('public/assetsadmin/css/bootstrap.css')}}" rel="stylesheet" type='text/css' />
<!-- Custom Theme files -->
<link href="{{url('public/assetsadmin/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="{{url('public/assetsadmin/js/jquery.min.js')}}"></script>
<link rel="stylesheet" href="{{url('public/assetsadmin/css/font-awesome.css')}}">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Metro Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.calender-left').fadeOut('slow', function(c){
	  		$('.calender-left').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.calender-right').fadeOut('slow', function(c){
	  		$('.calender-right').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close2').on('click', function(c){
		$('.graph').fadeOut('slow', function(c){
	  		$('.graph').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close3').on('click', function(c){
		$('.site-report').fadeOut('slow', function(c){
	  		$('.site-report').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close4').on('click', function(c){
		$('.total-sale').fadeOut('slow', function(c){
	  		$('.total-sale').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close5').on('click', function(c){
		$('.to-do').fadeOut('slow', function(c){
	  		$('.to-do').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close7').on('click', function(c){
		$('.user-trends').fadeOut('slow', function(c){
	  		$('.user-trends').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close6').on('click', function(c){
		$('.world-map').fadeOut('slow', function(c){
	  		$('.world-map').remove();
		});
	});	  
});
</script>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-48014931-1', 'codyhouse.co');
  	ga('send', 'pageview');

  	jQuery(document).ready(function($){
  		$('.close-carbon-adv').on('click', function(){
  			$('#carbonads-container').hide();
  		});
  	});
</script>
	<script src="{{url('public/assetsadmin/js/zingchart.min.js')}}"></script>
	<script src="{{url('public/assetsadmin/js/zingchart.jquery.js')}}"></script>
	<script src="{{url('public/assetsadmin/js/jquery.easydropdown.js')}}"></script>
	<script src="{{url('public/assetsadmin/js/jquery.nicescroll.js')}}"></script>
	
					 <link href="{{url('public/assetsadmin/css/jqvmap.css')}}" media="screen" rel="stylesheet" type="text/css" />
					 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="{{url('public/assetsadmin/js/jquery.vmap.js')}}" type="text/javascript"></script>
    <script src="{{url('public/assetsadmin/js/jquery.vmap.world.js')}}" type="text/javascript"></script>
	<script src="{{url('public/assetsadmin/js/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
    
	<script type="{{url('public/assetsadmin/text/javascript')}}">
	jQuery(document).ready(function() {
		jQuery('#vmap').vectorMap({
		    map: 'world_en',
		    backgroundColor: '#333333',
		    color: '#ffffff',
		    hoverOpacity: 0.7,
		    selectedColor: '#666666',
		    enableZoom: true,
		    showTooltip: true,
		    values: sample_data,
		    scaleColors: ['#C8EEFF', '#006491'],
		    normalizeFunction: 'polynomial'
		});
	});
	</script>
<!----Calender -------->
  <link rel="stylesheet" href="{{url('public/assetsadmin/css/clndr.css')}}" type="text/css" />
  <script src="{{url('public/assetsadmin/js/underscore-min.js')}}"></script>
  <script src= "{{url('public/assetsadmin/js/moment-2.2.1.')}}'"></script>
  <script src="{{url('public/assetsadmin/js/clndr.js')}}"></script>
  <script src="{{url('public/assetsadmin/js/site.js')}}"></script>
<!----End Calender -------->
<script src="{{url('public/assetsadmin/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
		    <script type="{{url('public/assetsadmin/text/javascript')}}">
			    $(document).ready(function () {
			        $('#horizontalTab,#horizontalTab1,#horizontalTab2').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>
<link href="{{url('public/assetsadmin/css/nav.css')}}" rel="stylesheet" type="text/css" media="all"/>
<script src="{{url('public/assetsadmin/js/main.js')}}"></script> <!-- Resource jQuery -->
					<!-- chart -->
					<script src="{{url('public/assetsadmin/js/Chart1.js')}}"></script>
					<!-- //chart -->
</head>
<body>
	<div class="col-md-3 side-bar">
			<div class="logo text-center">
				<a href="#"><img src="{{url('public/assetsadmin/images/logo.png')}}" alt="" /></a>
			</div>
		
			<div class="navigation">
				<h3>Navigation</h3>
				<ul>
					<li><a href="#"><i class="dash"></i></a></li>
					<li><a href="#">Dashboard</a></li>
				</ul>
				
			</div>
				<div class="navigation">
				<h3>Featured</h3>
				<ul>
                  <li class="nav-item">
                <a data-bs-toggle="collapse" href="#tables">
                  <i class="chart"></i>
                  <p>Product</p>
                  <span class="caret"></span>
                </a>
                <div class="chart">
                  <ul>
                    <li>
                      <a href="{{url('/add')}}">
                        <span class="sub-item">Add Product</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{url('/view')}}">
                        <span class="sub-item">View Product</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
</ul>

				</ul>
				<ul>
					<li><a href="#"><i class="art"></i></a></li>
					<li><a href="#">Articals</a></li>
				</ul>
				<ul>
					<li><a href="#"><i class="user"></i></a></li>
					<li><a href="#">Users</a></li>
				</ul>
				<ul>
					<li><a href="#"><i class="fat"></i></a></li>
					<li><a href="#">Favorites</a></li>
				</ul>
				<ul>
					<li><a href="#"><i class="speed"></i></a></li>
					<li><a href="#">Speed</a></li>
				</ul>
				<ul>
					<li><a href="#"><i class="setting"></i></a></li>
					<li><a href="#">Settings</a></li>
				</ul>
			</div>
			<div class="navigation">
				<h3>All Others</h3>
				<ul>
					<li><a href="#"><i class="rev"></i></a></li>
					<li><a href="#">Revenue</a></li>
				</ul>
				<ul>
					<li><a href="#"><i class="pic"></i></a></li>
					<li><a href="#">Pictures</a></li>
				</ul>
				<ul>
					<li><a href="#"><i class="faq"></i></a></li>
					<li><a href="#">FAQs</a></li>
				</ul>
			</div>
		</div>
		<div class="container">
        
             <div class="page-inner">
            <div class="page-header">
				 <div class="row">
                      <div class="col-md-6 col-md-6">
                  
                      <table
                        id="basic-datatables"
                        class="display table table-striped table-hover"
                      >
                        <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Img</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
    </thead>
                    
     <tbody>

 @php $sn = 1; @endphp

@foreach($viewproduct as $view)
<tr>
    <td>{{ $sn++ }}</td>
    <td>{{ $view->name }}</td>
    <td>{{ $view->price }}</td>
    <td>
<img src="{{url('public/assestsadmin/images/'.$view->img)}}" width="70" height="70">


    </td>
    <td>Edit</td>
    <td>Delete</td>
</tr>
@endforeach
</tbody>





</table>
			</body>
					</html>