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
    if(isset($_FILES['uploaded_File'])){
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
        $file_name = $_FILES['uploaded_File']['name'];

    //explode() function breaks a string into an array to determine the file extension type
        $file_extension = explode('.',$_FILES['uploaded_File']['name']);
        $file_extension = end($file_extension);

    //if the acceptable file format not equal to the uploaded file
    //Set the extension error to true
        if(!in_array($file_extension,$extensions_type)){
            $extension_error = true;

        }

    //if the error of upload is not equal to 0
        if($_FILES['uploaded_File']['error']){
            echo $phpFileUploadErrors[$_FILES['uploaded_File']['error']];
        }
    //Prompt user that the file extension type is not accepted
        else if( $extension_error){
            echo "Invalid File extension!"; echo "We only accept excel file.";
        }

        else{
            move_uploaded_file($_FILES['uploaded_File']['tmp_name'], $_FILES['uploaded_File']['name']);
    //        move_uploaded_file($_FILES['uploaded_File']['tmp_name'], 'folder/'.$_FILES['uploaded_File']['name']);

            echo exec("javac -cp \".:poi-3.8-sources.jar\" Main.java");
            echo exec("java -cp \".:poi-3.8-sources.jar\" Main $file_name" );
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
                            <img src="Public/pm_ProfilePicture.png" alt="fileIcon" width="370" height="349">
                        </div>
                        <p>Gwee Per Ming</p>
                        <p>159372</p>
                    </div>

                    <div class="step2">
                        <div class="imgBox">
                            <img src="Public/wk_ProfilePicture.png" alt="convertIcon" width="360" height="349">
                        </div>

                        <p>Thong Wai Hong</p>
                        <p>158876</p>
                    </div>

                    <div class="step3">
                        <div class="imgBox">
                            <img src="Public/downloadIcon.png" alt="downloadIcon" width="113" height="113">
                        </div>
                        <p>Ooi Yong Qin</p>
                        <p>159067</p>
                    </div>
                </div>
            </div>

        </div>
    </article>
</body>


