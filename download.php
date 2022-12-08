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


