<?php

include 'src/leph_utils.php';
writeLog();
include 'src/leph_publications.php';
$bibtex = parseBibtex();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quentin Rouxel - Homepage</title>
    <meta charset="UTF-8" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Professional research homepage of Quentin Rouxel" />
    <meta name="keywords" content="Humanoid Robotic Learning Walk RoboCup Quentin Rouxel" />
    <meta name="author" content="Quentin Rouxel" />
    <meta name="language" content="en" />
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    
    <style>
        body { 
            font-size: 2.0em; 
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row center-block" style="margin: 20px;">
        <div class="col-md-4">
            <img src="media/leph.png" alt="leph"/>
            <br/>
            <br/>
            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
            Email: <img src="media/email.png" alt="email" /><br/>
            <br/>
            <strong>
                <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                <a href="paper.php?f=CV_QuentinRouxel_fr.pdf">French Curriculum Vitae</a>
            </strong><br/>
        </div>
        <div class="col-md-4">
            <h2>Quentin Rouxel</h2>
            Ph.D Student in Computer Science and Robotics,
            under the supervision of 
            <a href="link.php?l=http://www.labri.fr/perso/ly">Olivier Ly</a> and
            <a href="link.php?l=http://www.labri.fr/perso/gimbert">Hugo Gimbert</a>
            <br/> 
            <br/> 
            <a href="link.php?l=http://www.labri.fr">LaBRI</a> computer science laboratory at 
            <a href="link.php?l=http://www.u-bordeaux.com">University of Bordeaux</a><br/>
            LaBRI, batiment A30, 351, cours de la Libération, 33405 Talence<br/>
            <br/>
            Member of Team <a href="link.php?l=http://rhoban.com/en">Rhoban</a><br/>
            <br/>
            <em>Last update: 04/2016</em>
        </div>
        <div class="col-md-3">
            <a href="link.php?l=http://www.labri.fr"><img src="media/labri.jpg" alt="labri" width="300" /></a>
            <a href="link.php?l=http://www.u-bordeaux.com"><img src="media/univ.jpg" alt="university of bordeaux" width="300" /></a>
            <a href="link.php?l=http://www.bordeaux-inp.fr"><img src="media/inp.jpg" alt="institut polytechnique de bordeaux" width="300" /></a>
            <a href="link.php?l=http://rhoban.com/en"><img src="media/rhoban.png" alt="rhoban" width="300" /></a>
        </div>
    </div>
    <div class="well well-lg">
        <ul class="nav nav-pills">
            <li role="presentation"><a href="#research">
                <span class="glyphicon glyphicon-education" aria-hidden="true"></span> Research</a></li>
            <li role="presentation"><a href="#publications">
                <span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span> Publications</a></li>
            <li role="presentation"><a href="#software">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Software</a></li>
            <li role="presentation"><a href="#videos">
                <span class="glyphicon glyphicon-film" aria-hidden="true"></span> Videos</a></li>
        </ul>
    </div>
    <div style="width: 80%; display: block; margin: 60px auto; background: #EEE; height: 2px;"></div>
    <h2 id="research"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Research</h2>
        My research activities are mainly led by the participation of the Rhoban team 
        to the RoboCup competition. 
        The many open problems currently limiting the humanoid robot performances 
        can be divided in two topics. 
        The first one is related to the perception of the robot's own state and environment. 
        The second one to the <em>motion intelligence</em> needed to
        improvise, control and stabilize complex and highly dynamic movements
        as the game continuously evolve.
        My work mostly belong to this second point, especially focused on small <em>low cost</em> humanoid robots 
        where the actual dynamic behaviour is hight dissimilar from their rigid body theoretical models.
        <br/>
        <br/>
        My past and current activities sum up as follows:
        <ul>
            <li>Learning of the odometry on Humanoid robot</li>
            <li>Off-line generation of dynamic open loop motion</li>
            <li>Learning of the actual dynamic model of small Humanoid robots</li>
            <li>Generation of open loop reactive motions</li>
        </ul>
    <h2>RoboCup</h2>
        The RoboCup is an international Robotics competition (about 3000 participants) running several
        leagues. The Humanoid Kid-Size league is a football tournament where two teams of small fully
        autonomous humanoid robots (40-90cm) are playing against each other's. The declared goal
        is to slowly eventually reach the level of professional human players.
        <br/>
        <br/>
        The Rhoban Team is participating each year since 2011 to the RoboCup competition
        in the Humanoid Kid-Size league.
        I have participated with the Rhoban Football Club to the RoboCup 2013 Einhoven (Netherland),
        2014 Joao Pessoa (Brazil) and 2016 Hefei (China).
        This last years, the team has kept improving and has reached the <strong>quarters final in 2014</strong> and
        the <strong>third place in 2015</strong>.
    <div style="width: 80%; display: block; margin: 60px auto; background: #EEE; height: 2px;"></div>
    <h2 id="publications"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span> Publications</h2>
        <table class="table table-bordered"> 
            <tr> 
                <th>Authors</th>
                <th>Title</th>
                <th>Year</th>
                <th>Proceedings</th>
                <th>Link</th>
            </tr>
            <?php
                $index = 0;
                foreach ($bibtex as $bib) {
                    if ($bib['class'] === 'inproceedings') {
                        echo '<tr>';
                        echo '<td>'.highlightName($bib['author']).'</td>';
                        echo '<td>'.$bib['title'];
                        if ($bib['type'] !== null) {
                            echo ' ('.$bib['type'].')';
                        }
                        echo '<br/>';
                        echo '<button class="btn btn-primary" type="button" data-toggle="collapse" ';
                        echo 'data-target="#abstract-'.$index.'" aria-expanded="false">Abstract</button>';
                        echo ' ';
                        echo '<button class="btn btn-primary" type="button" data-toggle="collapse" ';
                        echo 'data-target="#bibtex-'.$index.'" aria-expanded="false">Bibtex</button>';
                        echo '</td>';
                        echo '<td>'.$bib['year'].'</td>';
                        echo '<td>'.$bib['booktitle'].'</td>';
                        echo '<td>';
                        if ($bib['name'] !== null) {
                            echo '<a href="paper.php?f='.$bib['name'].'.pdf">PDF</a>';
                        }
                        if ($bib['url'] !== null) {
                            echo '<a href="link.php?l='.$bib['url'].'">URL</a>';
                        }
                        echo '</td>';
                        echo '</tr>';
                        echo '<tr class="collapse" id="abstract-'.$index.'"><td colspan="5" class="well well-lg"><div>'
                            .$bib['abstract'].'</div></td></tr>';
                        echo '<tr class="collapse" id="bibtex-'.$index.'"><td colspan="5"><pre>'
                            .$bib['bibtex'].'</pre></td></tr>';
                    }
                    $index++;
                }
            ?>
        </table>
    <h2>Others Documents</h2>
        <table class="table table-bordered"> 
            <tr> 
                <th>Authors</th>
                <th>Title</th>
                <th>Year</th>
                <th>Source</th>
                <th>Link</th>
            </tr>
            <?php
                $index = 0;
                foreach ($bibtex as $bib) {
                    if ($bib['class'] === 'misc') {
                        echo '<tr>';
                        echo '<td>'.highlightName($bib['author']).'</td>';
                        echo '<td>'.$bib['title'];
                        if ($bib['type'] !== null) {
                            echo ' ('.$bib['type'].')';
                        }
                        echo '<br/>';
                        echo '<button class="btn btn-primary" type="button" data-toggle="collapse" ';
                        if ($bib['abstract'] !== null) {
                            echo 'data-target="#abstract-'.$index.'" aria-expanded="false">Abstract</button>';
                            echo ' ';
                        }
                        echo '<button class="btn btn-primary" type="button" data-toggle="collapse" ';
                        echo 'data-target="#bibtex-'.$index.'" aria-expanded="false">Bibtex</button>';
                        echo '</td>';
                        echo '<td>'.$bib['year'].'</td>';
                        echo '<td>'.$bib['institution'].'</td>';
                        if ($bib['name'] === null) {
                            echo '<td></td>';
                        } else {
                            echo '<td><a href="paper.php?f='.$bib['name'].'.pdf">PDF</a></td>';
                        }
                        echo '</tr>';
                        if ($bib['abstract'] !== null) {
                            echo '<tr class="collapse" id="abstract-'.$index.'"><td colspan="5" class="well well-lg"><div>'
                                .$bib['abstract'].'</div></td></tr>';
                        } 
                        if ($bib['bibtex'] !== null) {
                            echo '<tr class="collapse" id="bibtex-'.$index.'"><td colspan="5"><pre>'
                                .$bib['bibtex'].'</pre></td></tr>';
                        } 
                    }
                    $index++;
                }
            ?>
        </table>
    <div style="width: 80%; display: block; margin: 60px auto; background: #EEE; height: 2px;"></div>
    <h2 id="software"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Open Source Software</h2>
        <ul>
            <li>
                <a href="link.php?l=https://github.com/Rhoban/RhAL">
                    Rhoban Abstraction Layer Library (<strong>RhAL</strong>)
                </a>
                <br/>
                Low Level multi-threaded communication library written in C++11.
                Handles serial bus communication with generic devices.
                Inertial Measurement Unit, pressure sensor and Dynamixel servos motors 
                including Dynaban firmware are implemented.
                Enables binding with RhIO interface. Synchronisation between 
                low level manager and user threads.
            </li>
            <li>
                <a href="link.php?l=https://github.com/Rhoban/RhIO">
                    Rhoban Input Output Library (<strong>RhIO</strong>)
                </a>
                <br/>
                RhIO is a lightweight library that can be linked against your application in order to interract 
                with your program on-the-fly, through its integrated server.
                Main feature are parameters that can be exposed in order to be changed, 
                monitored or persisted to configuration files.
                We also provide a shell client that will provide a bash-like interface to walk your nodes and parameters, 
                and even trigger methods that are in your code.
                RhIO is used as the user interface for our RoboCup humanoid robots.
            </li>
            <li>
                <a href="link.php?l=https://github.com/Rhoban/IKWalk">
                    Simple Open Loop Omnidirectionnel Humanoid Walk Engine: <strong>IKWalk</strong>
                </a>
                <br/>
                The IKWalk library is a simple C++ implementation of an open loop walk engine for small and mid-size humanoid robots. 
                Motor target positions are generated online based on splines in Cartesian space and inverse kinematics. 
                No ZMP is used and several parameters have to be manually tunned.
                The walk engine allows for omnidirectional locomotion and was able to walk on artificial 
                grass at RoboCup 2015 Kid-Size competition in China.
            </li>
        </ul>
    <h2>Others Rhoban Open Source Projects</h2>
        <ul>
            <li>
                <a href="link.php?l=https://github.com/Rhoban/ForceFoot">
                    Humanoid <strong>Rhoban Foot Pressure Sensors</strong>
                </a>
                <br/>
                Open-Source new mechanical and electronics design for low cost
                stain gauge based foot pressure sensors designed by Grégoire Passault. 
                The pressure sensors allow for
                a good estimation of the center of pressure (only vertical forces) 
                for each foot of humanoid robots.
                It was used by the Rhoban Football Club during the RoboCup 2015 Hefei.
            </li>
            <li>
                <a href="link.php?l=https://github.com/RhobanProject/Dynaban">
                    Alternative Dynamixel Firmware: <strong>Dynaban</strong>
                </a>
                <br/>
                Open-Source alternative firmware for Dynamixel servo-motors developed by Rémi Fabre.
                Implementation for MX-64. Dynaban features all default Dynamixel behaviours
                and a new feed-forward method using position and torque trajectories improving 
                position and speed control.
            </li>
            <li>
                <a href="link.php?l=https://github.com/Rhoban/Metabot">
                    Open Source Quadruped Robot: <strong>Metabot</strong>
                </a>
                <br/>
                Open-Source DIY parametric quadruped robot either 3d printed or laser cut conceived by Grégoire Passault.
                Low cost platform used for educational purposes. <a href="link.php?l=http://metabot.cc">Metabot Website</a>
            </li>
        </ul>
    <div style="width: 80%; display: block; margin: 60px auto; background: #EEE; height: 2px;"></div>
    <h2 id="videos"><span class="glyphicon glyphicon-film" aria-hidden="true"></span> Videos</h2>
    <?php
        $videos = array();
        array_push($videos, array(
            'img' => 'videoPressureRecovery.jpg',
            'alt' => 'robot humanoid foot pressure sensors push recovery',
            'url' => 'https://youtu.be/avJI_cBuMm0',
            'text' => 'Lateral walk push recovery stabilization using foot pressure sensors.',
            'year' => '2016',
        ));
        array_push($videos, array(
            'img' => 'videoRecapRoboCup2016.jpg',
            'alt' => 'robocup 2016 recap of the competition',
            'url' => 'https://youtu.be/lF2gIbs-gq8',
            'text' => 'RoboCup 2016 Leipzig (Germany) recap of the competition.',
            'year' => '2016',
        ));
        array_push($videos, array(
            'img' => 'videoRoboCup2016.jpg',
            'alt' => 'robocup qualification 2016 rhoban',
            'url' => 'https://youtu.be/VItIaOX8oIU',
            'text' => 'RoboCup 2016 Leipzig (Germany) Rhoban Football Club qualification video.',
            'year' => '2016',
        ));
        array_push($videos, array(
            'img' => 'videoOdometry.jpg',
            'alt' => 'icra 2016 humanoid odometry learning',
            'url' => 'https://youtu.be/9HT33KMtfLw',
            'text' => 'Learning the Odometry on a Small Humanoid Robot. Video for ICRA 2016 contribution.',
            'year' => '2016',
        ));
        array_push($videos, array(
            'img' => 'videoRhIO.jpg',
            'alt' => 'rhio',
            'url' => 'https://youtu.be/MOizgXYENLc',
            'text' => 'Rhoban Input Output Library (RhIO) presentation.',
            'year' => '2015',
        ));
        array_push($videos, array(
            'img' => 'videoForcePressure.jpg',
            'alt' => 'force pressure',
            'url' => 'https://youtu.be/_d7Phe0qois',
            'text' => 'Humanoid Foot Pressure Sensors using strain gauge.',
            'year' => '2015',
        ));
        array_push($videos, array(
            'img' => 'videoRoboCup2015HFR.jpg',
            'alt' => 'robocup rhoban vs hfr',
            'url' => 'https://youtu.be/yo80g4e0NoY',
            'text' => 'Rhoban vs HFR. RoboCup 2015.',
            'year' => '2015',
        ));
        array_push($videos, array(
            'img' => 'videoRoboCup2015BoldHeart.jpg',
            'alt' => 'robocup rhoban vs boldheart',
            'url' => 'https://youtu.be/z0XdD_xBPP0',
            'text' => 'Rhoban vs Bold Heart. RoboCup 2015.',
            'year' => '2015',
        ));
        array_push($videos, array(
            'img' => 'videoTreadmill.jpg',
            'alt' => 'sigmaban treadmill',
            'url' => 'https://youtu.be/xxazn_JJaWs',
            'text' => 'Learning experiment on treadmill with Sigmaban humanoid robot.',
            'year' => '2015',
        ));
        array_push($videos, array(
            'img' => 'videoMicroban.jpg',
            'alt' => 'microban',
            'url' => 'https://youtu.be/JATLP2YiLx4',
            'text' => 'Rhoban Microban 3d printed humanoid demonstration.',
            'year' => '2014',
        ));
        array_push($videos, array(
            'img' => 'videoClockBot.jpg',
            'alt' => 'clock bot',
            'url' => 'https://youtu.be/LH_q8IsmA1Q',
            'text' => 'Walk experiment with 3d printed biped',
            'year' => '2014',
        ));
        array_push($videos, array(
            'img' => 'videoHexapode.jpg',
            'alt' => 'hexapode',
            'url' => 'https://youtu.be/adlYcs5sO-M',
            'text' => 'RobotCampus Hexapode robot',
            'year' => '2014',
        ));
        array_push($videos, array(
            'img' => 'videoPentapode.jpg',
            'alt' => 'pentapode',
            'url' => 'https://youtu.be/3fR9APlgi8w',
            'text' => 'RobotCampus Pentapode robot.',
            'year' => '2013',
        ));
        echo '<div class="row">';
        $index = 0;
        foreach ($videos as $vid) {
            if ($index > 0 && $index % 3 == 0) {
                echo '</div>';
                echo '<div class="row">';
            }
            echo '<div class="thumbnail col-sm-6 col-md-4">';
            echo '<a href="link.php?l='.$vid['url'].'" class="thumbnail">';
            echo '<img src="media/'.$vid['img'].'" alt="'.$vid['alt'].'" />';
            echo '</a>';
            echo '<div class="caption">';
            echo $vid['text'];
            echo ' ('.$vid['year'].')';
            echo '</div>';
            echo '</div>';
            $index++;
        }
        echo '</div>';
    ?>
    <div style="width: 80%; display: block; margin: 60px auto; background: #EEE; height: 2px;"></div>
    <img src="media/rfc.png" class="center-block" alt="rhoban football club" width="250" style="margin-bottom: 50px;margin-top: 50px;" />
</div>
</body>
</html> 

