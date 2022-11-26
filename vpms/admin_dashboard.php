<?php
include('connection.php');  
?>



 <html class="no-js" lang="">
<head>
    <title>Admin Dashboard</title>
	
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
   <link rel="stylesheet" href="assets/css/bootstrap1.min.css">
   <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
  
 
        
        <div class="content">
            
            <div class="animated fadeIn">
                
                <div class="row">
                    <?php
//todays Vehicle Entries
 $query=mysqli_query($con,"select ID from tblvehicle where date(InTime)=CURDATE();");
$count_today_vehentries=mysqli_num_rows($query);
 ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-keypad"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $count_today_vehentries;?></span></div>
                                            <div class="stat-heading">Todays Vehicle Entries</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <?php
///todays COLLECTED AMOUNT
 $query1=mysqli_query($con,"select SUM(ParkingCharge) AS value_sum from tblvehicle where date(InTime)=CURDATE();");
$row = mysqli_fetch_assoc($query1); 
$sum = $row['value_sum'];
 ?>
                   
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $sum;?></span></div>
                                            <div class="stat-heading">Today's Collected Amount</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <?php
//Total Vehicle Entries
 $query3=mysqli_query($con,"select ID from tblvehicle");
$count_total_vehentries=mysqli_num_rows($query3);
 ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-note2"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $count_total_vehentries?></span></div>
                                            <div class="stat-heading">Total Vehicle Entries</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
				
				   <div class="col-lg-3 col-md-6">
                        <?php
//Total AMOUNT COLLECTED TILL DATE 
$query2=mysqli_query($con,"select SUM(ParkingCharge) AS total_sum from tblvehicle");
$row1 = mysqli_fetch_assoc($query2); 
$sum1 = $row1['total_sum'];
 ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-calculator"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $sum1 ?></span></div>
                                            <div class="stat-heading">Total Collected Amount till date</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
				 </div>
					 
					<div class="col-lg-3 col-md-6">
                        <?php	
                    
//Total Four wheeler Slots Left
 $query4=mysqli_query($con, "select COUNT(*) from tblvehicle where VehicleCategory = 'Four Wheeler Vehicle' AND Status=''");
$fourcount=mysqli_fetch_array($query4);
$type="Four Wheeler Vehicle";
$query5=mysqli_query($con, "select * from tblcategory where VehicleCat= '$type'");
$result5=mysqli_fetch_array($query5);
$total_slots_4_left=$result5['Slot'] - $fourcount[0];
 ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-5">
                                        <i class="pe-7s-car"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $total_slots_4_left?></span></div>
                                            <div class="stat-heading">Total Four Wheeler Slots Left</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-lg-3 col-md-6">
                        <?php
//Total Two wheeler Slots Left
 $query6=mysqli_query($con, "select COUNT(*) from tblvehicle where VehicleCategory = 'Two Wheeler Vehicle' AND Status=''");
$twocount=mysqli_fetch_array($query6);
$type="Two Wheeler Vehicle";
$query7=mysqli_query($con, "select * from tblcategory where VehicleCat= '$type'");
$result7=mysqli_fetch_array($query7);
$total_slots_2_left=$result7['Slot'] - $twocount[0];
 ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-6">
									 <i class="pe-7s-bicycle"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $total_slots_2_left?></span></div>
                                            <div class="stat-heading">Total Two Wheeler Slots Left</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
				</div>
                
               
            </div>
            
        </div>
       
        <div class="clearfix"></div>
       
       <?php include_once('includes/footer.php');?>

    
 
    <script src="assets/js/main.js"></script>
    <script src="assets/js/init/weather-init.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>
	
</body>
</html>