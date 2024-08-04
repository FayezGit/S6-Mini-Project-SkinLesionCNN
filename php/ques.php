<?php

require 'connect.php';

if(isset($_POST['submit'])){
  $age = $_POST["age"];
  $medical_condition = $_POST["medical_condition"];
  $skin_issue = $_POST["skin_issue"];
  $skin_treatment = $_POST["skin_treatment"];
  $allergies = $_POST["allergies"];
  $skin_type = $_POST["skin_type"];
  $skin_area = $_POST["skin_area"];
  $skincare_products = $_POST["skincare_products"];
  $other = $_POST["other"];

  $insert_query = "INSERT INTO ques_data(age,medical_condition,skin_issue,skin_treatment,allergies,skin_type,skin_area,skincare_products,other) VALUES('$age', '$medical_condition', '$skin_issue', '$skin_treatment', '$allergies', '$skin_type', '$skin_area', '$skincare_products', '$other')";
  mysqli_query($conn,$insert_query);
  if($conn->query($insert_query)==TRUE){
    header("location: ../home.html");
}
else{
    echo "Error:".$conn->error;
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Disease Identification Questionnaire</title>
    <style>
        /* Basic styling for better presentation */
        body {
            color: white;
            font-family: Arial, sans-serif;
            margin: 20px;
            background-image: url('../images/cover2.jpg');
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        h1 {
          display: flex;
          justify-content: center;
        }
        select,
        textarea {
          background-color: black;
          color: white;
        }
        textarea {
          border-radius: 5px;;
        }
        .container {
          display: flex;
          justify-content: center;
        }
        .submit-button {
          background-color: rgb(37, 137, 57);
          color: white;
          vertical-align: top;
          border: none;
          padding: 5px 15px;
          border-radius: 3px;

        }
        .submit-button:hover {
          background-color: rgb(29, 120, 40);
        }
    </style>
</head>
<body>
  <h1>Skin Disease Identification Questionnaire</h1>
  <div class="container">
    <form action="" method="post">
        <label for="age">What is your age </label>
        <input type="text" name="age" placeholder="Age" required>

        <label for="medical_conditions">Do you have any known medical conditions? If yes, please specify.</label>
        <select name="medical_condition" id="medical_condition">
            <option value="Diabetes">Diabetes</option>
            <option value="Hypertension">Hypertension</option>
            <option value="Asthma">Asthma</option>
            <option value="None">None</option>
        </select>

        <label for="skin_issues">Have you experienced any skin-related issues in the past? If yes, please describe.</label>
        <select name="skin_issue" id="skin_issue">
            <option value="Acne breakouts">Acne breakouts</option>
            <option value="Eczema flare-ups">Eczema flare-ups</option>
            <option value="Psoriasis outbreaks">Psoriasis outbreaks</option>
            <option value="Dermatitis reactions">Dermatitis reactions</option>
            <option value="Dermatitis reactions">None</option>
        </select>

        <label for="skin_treatment">Are you currently undergoing any skin treatment or medication? If yes, please specify.</label>
        <select name="skin_treatment" id="skin_treatment">
            <option value="Topical creams or ointments">Topical creams or ointments</option>
            <option value="Oral medications">Oral medications</option>
            <option value="Phototherapy">Phototherapy</option>
            <option value="Other">Other</option>
            <option value="Other">None</option>
        </select>

        <label for="allergies">Do you have any allergies? If yes, please list them.</label>
        <select name="allergies" id="allergies">
            <option value="Pollen">Pollen</option>
            <option value="Dust mites">Dust mites</option>
            <option value="Animal dander">Animal dander</option>
            <option value="Food">Food</option>
            <option value="Other">None</option>
        </select>

        <label for="skin_type">How would you describe your skin type (e.g., oily, dry, combination)?</label>
        <select name="skin_type" id="skin_type">
            <option value="Oily">Oily</option>
            <option value="Dry">Dry</option>
            <option value="Combination">Combination</option>
            <option value="Normal">Normal</option>
        </select>

        <label for="skin_areas">Are there any specific areas on your body where you're experiencing skin problems?</label>
        <select name="skin_area" id="skin_area">
            <option value="Face">Face</option>
            <option value="Neck">Neck</option>
            <option value="Back">Back</option>
            <option value="Arms">Arms</option>
            <option value="Legs">Legs</option>
            <option value="Other">Other</option>
            <option value="Other">None</option>

        </select>
        <label for="skincare_products">Have you recently used any new skincare products or cosmetics?</label>
        <select name="skincare_products" id="skincare_products">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

      

        <label for="additional_info">Is there anything else you think is important for us to know about your skin health?</label>
        <textarea name="other" id="other" rows="4"></textarea>

        <button class="submit-button" type="submit" name="submit">Submit</button>
    </form>
  </div>
</body>
</html>
