﻿<!DOCTYPE html>
<html ng-app="myApp" ng-controller="mainController">

<head>
    <meta charset="utf-8" />
    <title>MacroBuddy - One-Stop Fitness</title>

    <!-- Custom Favicon -->
    <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap and CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/main.css">

    <!-- jQuery, Angular, and JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script>!window.jQuery && document.write('<script src="JS/jquery-1.4.2.min.js"><\/script>')</script>
    <script src="https://code.angularjs.org/1.6.6/angular.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/ng-combo-date-picker@1.5.1/source/ngComboDatePicker.min.js"></script>
    <script src="JS/angularModule.js"></script>
    <script src="JS/main.js"></script>
</head>

<body>
    <!-- Header Bar -->
    <div id="headerBar">
        <center>
            <img src="Images/banner.png" id="banner" />
        </center>
    </div>

    <div id="allText">
        <center>
            <!-- Introduction Block -->
            <div id="introBlock">
                <br />
                <h2>Welcome to MacroBuddy, your own personal nutritionist!</h2><br />

                <p>
                    Have you ever tried coming up with a diet plan that works for you?<br />
                    How many of them showed you results, or how many did you stick with long enough to see them?<br />
                    Do you know what three nutrient bases make up your macronutrients, and how much of each you should be eating?<br />
                </p>
                <p>
                    Well, MacroBuddy is here to alleviate you from all the calculations and formulae you'll need to go through to figure out
                    your macronutrients!<br />
                    MacroBuddy is your one-stop location to get all your personalized macronutrition information to get you prepared and on your way to meal prepping like the pros!<br />
                    All it takes is some basic information and MacroBuddy will send you on your way!<br />
                </p>
            </div>

            <hr />

            <h3>Let's Start With Your Information</h3>
            <p>Give MacroBuddy some basic information to get started!</p>
            <p id="question">What is your <strong>name</strong>?</p>

            <div style="display: inline-block;">
                <!-- Display Table -->
                <table style="font-size: larger" class="table-striped">
                    <tbody>
                        <tr id="trName" style="display: table-row;">
                            <td>
                                My Name Is {{ tempName }}
                            </td>
                        </tr>
                        <tr id="trGender" style="display: none;">
                            <td>
                                I Am A {{ tempGender }}
                            </td>
                        </tr>
                        <tr id="trAge" style="display: none;">
                            <td>
                                I Am {{ userProfile.age }} Years Old
                            </td>
                        </tr>
                        <tr id="trHeight" style="display: none;">
                            <td>
                                I Am {{ tempFeet }} Feet {{ tempInches }} Inches Tall
                            </td>
                        </tr>
                        <tr id="trWeight" style="display: none;">
                            <td>
                                I Weigh {{ tempWeight }} Pounds
                            </td>
                        </tr>
                        <tr id="trActivityFactor" style="display: none;">
                            <td>
                                My Activity Factor Is {{ tempActivityFactor }}
                            </td>
                        </tr>
                        <tr id="trFitnessGoal" style="display: none;">
                            <td>
                                My Fitness Goal Is To {{ tempFitnessGoal }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- User Input Table -->
            <div id="divInputTable" style="display: inline-block;">
                <table>

                    <tr id="trInputName">
                        <td>
                            <input type="text" id="tbName" ng-model="tempName" />
                        </td>
                        <td>
                            <input type="button" id="btnEnter" value="ENTER" ng-click="nameVerification(tempName)" />
                        </td>
                    </tr>

                    <tr id="trInputGender" style="display: none">
                        <td>
                            <select class="form-control" id="cbGender" ng-model="tempGender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </td>
                        <td>
                            <input type="button" id="btnEnter" value="ENTER" ng-click="genderVerification(tempGender)" />
                        </td>
                    </tr>

                    <tr id="trInputAge" style="display: none">
                        <td>
                            <input type="date" id="tbDate" ng-model="birthday" class="form-control" />
                        </td>
                        <td>
                            <input type="button" id="btnEnter" value="ENTER" ng-click="calculateAge(birthday)" />
                        </td>
                    </tr>

                    <tr id="trInputHeight" style="display: none">
                        <td>
                            <label for="cbFeet">
                                Feet:
                                <select class="form-control col-xs-1" id="cbFeet" ng-model="tempFeet">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </label>
                            <label for="cbInches">
                                Inches:
                                <select class="form-control col-xs-1" id="cbInches" ng-model="tempInches">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                </select>
                            </label>
                        </td>
                        <td>
                            <input type="button" id="btnEnter" value="ENTER" ng-click="heightVerification(tempFeet, tempInches)" />
                        </td>
                    </tr>

                    <tr id="trInputWeight" style="display: none">
                        <td>
                            <input type="text" id="tbWeight" ng-model="tempWeight" />
                        </td>
                        <td>
                            <input type="button" id="btnEnter" value="ENTER" ng-click="weightVerification(tempWeight)" />
                        </td>
                    </tr>

                    <tr id="trInputAF" style="display: none">
                        <td>
                            <select class="form-control" id="cbActivityFactor" ng-model="tempActivityFactor">
                                <option value="1.200">Sedentary - Little/No Exercise (Desk Job)</option>
                                <option value="1.375">Lightly Active - Little Exercise (1-3 days/week)</option>
                                <option value="1.550">Moderately Active - Moderate Exercise (3-5 days/week)</option>
                                <option value="1.725">Very Active - Heavey Exercise (6-7 days/week)</option>
                                <option value="1.900">Extremely Active - Very Heavy Exercise (2 times/day)</option>
                            </select>
                        </td>
                        <td>
                            <input type="button" id="btnEnter" value="ENTER" ng-click="activityFactorVerification(tempActivityFactor)" />
                        </td>
                    </tr>

                    <tr id="trInputFG" style="display: none">
                        <td>
                            <select class="form-control" id="cbFitnessGoal" ng-model="tempFitnessGoal">
                                <option value="Lose Weight">Lose Weight</option>
                                <option value="Maintain">Maintain</option>
                                <option value="Mass Gain">Mass Gain</option>
                            </select>
                        </td>
                        <td>
                            <input type="button" id="btnEnter" value="ENTER" ng-click="fitnessGoalVerification(tempFitnessGoal)" />
                        </td>
                    </tr>
                </table>
            </div>

            <div class="container" style="width: 25%; padding-bottom: 10px;">
                <!-- Progression Bar -->
                <div class="progress" id="divProgBar">
                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="{{ progBar_current }}" aria-valuemin="0" aria-valuemax="10" style="width:{{ progBar_current }}%">{{ rounded }}%</div>
                </div>

                <!-- GoMB Button -->
                <div class="well" style="display: none;" id="divGo">
                    <input type="button" id="btnGoMB" class="btn btn-primary" value="Go MacroBuddy!" ng-click="goMacroBuddy()" />
                </div>
            </div>

            <div>
                <p id="debug"></p>
            </div>

        </center>
    </div>

    <!-- Footer Bar -->
    <div id="footerBar" class="footer fixed-bottom">
        <center>
            <p></p>
            <p style="display: inline-block; float: inherit;"><strong>Disclaimer:</strong> Always consult a physician before adopting a new dietary/fitness regime.</p>
            <p style="display: inline-block; float: right;">&copy; LedMetal 2017</p>
        </center>
    </div>

</body>

</html>
