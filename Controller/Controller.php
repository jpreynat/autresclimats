<?php

require 'Model/Model.php';

function login() {
    require "View/{$_SESSION['language']}/Login.php";
}

function logged() {
    require "View/{$_SESSION['language']}/Logged.php";
}

function home() {
    // GET 4 LAST PROJECTS
    $projects = getLastProjects(4);
    $nbProjects = getNbProjects();
    
    require "View/{$_SESSION['language']}/Home.php";
}

function contact() {
    require "View/{$_SESSION['language']}/Contact.php";
}

function about() {
    require "View/{$_SESSION['language']}/About.php";
}

function project($projectId) {
    $project = getProject($projectId);
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
    
        if ($status)
            require "View/{$_SESSION['language']}/ConfirmDelete.php";
        else
            error('Erreur à la suppression du contact du projet ' . $project['name']. '.');
    }
}

function edit($projectId) {
    $project = getProject($projectId);
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
    require "View/{$_SESSION['language']}/ProjectsList.php";
}

function newProject() {
    require "View/{$_SESSION['language']}/NewProject.php";
}

function saveProject() {
    require "View/{$_SESSION['language']}/SaveProject.php";
}

function updateProject() {
    require "View/{$_SESSION['language']}/UpdateProject.php";
}

function adminProjects() {
    $projects = getProjects();
    require "View/{$_SESSION['language']}/AdminProjects.php";
}

function error($errorMsg) {
    require "View/{$_SESSION['language']}/Error.php";
}

?>