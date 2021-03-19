<?php 
  
     include 'tablas.php';

?>


<!doctype html>
<html lang="en">
    <!-- -----------------cabecera de la pagina----------- -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel=" stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="datatable/datatables.min.css">
    <link rel="stylesheet" href="datatable/DataTables-1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.datatables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css.css">
    <link rel="stylesheet" href="main.css">

<!-- libreria para botones y panel -->
    <link rel="stylesheet" type="text/css" href="DataTables-1.10.24/css/dataTables.bootstrap4.min.css"/>
   <link rel="stylesheet" type="text/css" href="Buttons-1.7.0/css/buttons.bootstrap4.min.css"/>
   
   <script src="https://kit.fontawesome.com/a25358e920.js" crossorigin="anonymous"></script>
    <title>DataTables</title>
  </head>

  <!-- -----------------cuerpo de la pagina----------- -->
  <body>
  <header>
    <h1 class="text-center text-black">BiENVENIDOS AL SISTEMA</h1>
<h2 class="text-center text-black">Informacion de la agencia de casting</h2>
  </header>

  <div class="container">
     <ul class="nav nav-tabs" id="myTab">
          <li class="nav-item">
            <button class="nav-link active" id="home-tab" href="#home" data-bs-toggle="tab">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
  <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" class="text-primary" />
</svg>
          </svg>
               Clientes
          </button>
          </li>
          <li class="nav-item">
            <button class="nav-link" id="profile-tab" href="#profile" data-bs-toggle="tab">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
            <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" class="text-info"/>
</svg>
            Casting</button>
          </li>

        <li class="nav-item">
            <button class="nav-link" id="contact1-tab" href="#contact1" data-bs-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
           <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" class="text-info"/>
</svg>
               Candidatos postulados
              </button>

              <li class="nav-item">
                  <button class="nav-link" id="contact2-tab" href="#contact2" data-bs-toggle="tab">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                 <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                 <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" class="text-primary"/>
   </svg>
               Contratos pendientes
              </button>

          <li class="nav-item">
            <button class="nav-link" id="contact3-tab" href="#contact3" data-bs-toggle="tab">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-check" viewBox="0 0 16 16">
            <path d="M.5 3l.04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z" class="text-warning" />
            <path d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>
               Empleados del casting
              </button>

          <li class="nav-item">
            <button class="nav-link" id="contact4-tab" href="#contact4" data-bs-toggle="tab"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
            <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z" class="text-success"/>
</svg>
               Pruebas online
              </button>

          <li class="nav-item">
            <button class="nav-link" id="contact5-tab" href="#contact5" data-bs-toggle="tab">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
             <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" class="text-danger"/>
</svg>
               Perfil del candidato
              </button>

          <li class="nav-item">
            <button class="nav-link" id="contact6-tab" href="#contact6" data-bs-toggle="tab">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" class="text-danger"/>
             <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
               Pruebas presenciales
              </button>

         </li>
      </ul>


    <div class="tab-content" id="myTabContent">
      <div class="tab-pane active" id="home">
        <div class="row border g-0 rounded shadow-sm">
          <div class="col p-4">
           <h2 class="text-center text-primary">Tabla: <?php echo "clientes" ?></h2>
           <div class="tableresponsive">
             <table id="example" class="table table-striped table-bordered table-hover table-info" style="width:100%">
              <thead class="table-dark" > 
                <tr>
                  <th>Cod cliente</th>
                  <th>Nombre</th>
                  <th>Direccion</th>
                  <th>Telefono</th>
                  <th>Persona de contacto</th>
                  <th>Tipo de actividad</th>
                </tr>
               </thead>
              <tbody>
                 <?php
                for ($i=0;$i<$n;$i++) {
                 ?>
               <tr>
                  <td><?php echo $resultado[$i]['cod_cliente'] ?></td>
                  <td><?php echo $resultado[$i]['Nombre'] ?></td>
                  <td><?php echo $resultado[$i]['Direccion'] ?></td>
                  <td><?php echo $resultado[$i]['Telefono'] ?></td>
                  <td><?php echo $resultado[$i]['Persona de contacto'] ?></td>
                  <td><?php echo $resultado[$i]['Tipo de actividad'] ?></td>
              </tr>
              <?php } ?>
          </tbody>
      </table>
      </div>
    </div>
  </div>
