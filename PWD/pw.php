<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web Dinámica</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-color: #F4F2EE; margin: 0; height: 100%">
    <?php
        include("database.php");

        $sql = "SELECT * FROM data LIMIT 1";
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
    
        $nom = $row["Nombre"];
        $ap = $row["Apellidos"];
        $tit = $row["Titulo"];
        $ins = $row["Institución"];
        $idi = $row["Idiomas"];
        $hab = $row["Habilidades"];
        $desc = $row["Descripción"];

        $conn->close();
    ?>
    <div class="grid-container" style="justify-content: center;">
        <div class="header" style="border-radius: 5px 0 0 0; justify-content: left;">
            <div class="profile-img">
                <img src="profile.jpg" alt="profile.jpg">
            </div>
        </div>
        <div class="header" style="border-radius: 0 5px 0 0;">
        </div>
        <div class="sidebar" style="padding-top: 40px; background-color:white;" >
            <div class="sidebar1-content">
                <div class="sidebar-block">
                    <H1 style="font-size: 10px;"><?php echo $nom; echo" " . $ap;?></H1>
                </div>
                <div class="sidebar-block">
                    <H1>IDIOMAS</H1>
                    <ul style="list-style: none; padding-left: 0;">
                        <li>
                            <?php echo $idi;?>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-block">
                    <H1>HABILIDADES</H1>
                    <p style="font-weight: bold;"><?php echo $hab;?></p>
                </div>
            </div>
        </div>
        <div class="sidebar" style="background-color: white;">
            <div class="sidebar2-content">
                <div class="sidebar-block">
                    <H1>DESCRIPCIÓN</H1>
                    <p><?php echo $desc;?></p>
                </div>
                <div class="sidebar-block">
                </div>
                <div class="sidebar-block">
                    <H1>FORMACIÓN</H1>
                    <div class="sidebar-box">
                        <H1><?php echo $tit;?></H1>
                        <div class="text"><i><?php echo $ins;?></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>