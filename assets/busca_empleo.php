<?php 

  session_start();
  include_once "../conf/conf.php";

  $sql2 = "SELECT J.ID as job, J.*, C.*, J.created_at as fec_job
           FROM JOBS J 
           INNER JOIN JOBS_PROFILES JP 
           ON J.id = JP.id_job 
           INNER JOIN PROFILES P 
           ON jp.id_profile = P.id 
           INNER JOIN COMPANIES C 
           ON J.company_id = C.id
           WHERE P.id = " . $_SESSION["idPosutlante"] . 
           " AND (J.name like '%".$_POST["param1"]."%' OR J.job_description like '%".$_POST["param1"]."%' OR J.keywords like '%".$_POST["param1"]."%')";
  
  $db = $dbh->prepare($sql2);
  $db->execute();
  // // $data= Array();
  // $reg = $db->fetch(PDO::FETCH_OBJ);
?>


<?php 

    while ( $regJobs = $db->fetch(PDO::FETCH_OBJ) ) {

    $createDate = ( !is_null($regJobs->created_at) ) ? date("d/m/Y", strtotime( $regJobs->created_at )) : '';
    
 ?>


    <div class="row" style="border-bottom: 1px solid #D8D8D8; padding: 10px 0px 20px; margin-bottom: 10px;">
      <div class="col-12">

          <div class="nombre_job poppins-medium-storm-dust-16px" style="border: none;">
            <a class="nombre_job poppins-medium-storm-dust-16px" onclick="irDetalleEmpleo(<?php echo $regJobs->job?>)">  
              <?php echo $regJobs->name; ?> 
            </a>
          </div>

          <div class="row" style="border: none; margin-top: -15px; margin-left: -20px;">
            <div class="col-3"></div>
            <div class="col-9" style="padding-left: 0px;">
              <a onclick="alert('dsds')" class="link_nombre_job">
                <?php echo $regJobs->business_name; ?>
              </a>
            </div>
          </div>

          <div class="row" style="border: none; margin-left: -20px;">
            <div class="col-3"></div>
            <div class="col-9 poppins-normal-storm-dust-12px" style="padding-left: 0px; padding-top: 8px;">
                San Isidro, Lima
            </div>
          </div>


          <div class="row" style="border: none; text-align: left; margin-left: -20px;">
            <div class="col-3"></div>

            <div class="col-5 poppins-normal-storm-dust-16px" style="border: none; padding-left: 0px; margin-top: 8px; padding-top: 2px;">
              <?php echo $regJobs->type_of_contract; ?>
            </div>

            <div class="col-1" style="margin-top: 8px; border: none; padding-top: 0px;">
              <img
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/calendar-1@2x.svg"
            alt="Calendar 1"
              />
            </div>

            <div class="col-3 poppins-medium-silver-chalice-12px" style="border: none; font-size: 10px; text-align: left; margin-top: 8px; padding-top: 7px; padding-left: 7px;">
              <?php echo date('d/m/Y', strtotime($regJobs->fec_job));?>
            </div>
          </div>   

          <img
            class="ellipse-18"
            src="https://anima-uploads.s3.amazonaws.com/projects/628805940f1d94aefa20936d/releases/631015a33cda19c4344dee13/img/ellipse-18@2x.png"
            alt="Ellipse 18"
          />       
        
          
      </div>
    </div>



<?php  } ?>