</div>


      <div class="tab-pane" id="profile"> 
      <div class="row border g-0 rounded shadow-sm">
          <div class="col p-4">
           <h2 class="text-center text-success">Tabla: <?php echo "Casting" ?></h2>
           <div class="tableresponsive">
             <table id="example1" class="table table-striped table-bordered table-hover table-info" style="width:100%">
              <thead class="table-dark" > 
                <tr>
                  <th>Cod Casting</th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Costo</th>
                  <th>Tipo de Casting</th>
                </tr>
               </thead>
              <tbody>
                 <?php
                for ($i=0;$i<$n1;$i++) {
                 ?>
               <tr>
                  <td><?php echo $resultado1[$i]['cod_casting'] ?></td>
                  <td><?php echo $resultado1[$i]['Nombre'] ?></td>
                  <td><?php echo $resultado1[$i]['Descripcion'] ?></td>
                  <td><?php echo $resultado1[$i]['costo'] ?></td>
                  <td><?php 
                           switch ($resultado1[$i]['cod_tipo_casting']){
                              case 102:  echo "Isabel Marín"; break;
                              case 239:  echo "Pablo Uriibe"; break;
                              case 312:  echo "Meribeth Mendez"; break;
                              case 328:  echo "Fabian Molina"; break;
                              case 332:  echo "Gloria Mendoza"; break;
                              case 471:  echo "diego Forero"; break;
                              case 532:  echo "Sandra pelaez"; break;
                              case 683:  echo "Rafael Alvarez"; break; 
                              case 732:  echo "Oscar Polo"; break;
                              case 932:  echo "Angelica Peréz";
                            }
                         ?>
                    </td> 
              </tr>
              <?php } ?>
          </tbody>
      </table>
      </div>
    </div>
  </div>
</div>

      <div class="tab-pane" id="contact1">
       <div class="row border g-0 rounded shadow-sm">
          <div class="col p-4">
           <h2 class="text-center text-success">Tabla: <?php echo "Candidato" ?></h2>
           <div class="tableresponsive">
             <table id="example3" class="table table-striped table-bordered table-hover table-info" style="width:100%">
              <thead class="table-dark" > 
                <tr>
                  <th>Cod candidato</th>
                  <th>Nombre del casting</th>
                  <th>Tipo de candidato</th>
                  <th>Direccion</th>
                  <th>Telefono</th>
                  <th>Representante</th>
                  <th>Info del perfil</th>
                  <th>Fotografia</th>
                  <th>Fecha de nacimiento</th>
                </tr>
               </thead>
              <tbody>
                 <?php
                for ($i=0;$i<$n3;$i++) {
                 ?>
               <tr>
                  <td><?php echo $resultado3[$i]['cod_candidato'] ?></td>
                  <td><?php 
                           switch ($resultado3[$i]['cod_casting']){
                            case 142:  echo "Casting Markt PQ"; break;
                            case 203:  echo "Cast. Comercial JN"; break;
                            case 211:  echo "Casting Publish"; break;
                            case 213:  echo "Aud Rt"; break;
                            case 230:  echo "Cast. Model"; break;
                            case 231:  echo "Brig Movie"; break;
                            case 248:  echo "Rom TF"; break;
                            case 249:  echo "Pw Top Model"; break; 
                            case 264:  echo "FP Cine"; break;
                            case 282:  echo "Movie QR";
                            }
                         ?>
                    </td> 

                  <td><?php 
                           switch ($resultado3[$i]['cod_tipo']){
                            case 3721:  echo "DNI: 489301"; break;
                            case 3789:  echo "DNI: 736289"; break;
                            case 3892:  echo "DNI: 3784921"; break;
                            case 5627:  echo "DNI: 1892034"; break;
                            case 6271:  echo "DNI: 2783920"; break;
                            case 7121:  echo "DNI: 22673467"; break;
                            case 7281:  echo "DNI: 3790103"; break;
                            case 7328:  echo "DNI: 3256891"; break; 
                            case 8291:  echo "DNI: 3728910"; break;
                            case 8361:  echo "DNI: 378920";
                            }
                         ?>
                    </td> 
                  <td><?php echo $resultado3[$i]['Direccion'] ?></td>
                  <td><?php echo $resultado3[$i]['Telefono'] ?></td>
                  <td><?php 
                           switch ($resultado3[$i]['Ruc']){
                              case 2211:  echo "No tiene"; break;
                              case 27840:  echo "Angelica Marquez"; break;
                              case 48920:  echo "Sebastian Garcéz"; break;
                              case 67392:  echo "Lina Zuñiga"; break;
                              case 378402:  echo "July Gaviria"; break;
                              case 826763:  echo "Hugo Camargo";
                            }
                         ?>
                    </td> 
                  <td><?php echo $resultado3[$i]['cod_perfil'] ?></td>
                  <td><img class="img-thumbnail" src=<?php echo $resultado3[$i]['Foto'] ?>  style="width:30;height:15" alt=""></td>
                  <td><?php echo $resultado3[$i]['F_nacimiento'] ?></td>
                </tr>
              <?php } ?>
          </tbody>
      </table>
      </div>
    </div>
  </div>
