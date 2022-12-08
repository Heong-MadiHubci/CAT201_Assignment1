<!DOCTYPE html>
<html lang="en">

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href=""  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--CSS-->
    <link rel="stylesheet" href="css/Download.css">
    <title>Download CSV converted</title>
</head>
<body>
    <?php
    if(isset($_FILES['userFile'])){
        //Array to display different errors
         $phpFileUploadErrors = array(
            0 => 'There is no error, the file uploaded with success',
            1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
            2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
            3 => 'The uploaded file was only partially uploaded',
            4 => 'No file was uploaded',
            6 => 'Missing a temporary folder',
            7 => 'Failed to write file to disk.',
            8 => 'A PHP extension stopped the file upload.',
        );

        //Initialise the error as false
        $extension_error = false;

        //Set the acceptable file format
        $extensions_type = array ('xlsx');

        //Store the uploaded file name
        $file_name = $_FILES['userFile']['name'];

        //explode() function breaks a string into an array to determine the file extension type
        $file_extension = explode('.',$_FILES['userFile']['name']);
        $file_extension = end($file_extension);

        //if the acceptable file format not equal to the uploaded file format
        //Set the extension error to true
        if(!in_array($file_extension,$extensions_type)){
            $extension_error = true;
        }

        //if the error of upload is not equal to 0
        if($_FILES['userFile']['error']){
            echo $phpFileUploadErrors[$_FILES['userFile']['error']];
        }
        //Prompt user that the file extension type is not accepted
        else if( $extension_error){
            echo "Invalid File extension!";
            echo "We only accept pdf file.";
        }

        else{

            //echo $file_name;
            move_uploaded_file($_FILES['userFile']['tmp_name'], 'folder/'.$_FILES['userFile']['name']);

            // ; is for cmd , : is for linux
            echo exec("javac -cp \".:*.jar\" Main.java");
            echo exec("java -cp \".:*.jar\" Main $file_name" );


        }

    }
    ?>

    <article>
        <div class="itemWrapper">
            <div class="itemBox">
                <div class="Title">
                    <h1>Sucess.We converted your file.</h1>
                    <h3>Your download will start after you clicked the button.Any Error please click here</h3>
                </div>

                <div class="uploadContainer">
                    <form action = "download.php" method = "POST" enctype="multipart/form-data">
                        <div class="Card">
                            <img src="Public/downloadFile.png" alt="fileIcon" width="313" height="313">
                            <a href = "/output.csv" download target = "_blank">
                                <button type="button" >Download</button>
                            </a>
                        </div>
                        <div class="Submit">
                            <a href="index.php"><button type="button" >Convert Again</button></a>
                        </div>
                    </form>
                </div>
                <div class="descContainer">
                    <div class="step1">
                        <div class="imgBox" >
                            <img src="Public/pm_ProfilePicture.png" alt="fileIcon" width="270" height="269">
                        </div>
                        <p>Gwee Per Ming</p>
                        <p>159372</p>
                    </div>

                    <div class="step2">
                        <div class="imgBox">
                            <img src="Public/wk_ProfilePicture.png" alt="convertIcon" width="260" height="269">
                        </div>

                        <p>Thong Wai Hong</p>
                        <p>158876</p>
                    </div>

                    <div class="step3">
                        <div class="imgBox">
                            <img src="Public/yq_ProfilePicture.jpg" alt="downloadIcon" width="260" height="269">
                        </div>
                        <p>Ooi Yong Qin</p>
                        <p>159067</p>
                    </div>
                </div>
            </div>

        </div>
    </article>
</body>


