<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body style="background-color: rgb(14,14,14); margin: 0; height: 100%">
    <?php
        $nom=$_POST['nom'];
        $fnac=$_POST['fnac'];
        $op=$_POST['po'];
        $ocp=$_POST['ocp'];
        $tel=$_POST['tel'];
        $email=$_POST['email'];
        $linkdn=$_POST['linkdn'];
        $nac=$_POST['nac'];
        $lvl = $_POST['lvl'];
        $prog=$_POST['prog'];
        $apt=$_POST['apt_choice'];
        $hab1=isset($_POST['hab1']) ? $_POST['hab1'] : null; 
        $hab2=isset($_POST['hab2']) ? $_POST['hab2'] : null;
        $hab3=isset($_POST['hab3']) ? $_POST['hab3'] : null;
        $trab=$_POST['trab'];
        $int=$_POST['int'];
        $exp=$_POST['exp'];
        $perf=$_POST['perf'];
        $tit=$_POST['tit'];
        $ins=$_POST['ins'];
        $fch=$_POST['fch'];
        $dur=$_POST['dur'];
    ?>
    <div class="grid-container" style="justify-content: center;">
        <div class="header">
            <div class="profile-img">
                <img src="profile.jpg" alt="profile.jpg">
            </div>
        </div>
        <div class="header">
            <div class="header-info">
                <H1><?php echo $nom;?></H1>
                <H2>PUESTO <?php echo $op;?></H2>
            </div> 
        </div>
        <div class="sidebar">
            <div class="sidebar1-content">
                <div class="sidebar-block">
                    <H1>CONTACTO</H1>
                    <hr style="margin-bottom: 8%;" size="1px" color="black"/>
                    <ul style="list-style: none; padding-left: 0;">
                        <div class="icon-list1">
                            <li><?php echo $tel;?></li>
                        </div>
                        <div class="icon-list2">
                            <li><?php echo $email;?></li>
                        </div>
                        <div class="icon-list3">
                            <li><?php echo $nac;?></li>
                        </div>
                        <div class="icon-list4">
                            <li>
                                <a href="<?php echo $linkdn;?>" style="text-decoration: none;"><b><?php echo $linkdn;?></b></a>
                            </li>
                        </div>
                    </ul>
                </div>
                <div class="sidebar-block">
                    <H1>IDIOMAS</H1>
                    <hr style="margin-bottom: 8%;" size="1px" color="black"/>
                    <ul style="list-style: none; padding-left: 0;">
                        <li>
                            Español - Nativo <br>
                            Inglés - <?php echo $lvl;?>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-block">
                    <H1>APTITUDES</H1>
                    <hr style="margin-bottom: 8%;" size="1px" color="black"/>
                    <ul>
                        <li><?php echo $apt;?></li>
                    </ul>  
                </div>
                <div class="sidebar-block">
                    <H1>HABILIDADES</H1>
                    <hr style="margin-bottom: 8%;" size="1px" color="black"/>
                    <ul>
                        <?php 
                            if ($hab1) { 
                                echo "<li>Pack Office</li>"; 
                            }
                            if ($hab2) { 
                                echo "<li>Backend</li>"; 
                            }
                            if ($hab3) { 
                                echo "<li>Frontend</li>"; 
                            }
                        ?>
                        <li><?php echo $prog;?></li>
                    </ul>
                </div>
                <div class="sidebar-block">
                    <H1>OTROS INTERESES</H1>
                    <hr style = "margin-bottom: 8%;" size="1px" color="black"/>
                    <ul>
                        <li><?php echo $int;?></li>
                    </ul>  
                </div>
            </div>
        </div>
        <div class="sidebar" style="background-color: white;">
            <div class="sidebar2-content">
                <div class="sidebar-block">
                    <H1>PERFIL</H1>
                    <hr size="1px" color="black"/>
                    <p><?php echo $perf;?></p>
                </div>
                <div class="sidebar-block">
                    <H1>EXPERIENCIA LABORAL</H1>
                    <hr size="1px" color="black"/>
                    <div class="sidebar-box">
                        <H1><?php echo $ocp;?></H1>
                        <div class="text"><i><?php echo $trab;?></i> | <?php echo $dur;?></div>
                        <ul>
                            <li><?php echo $exp;?></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-block">
                    <H1>FORMACIÓN</H1>
                    <hr size="1px" color="black"/>
                    <div class="sidebar-box">
                        <H1><?php echo $tit;?></H1>
                        <div class="text"><i><?php echo $ins;?></i> | <?php echo $fch;?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>