</div>


    <div class="tab-pane" id="contact2">
      <div class="row border g-0 rounded shadow-sm">
          <div class="col p-4">
           <h2 class="text-center text-primary">Tabla: <?php echo "contrato" ?></h2>
           <div class="tableresponsive">
             <table id="example4" class="table table-striped table-bordered table-hover table-info" style="width:100%">
              <thead class="table-dark" > 
                <tr>
                  <th>Nombre del Casting</th>
                  <th>Nombre del cliente</th>
                  <th>Fecha de contrato</th>
                </tr>
               </thead>
              <tbody>
                 <?php
                for ($i=0;$i<$n4;$i++) {
                 ?>
               <tr>
                  <td><?php 
                           switch ($resultado4[$i]['cod_casting']){
                              case 142:  echo "Casting Markt PQ"; break;
                              case 203:  echo "Cast. Comercial JN"; break;
                              case 211:  echo "Casting Publish"; break;
                              case 213:  echo "Aud Rt"; break;
                              case 230:  echo "Cast. Model"; break;
                              case 231:  echo "Brig Movie"; break;
                              case 248:  echo "Rom TF"; break;
                              case 249:  echo "Pw Top Model"; break; 
                              case 264:  echo "FP Cine"; break;
                              case 282:  echo "Movie QR";
                            }
                         ?>
                    </td> 

                  <td><?php 
                           switch ($resultado4[$i]['cod_cliente']){
                              case 152:  echo "Benjamín Diaz"; break;
                              case 153:  echo "Maria Barrios"; break;
                              case 164:  echo "Yenn Mendoza"; break;
                              case 173:  echo "Ángel Madrid"; break;
                              case 193:  echo "Leandro Lopez"; break;
                              case 215:  echo "Evelyn Chavez"; break;
                              case 251:  echo "Jairo Gonzales"; break;
                              case 295:  echo "Jacqueline Casas"; break; 
                              case 319:  echo "Sara Peréz"; break;
                              case 324:  echo "Carolina Acosta";
                            }
                         ?>
                    </td> 
                    <td><?php echo $resultado4[$i]['Fecha de contrato'] ?></td>
              </tr>
              <?php } ?>
          </tbody>
      </table>
      </div>
    </div>
  </div>
</div>


