<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- fontawesome icons CSS -->
	<!-- <link rel="stylesheet" href="{{ asset('admin/css/font-awesome.min.css') }}" type="text/css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400,500,700%7CSource+Sans+Pro:300i,400,400i,600,700">

	<!-- Custome scrollbar CSS -->
	<link rel="stylesheet" href="{{ asset('admin/css/jquery.custom-scrollbar.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('admin/css/fontawesome.min.css') }}" type="text/css">
	<!-- Footable CSS -->
	<link rel="stylesheet" href="{{ asset('admin/css/footable.bootstrap.min.css') }}" type="text/css">
    <!-- jvectormap CSS -->
	<link href="{{ asset('admin/css/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet">
	<!-- framework CSS -->

	<link href="{{ asset('admin/css/responsive.dataTables.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/dataTables.bootstrap4.css') }}" rel="stylesheet">

	@yield('style')
	<title>Kelmas | Admin</title>
</head>
<body class="fixed-header sticky-footer menuleft-open">
	<div class="loader-logo">
		<img src="{{ asset('favicon.png') }}" alt="Kelmas Ventures Ltd">
		<br>
		<div class="loader-ellipsis">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
    </div>
    @yield('background')
	<div class="wrapper">
		@yield('header')
		<!-- sidebar starts -->
		@yield('sidebar_left')
		<!-- sidebar Ends -->
		<!-- main container starts -->
		<div class="main-container">
			@include('admin.layouts.messages')
			@yield('content')
		</div>
		<!-- main container ends -->
		@yield('sidebar_right')
	</div>
	<!-- wrapper ends -->
	<!-- footer starts -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6"> &copy2019 Kelmas Ventures Ltd
				</div>
				<div class="col-12 col-md-6 text-right">
					Developed by </a>
					<a href="https://www.24seven.co.ke"  target = "blank" class="">24seven Developers</a>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer ends -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{ asset('admin/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('admin/js/popper.min.js') }}"></script>
	<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

	<!--Cookie js for theme chooser and applying it --> 
	<script src="{{ asset('admin/js/jquery.cookie.js') }}"></script> 

	<!-- Circular progress -->
	<script src="{{ asset('admin/js/jquery.custom-scrollbar.min.js') }}"></script>	

	<!-- Circular progress -->
	<script src="{{ asset('admin/js/circle-progress.min.js') }}"></script>

	<!-- Sparklines chartsw -->
	<script src="{{ asset('admin/js/jquery.sparkline.min.js') }}"></script>
    
    <!-- chart js -->
	<script src="{{ asset('admin/js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('admin/js/utils.js') }}"></script>
    
	<!-- Footable  -->
	<script src="{{ asset('admin/js/footable.min.js') }}"></script>
    
	<!-- Other JavaScript -->
	<script src="{{ asset('admin/js/main.js') }}"></script>

	<!-- data tables-->
	<script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('admin/js/dataTables.bootstrap4.js') }}"></script>
	<script src="{{ asset('admin/js/dataTables.responsive.min.js') }}"></script>
	<script>
			"use strict";
			$('#dataTables-example').DataTable({
				responsive: true,
				pageLength:10,
				sPaginationType: "full_numbers",
				oLanguage: {
					oPaginate: {
						sFirst: "<<",
						sPrevious: "<",
						sNext: ">", 
						sLast: ">>" 
					}
				}
			});
		</script>

    <script>
        "use strict";
        donutchart();
        function donutchart(){
             var ctx3 = document.getElementById("donutchart-area").getContext("2d");
                    window.myDoughnut = new Chart(ctx3, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                        ],
                        backgroundColor: [
                            
                            '#673ab7',
                            '#ec4061',
                            '#ffb803',
                            '#66cd2e',
                            '#11a0f8',
                        ],
                        label: 'Dataset 1'
                    }],
                    labels: [
                        "Eagle Ltd",
                        "Foogle Ltd",
                        "Chinmayaar",
                        "OpenField",
                        "MarsXspace"
                    ]
                },
                options: {
                    responsive: true,
                    legend: {
                        display: false,
                        position: 'top',
                    },
                    title: {
                        display: false,
                        text: 'Chart.js Doughnut Chart'
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
            });

            setInterval(function(){
                myDoughnut.data.datasets.forEach(function(dataset) {
                    dataset.data = dataset.data.map(function() {
                        return randomScalingFactor();
                    });
                });
                window.myDoughnut.update();      
            }, 2000);
            
            
            /* Footable */
            $('.footable').footable();

        }
        
        var gdpData = {
			"AF": 16.63,
			"AL": 11.58,
			"AU": 158.97,
			"IN": 100.97,
		};
		$('#mapwrap2').vectorMap({
			map: 'world_mill',
			regionStyle: {
				initial: { fill: '#b7c8ff' }
			},
			series: {
				regions: [{
					values: gdpData,
					scale: ['#b7c8ff', '#3158d8'],
					normalizeFunction: 'polynomial'
				}]
			},
			onRegionTipShow: function (e, el, code) {
				el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
			}
		});
        $('#mapasiawrap').vectorMap({
			map: 'asia_mill', regionStyle: {
				initial: { fill: '#7a99ff' }
			}
		});


    </script>
	<script>

		function ConfirmDelete()
		{
		var x = confirm("Are you sure you want to permanently remove the record?");
		if (x  == true)
		return true;
		else
		return false;
		}

	</script>
</body>

</html>