<!doctype html>
<html>
    <head>
        <title>I am Learning PHP in Bangla</title>
        <style>
            .template{width:600px; margin:0 auto;}
            .headerSection, .footerSection{background: #ddd; text-align:center; padding:10px 0}
            .mainBody{border: 1px; solid #ddd; min-height: 300px; padding:15px 0; text-align:center;}
        </style>
    </head>
    <body>
        <div class="template">
            <div class="headerSection">
                <h3>
                    <?php
                        $headerText = "I am Learning PHP Programming Bangla";
                        echo $headerText;
                    ?>
                </h3>
            </div>
            <div class="mainBody">
                <p>
                    <?php 
                        //$myArray = array(123456, "Programming School BD", "PHP");
                       // echo $name;
                       class myclass {
                            function testFunction () {
                                echo "I am Learning PHP Programming Bangla";
                            }
                       }
                       $newOBJ = new myclass;
                       
                       var_dump($newOBJ)
                    ?>
                </p>
            </div>
            <div class="footerSection">
                <h3>
                    <?php 
                    echo "Learng with Programming School BD"?>
                </h3>
                <p><b>www.mahdis2do.com</b></p>
                <p>fb.com/mahdi.hasan.musafir</p>
            </div>
        </div>
    </body>
</html>