<div class="tab-pane" id="contact3">
      <div class="row border g-0 rounded shadow-sm">
          <div class="col p-4">
           <h2 class="text-center text-info">Tabla: <?php echo "empleado" ?></h2>
           <div class="tableresponsive">
             <table id="example5" class="table table-striped table-bordered table-hover table-info" style="width:100%">
              <thead class="table-dark" > 
                <tr>
                  <th>Cod Empleado</th>
                  <th>Nombre del casting</th>
                  <th>Encargo del empleado</th>
                  <th>Nombre</th>
                  <th>DNI</th>
                  <th>Direccion</th>
                </tr>
               </thead>
              <tbody>
                 <?php
                for ($i=0;$i<$n5;$i++) {
                 ?>
               <tr>
                  <td><?php echo $resultado5[$i]['cod_empleado'] ?></td>
                  <td><?php 
                           switch ($resultado5[$i]['cod_casting']){
                            case 142:  echo "Casting Markt PQ"; break;
                            case 203:  echo "Cast. Comercial JN"; break;
                            case 211:  echo "Casting Publish"; break;
                            case 213:  echo "Aud Rt"; break;
                            case 230:  echo "Cast. Model"; break;
                            case 231:  echo "Brig Movie"; break;
                            case 248:  echo "Rom TF"; break;
                            case 249:  echo "Pw Top Model"; break; 
                            case 264:  echo "FP Cine"; break;
                            case 282:  echo "Movie QR";
                            }
                         ?>
                    </td> 
                    <td><?php 
                           switch ($resultado5[$i]['cod_tipo_empleado']){
                            case 3243:  echo "Gestionar la reunion"; break;
                            case 19035:  echo "Supervisar la reunion"; break;
                            case 27803:  echo "Encargado de la logistica"; break;
                            case 38912:  echo "Dirigir la reunion"; break;
                            case 59902:  echo "Dirigir la logistica"; break;
                            case 67382:  echo "Supervisar la prueba"; break;
                            case 82943:  echo "Dirigir la prueba"; break;
                            case 84392:  echo "Llevar a cabo la reunion"; break; 
                            case 87930:  echo "Gestionar la prueba"; break;
                            case 92489:  echo "Supervisar la reunion";
                            }
                         ?>
                    </td> 
                    <td><?php echo $resultado5[$i]['Nombre'] ?></td>
                    <td><?php echo $resultado5[$i]['DNI'] ?></td>
                    <td><?php echo $resultado5[$i]['Direccion'] ?></td>
                    </tr>
              <?php } ?>
          </tbody>
      </table>
      </div>
    </div>
  </div> 
</div>


<div class="tab-pane" id="contact4">
  <div class="row border g-0 rounded shadow-sm">
          <div class="col p-4">
           <h2 class="text-center text-success">Tabla: <?php echo "on_line" ?></h2>
           <div class="tableresponsive">
             <table id="example6" class="table table-striped table-bordered table-hover table-info" style="width:100%">
              <thead class="table-dark" > 
                <tr>
                  <th>Cod de prueba online</th>
                  <th>Nombre del candidato</th>
                  <th>Fecha</th>
                  <th>Link</th>
                </tr>
               </thead>
              <tbody>
                 <?php
                for ($i=0;$i<$n6;$i++) {
                 ?>
               <tr>
                  <td><?php echo $resultado6[$i]['codigo_online'] ?></td>
                  <td><?php 
                           switch ($resultado6[$i]['cod_tipo_casting']){
                              case 239:  echo "Pablo Uribe"; break;
                              case 312:  echo "Meribeth Mendez"; break;
                              case 332:  echo "Gloria Mendoza"; break;
                              case 471:  echo "diego Forero"; break;
                            }
                         ?>
                    </td> 
                    <td><?php echo $resultado6[$i]['Fecha'] ?></td>
                    <td><?php echo $resultado6[$i]['Link'] ?></td>
                    </tr>
              <?php } ?>
          </tbody>
      </table>
      </div>
    </div>
  </div>      
</div>
      
<div class="tab-pane" id="contact5">
      <div class="tab-pane active" id="home">
        <div class="row border g-0 rounded shadow-sm">
          <div class="col p-4">
           <h2 class="text-center text-primary">Tabla: <?php echo "perfil" ?></h2>
           <div class="tableresponsive">
             <table id="example7" class="table table-striped table-bordered table-hover table-info" style="width:100%">
              <thead class="table-dark" > 
                <tr>
                  <th>Cod Perfil</th>
                  <th>Edad</th>
                  <th>Especialidad</th>
                  <th>Sexo</th>
                  <th>Altura</th>
                  <th>Color de Cabello</th>
                  <th>Color de ojo</th>
                  <th>Experiencia</th>
                </tr>
               </thead>
              <tbody>
                 <?php
                for ($i=0;$i<$n7;$i++) {
                 ?>
               <tr>
                  <td><?php echo $resultado7[$i]['cod_perfil'] ?></td>
                  <td><?php echo $resultado7[$i]['Edad'] ?></td>
                  <td><?php echo $resultado7[$i]['Especialidad'] ?></td>
                  <td><?php echo $resultado7[$i]['Sexo'] ?></td>
                  <td><?php echo $resultado7[$i]['Altura'] ?></td>
                  <td><?php echo $resultado7[$i]['Color_cabello'] ?></td>
                  <td><?php echo $resultado7[$i]['Color_ojo'] ?></td>
                  <td><?php echo $resultado7[$i]['Experiencia'] ?></td>
              </tr>
              <?php } ?>
          </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
