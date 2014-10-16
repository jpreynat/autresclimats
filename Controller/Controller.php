<?php

require 'Model/Model.php';

function login() {
    require 'View/Login.php';
}

function logged() {
    require 'View/Logged.php';
}

function home() {
    // GET 4 LAST PROJECTS
    $projects = getLastProjects(4);
    $nbProjects = getNbProjects();
    
    require "View/{$_SESSION['language']}/Home.php";
}

function contact() {
    require 'View/Contact.php';
}

function about() {
    require 'View/About.php';
}

function project($projectId) {
    $project = getProject($projectId);
    require 'View/Project.php';
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
            require 'View/ConfirmDelete.php';
        else
            error('Erreur à la suppression du contact du projet ' . $project['name']. '.');
    }
}

function edit($projectId) {
    $project = getProject($projectId);
    require 'View/Edit.php';
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
    require 'View/ProjectsList.php';
}

function newProject() {
    require 'View/NewProject.php';
}

function saveProject() {
    require 'View/SaveProject.php';
}

function updateProject() {
    require 'View/UpdateProject.php';
}

function adminProjects() {
    $projects = getProjects();
    require 'View/AdminProjects.php';
}

function error($errorMsg) {
    require 'View/Error.php';
}

?>