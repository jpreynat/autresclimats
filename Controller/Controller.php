<?php

require 'Model/Model.php';

function login() {
    //session_start();
    require "View/{$_SESSION['language']}/Login.php";
}

function logged() {
    //session_start();
    require "View/{$_SESSION['language']}/Logged.php";
}

function home() {
    // GET 4 LAST PROJECTS
    $projects = getLastProjects(4);
    $nbProjects = getNbProjects();
    
    //session_start();
    //header('P3P: CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"');
    /*
    if (!isset($_SESSION['language'])) {
        $_SESSION['language'] = 'fr';
    }
    */
    require "View/{$_SESSION['language']}/Home.php";
}

function contact() {
    //session_start();
    require "View/{$_SESSION['language']}/Contact.php";
}

function about() {
    //session_start();
    require "View/{$_SESSION['language']}/About.php";
}

function project($projectId) {
    $project = getProject($projectId);
    
    //session_start();
    require "View/{$_SESSION['language']}/Project.php";
}

function delete($projectId) {
    $project = getProject($projectId);
    $contactId = $project['c_id'];
    
    // FIRST DELETE PROJECT
    $status = deleteProject($projectId);
    
    if (!$status)
        error('Erreur à la suppression de ' . $project['name'] . '.');
        
    // IF OK DELETE CONTACT
    else {
        $status = deleteContact($contactId);
    
        if ($status) {
            //session_start();
            require "View/{$_SESSION['language']}/ConfirmDelete.php";
        }
        else
            error('Erreur à la suppression du contact du projet ' . $project['name']. '.');
    }
}

function edit($projectId) {
    $project = getProject($projectId);
    
    //session_start();
    require "View/{$_SESSION['language']}/Edit.php";
}

function projectsList($section) {
    // CASE ALL PROJECTS
    if($section == 0) {
        $projects = getProjects();
    }
    // CASE FOR SPECIFIC SECTION
    else {
        $projects = getProjectsBySection($section);
    }
    
    //session_start();
    require "View/{$_SESSION['language']}/ProjectsList.php";
}

function newProject() {
    //session_start();
    require "View/{$_SESSION['language']}/NewProject.php";
}

function saveProject() {
    //session_start();
    require "View/{$_SESSION['language']}/SaveProject.php";
}

function updateProject() {
    //session_start();
    require "View/{$_SESSION['language']}/UpdateProject.php";
}

function adminProjects() {
    $projects = getProjects();
    
    //session_start();
    require "View/{$_SESSION['language']}/AdminProjects.php";
}

function error($errorMsg) {
    //session_start();
    require "View/{$_SESSION['language']}/Error.php";
}

function getCountriesInfo() {
    $countriesCount = countriesService();
    echo json_encode($countriesCount, JSON_UNESCAPED_UNICODE);
}

function getProjectsLocationInfo() {
    $projectsInfo = projectsLocationService();
    echo json_encode($projectsInfo, , JSON_UNESCAPED_UNICODE);
}

?>