</div>

<div class="tab-pane" id="contact6">
      <div class="tab-pane active" id="home">
        <div class="row border g-0 rounded shadow-sm">
          <div class="col p-4">
           <h2 class="text-center text-success">Tabla: <?php echo "presencial" ?></h2>
           <div class="tableresponsive">
             <table id="example8" class="table table-striped table-bordered table-hover table-info" style="width:100%">
              <thead class="table-dark" > 
                <tr>
                  <th>Cod prueba presencial</th>
                  <th>Nombre del candidato</th>
                  <th>Cod ubicacion</th>
                  <th>Descripcion de prueba</th>
                  <th>Fecha</th>
                </tr>
               </thead>
              <tbody>
                 <?php
                for ($i=0;$i<$n8;$i++) {
                 ?>
               <tr>
                  <td><?php echo $resultado8[$i]['cod_presencial'] ?></td>
                  <td><?php 
                           switch ($resultado8[$i]['cod_tipo_casting']){
                            case 102:  echo "Isabel Marín"; break;
                            case 328:  echo "Fabian Molina"; break;
                            case 532:  echo "Sandra pelaez"; break;
                            case 683:  echo "Rafael Alvarez"; break; 
                            case 732:  echo "Oscar Polo"; break;
                            case 932:  echo "Angelica Peréz";
                            }
                         ?>
                    </td> 
                    <td><?php 
                           switch ($resultado8[$i]['cod_ubicacion']){
                            case 43902: echo "Cra 25C #43-45 Piso 2 #sala 5 "; break;
                            case 7624:  echo "Cra 25C #43-45 Piso 2 #sala 3"; break;
                            case 4310:  echo "Cra 25C #43-45 Piso 2 #sala 1"; break;
                            case 8726:  echo "Cra 25C #43-45 Piso 2 #sala 3"; break; 
                            case 5139:  echo "Cra 25C #43-45 Piso 2 #sala 1"; break;
                            case 5628:  echo "Cra 25C #43-45 Piso 2 #sala 4";
                            }
                         ?>
                    </td> 
                    <td><?php 
                           switch ($resultado8[$i]['cod_prueba']){
                            case 3278:  echo "Ensayo en una piscina para equilibrio"; break;
                            case 4271:  echo "Ensayo en pasarela"; break;
                            case 4272:  echo "Una prueba de memoria de guiones"; break;
                            case 4382:  echo "Realizar una escena improvisada"; break; 
                            case 5934:  echo "Se tomará una escena de pelicula"; break;
                            case 8439:  echo "Realizar una caminata con objetos en la cabeza";
                            }
                         ?>
                    </td> 
                    <td><?php echo $resultado8[$i]['Fecha'] ?></td>
                    </tr>
              </tr>
              <?php } ?>
          </tbody>
      </table>
      </div>
    </div>
  </div>
</div>

    </div>
</div>
    

<!-- -----area de javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="jQuery/jquery-3.5.1.min.js"></script>
    <script src="datatables/datatables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="main.js"></script>
    <script src="main1.js"></script>
    <script src="main2.js"></script>
    <script src="main3.js"></script>
    <script src="main4.js"></script>
    <script src="main5.js"></script>
    <script src="main6.js"></script>
    <script src="main7.js"></script>
    <!-- -----area de libreria de botones -->
    <script type="text/javascript" src="JSZip-2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="pdfmake-0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="pdfmake-0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="DataTables-1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="DataTables-1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="Buttons-1.7.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="Buttons-1.7.0/js/buttons.bootstrap4.min.js"></script>
    <script type="text/javascript" src="Buttons-1.7.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="Buttons-1.7.0/js/buttons.print.min.js"></script>
  </body>
</html>