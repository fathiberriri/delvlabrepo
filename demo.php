<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sample Deployment</title>
  <style>
    body {
      color: #ffffff;
      background-color: #000000;
      font-family: Arial, sans-serif;
      font-size: 14px;
    }

    h1 {
      font-size: 500%;
      font-weight: normal;
      margin-bottom: 0;
    }

    h2 {
      font-size: 200%;
      font-weight: normal;
      margin-bottom: 0;
    }
  </style>
</head>
<body>
  <div align="center">
    <h1>Congratulations...GEEW</h1>
    <h2>This application was deployed using AWS CodeDeploy.</h2>
    <p>For a dynamic page, go to <a href="demo.php">Simple demo</a>.</p>
    <p>For next steps, read the <a href="http://aws.amazon.com/documentation/codedeploy">AWS CodeDeploy Documentation</a>.</p>
  </div>
<h1>this is a demo page...</h1>
<h1><?php $instanceid = file_get_contents('http://169.254.169.254/latest/meta-data/instance-id');echo $instanceid;?></h1>

</body>
</html>
